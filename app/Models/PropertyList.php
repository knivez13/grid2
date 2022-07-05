<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyList extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function propertytype()
    {
        return $this->belongsTo(PropertyType::class, 'property_type_id');
    }

    public function listingcategory()
    {
        return $this->belongsTo(ListingCategory::class, 'listing_category_id');
    }

    public function listingtype()
    {
        return $this->belongsTo(ListingType::class, 'listing_type_id');
    }

    public function deliveryunit()
    {
        return $this->belongsTo(DeliveryUnit::class, 'delivery_unit_id');
    }

    public function priority()
    {
        return $this->belongsTo(Priority::class, 'priority_id');
    }

    public function priorityunder()
    {
        return $this->belongsTo(PriorityUnder::class, 'property_under_id');
    }

    public function status()
    {
        return $this->belongsTo(PropertyStatus::class, 'property_status_id');
    }
}
