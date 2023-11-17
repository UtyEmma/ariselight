<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{
    use HasFactory, SoftDeletes, HasUuids;

    protected $fillable = ['title', 'slug', 'description', 'duration', 'type', 'price', 'no_bedrooms', 'no_bathrooms', 'no_floors', 'status', 'images', 'video', 'address', 'state', 'city', 'landmark', 'extra_info', 'valid_till', 'sold', 'amenities', 'views'];

    protected $attributes = [
        'sold' => false
    ];

}
