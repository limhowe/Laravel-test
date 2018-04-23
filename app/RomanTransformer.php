<?php

namespace App;
use League\Fractal;

class RomanTransformer extends Fractal\TransformerAbstract
{
	public function transform(Roman $roman)
	{
	    return [
	        'integer'   => (int)$roman->number,
	        'romanNumeral'    => $roman->roman_number,
	    ];
	}
}
