<?php

namespace App\Models;

use App\Trait\Star;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    use HasFactory, Star;

    public function customer() : BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }
    
    protected function rating() : Attribute 
    {
        return Attribute::make(
            get: fn (string $value) => Star::make($value),
        );
    }
}
