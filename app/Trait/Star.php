<?php
namespace App\Trait;

use Illuminate\Support\Facades\URL;

Trait Star {

    /**
     * make rating based on supplied argument with fontawesome
     *
     * @param [type] $filledCount
     * @return string
     */
    public static function make($filledCount) :string
    {
        $nonFilledStar = '<span class="fa-regular fa-star text-[#EE9F00]"></span>';
        $filledStar = '<span class="fa-solid fa-star text-[#EE9F00]"></span>';
        $blankCount = 5 - $filledCount;
        $star = '';
        $star .= str_repeat($filledStar, $filledCount) . str_repeat($nonFilledStar, $blankCount);
        return $star;
    }

    /**
     * make rating based on supplied argument with svg asset
     *
     * @param [type] $filledCount
     * @return string
     */
    public static function useSvg($filledCount) :string
    {
        $nonFilledStar = sprintf('<img src="%s">', Url::asset('icons/Empty_Star.svg'));
        $filledStar = sprintf('<img src="%s">', Url::asset('icons/Full_Star.svg'));
        $blankCount = 5 - $filledCount;
        $star = '';
        $star .= str_repeat($filledStar, $filledCount) . str_repeat($nonFilledStar, $blankCount);
        return $star;
    }
}