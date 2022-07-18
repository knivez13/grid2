<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyAdditionalFields extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $visible = ['id', 'addfield', 'addvalue'];
}
