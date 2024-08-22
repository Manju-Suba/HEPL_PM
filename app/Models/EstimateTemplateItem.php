<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EstimateTemplateItem extends BaseModel
{

    // protected $table = 'estimate_template_items';

    protected $guarded = ['id'];

    protected $with = ['EstimateTemplateItemImage'];

    public function estimateTemplateItemImage(): HasOne
    {
        return $this->hasOne(EstimateTemplateItemImage::class, 'estimate_template_item_id');
    }

    public static function taxbyid($id)
    {
        return Tax::where('id', $id)->withTrashed();
    }

}