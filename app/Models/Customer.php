<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Customer extends Model
{
    use HasFactory;

    public function review() : HasOne {
        return $this->hasOne(Review::class);
    }

    protected function fullName() : Attribute {
        return Attribute::make(
            get: fn ($value, $attributes) => ucfirst($attributes['firstname']) .' '. $attributes['lastname'],
        );
    }
}
