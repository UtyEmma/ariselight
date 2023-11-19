<?php

namespace App\Models;

use App\Enums\Status;
use App\Traits\HasStatus;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{
    use HasFactory, SoftDeletes, HasUuids, HasStatus;

    protected $fillable = ['title', 'slug', 'description', 'duration', 'type', 'price', 'no_bedrooms', 'no_bathrooms', 'no_floors', 'status', 'image', 'images', 'video', 'address', 'state', 'city', 'landmark', 'extra_info', 'valid_till', 'sold', 'amenities', 'views'];

    protected $attributes = [
        'sold' => false,
        'views' => 0
    ];

    protected $casts = [
        'images' => 'array'
    ];


    function getLocationAttribute(){
        $location = [];
        if($this->address) $location[] = $this->address;
        if($this->city) $location[] = $this->city;
        if($this->state) $location[] = $this->state;
        return implode(', ', $location);
    }

}
