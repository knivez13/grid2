<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyNearLocationMap extends Model
{
    use HasFactory;
    protected $guarded = [];

    // protected $visible = ['id', 'nearlocation'];

    public function property()
    {
        return $this->belongsTo(PropertyList::class, 'property_id');
    }

    public function nearlocation()
    {
        return $this->belongsTo(NearLocation::class, 'near_location_id');
    }
}
