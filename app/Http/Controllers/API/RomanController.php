<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Roman;
use App\RomanTransformer;
use App\IntegerConversionInterface;
use App\Http\Requests\RomanCreateRequest;

class RomanController extends Controller
{
    protected $integerConverter;

    public function __construct(IntegerConversionInterface $converter)
    {
        //Store IntegerRomanConverter
        $this->integerConverter = $converter;
    }

    /**
     * Store Roman Number
     * 
     * @return jsonResponse
     */
    public function store(RomanCreateRequest $request)
    {
        $inputNumber = $request->input('number');

        //Convert Arabic Roman Number
        $romanNumber = $this->integerConverter->toRomanNumerals($inputNumber);

        //Create Roman Model and Save
        $roman = new Roman;
        $roman->roman_number = $romanNumber;
        $roman->number = $inputNumber;
        $roman->save();

        //Use Fractal to transform Model To View Data Format
        $romans = fractal($roman, new RomanTransformer())->toArray();
        return response()->json($romans);
    }

    public function index()
    {
        
    }
}
