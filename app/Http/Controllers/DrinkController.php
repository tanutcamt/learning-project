<?php

namespace App\Http\Controllers;

use App\Drink;
use Illuminate\Http\Request;
use App\Food;
class DrinkController extends Controller
{
    public function index()
    {
        $drinks = Drink::all();
        return view('drink.index',compact('drinks'));

    }
}
