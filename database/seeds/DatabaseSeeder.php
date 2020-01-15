<?php

use App\Drink;
use App\Food;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Food::create([
            'name' => 'ข้าวมันไก่ต้ม',
            'price' => 40,
        ]);

        Food::create([
            'name' => 'ข้าวมันไก่ทอด',
            'price' => 40,
        ]);

        Drink::create([
            'name' =>'โอเลี้ยง',
            'price'=> 15,
        ]);
    }
}
