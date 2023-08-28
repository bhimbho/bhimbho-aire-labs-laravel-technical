<?php
namespace App\Trait;

Trait Star {

    public static function make($filledCount) :string
    {
        $nonFilledStar = '<span class="fa-regular fa-star text-[#EE9F00]"></span>';
        $filledStar = '<span class="fa-solid fa-star text-[#EE9F00]"></span>';
        $blankCount = 5 - $filledCount;
        $star = '';
        $star .= str_repeat($filledStar, $filledCount) . str_repeat($nonFilledStar, $blankCount);
        return $star;
    }
}