<?php

namespace App;

class IntegerConversion implements IntegerConversionInterface
{
    private $numeral_key = array("M"=>1000, "CM"=>900, "D"=>500, "CD"=>400, "C"=>100, "XC"=>90, "L"=>50, "XL"=>40, "X"=>10, "IX"=>9, "V"=>5, "IV"=>4, "I"=>1);

    public function toRomanNumerals($integer)
    {
        $string = "";
        foreach ($this->numeral_key as $roman_number=>$arabic_number) {
            $string .= str_repeat($roman_number, intval($integer / $arabic_number));
            $integer = $integer % $arabic_number;
        }
        return $string;
    }
}