<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyAminityMap extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function property()
    {
        return $this->belongsTo(PropertyList::class, 'property_id');
    }

    public function aminity()
    {
        return $this->belongsTo(Aminity::class, 'aminity_id');
    }
}
