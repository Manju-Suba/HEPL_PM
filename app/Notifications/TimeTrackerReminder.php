<?php

namespace App\Notifications;

use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\SlackMessage;
use NotificationChannels\OneSignal\OneSignalChannel;
use NotificationChannels\OneSignal\OneSignalMessage;

class TimeTrackerReminder extends BaseNotification
{

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($event)
    {
        $this->company = $event->company;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via()
    {
        $via = ['mail', 'slack', OneSignalChannel::class];

        return $via;
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return MailMessage
     */
    // phpcs:ignore
    public function toMail($notifiable): MailMessage
    {
        $url = route('tasks.index');
        $url = getDomainSpecificUrl($url, $this->company);
        $content = __('email.trackerReminder.text');

        return parent::build()
            ->subject(__('email.trackerReminder.subject'))
            ->markdown('mail.email', [
                'url' => $url,
                'content' => $content,
                'themeColor' => $this->company->header_color,
                'actionText' => __('email.trackerReminder.action')
            ]);
    }

    public function toArray()
    {
        return [];
    }

    public function toSlack($notifiable) // phpcs:ignore
    {
        $new = new SlackMessage;

        $slack = $notifiable->company->slackSetting;

        return $new
            ->from(config('app.name'))
            ->to('@' . $notifiable->employeeDetail->slack_username)
            ->image($slack->slack_logo_url)
            ->content('>*' . __('email.trackerReminder.subject') . '*' . "\n" . __('email.trackerReminder.text') . ' ');
    }

    // phpcs:ignore
    public function toOneSignal($notifiable)
    {
        return OneSignalMessage::create()
            ->subject(__('email.trackerReminder.subject'))
            ->body( __('email.trackerReminder.text'));
    }

}
