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

    public function create()
    {
        return view('drink.create');
    }

    public function store()
    {
        Drink::create([
            'name'=>request('name_drink'),
            'price'=>request('price'),
        ]);
        

        return redirect('/admin/drink');
    }
    public function edit(Drink $drink)
    {
        return view('drink.edit',compact('drink'));
    }

    public function update(Drink $drink)
    {
       $drink->update([
          'name' =>request('name_drink'),
          'price' =>request('price'),
       ]);
       return redirect('/admin/drink');
    }

}
