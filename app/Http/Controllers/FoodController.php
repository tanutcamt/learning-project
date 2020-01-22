<?php

namespace App\Http\Controllers;

use App\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{

    public function index()
    {
        $foods = Food::all();
        return view('food.index',compact('foods'));
    }

    public function create()
    {
        return view('food.create');
    }

    public function store()
    {
        Food::create([
            'name'=>request('name_food'),
            'price'=>request('price'),
        ]);
        
        return redirect('/admin/food');
    }
        public function edit(Food $food)
    {
        return view('food.edit',compact('food'));
    }

    public function update(Food $food)
    {
        $food->update([
            'name'=>request('name_food'),
            'price'=>request('price'),
        ]);
        return redirect('/admin/food');
    }

    public function destroy(Food $food)
    {
        $food->delete();
        return redirect('/admin/food');
    }
    
}
