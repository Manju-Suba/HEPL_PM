<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Numbers\V2\RegulatoryCompliance\Bundle;

use Twilio\Deserialize;
use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains beta products that are subject to change. Use them with caution.
 *
 * @property string $sid
 * @property string $accountSid
 * @property string $regulationSid
 * @property string $friendlyName
 * @property string $status
 * @property \DateTime $validUntil
 * @property string $email
 * @property string $statusCallback
 * @property \DateTime $dateCreated
 * @property \DateTime $dateUpdated
 */
class ReplaceItemsInstance extends InstanceResource {
    /**
     * Initialize the ReplaceItemsInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $bundleSid The unique string that identifies the resource.
     */
    public function __construct(Version $version, array $payload, string $bundleSid) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'sid' => Values::array_get($payload, 'sid'),
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'regulationSid' => Values::array_get($payload, 'regulation_sid'),
            'friendlyName' => Values::array_get($payload, 'friendly_name'),
            'status' => Values::array_get($payload, 'status'),
            'validUntil' => Deserialize::dateTime(Values::array_get($payload, 'valid_until')),
            'email' => Values::array_get($payload, 'email'),
            'statusCallback' => Values::array_get($payload, 'status_callback'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
        ];

        $this->solution = ['bundleSid' => $bundleSid, ];
    }

    /**
     * Magic getter to access properties
     *
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get(string $name) {
        if (\array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }

        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown property: ' . $name);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        return '[Twilio.Numbers.V2.ReplaceItemsInstance]';
    }
}