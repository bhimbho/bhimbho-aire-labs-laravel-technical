<?php

namespace App\Livewire;

use App\Models\Review;
use Livewire\Component;

class CustomerReviews extends Component
{
    public function render()
    {
        $reviews = Review::with('customer')->get();
        return view('livewire.customer-reviews')->with(['reviews' => $reviews]);
    }
}
