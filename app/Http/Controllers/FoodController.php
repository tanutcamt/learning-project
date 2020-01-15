<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{

    public function index()
    {
        $foods =  Food::all();

        return  view('food.index',compact('foods'));
    }
}
