<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            // 'name'=>'How to Sell Online',
            // 'price'=>'3000',
            // 'category'=>'Comedy',
            // 'description'=>'Absolutely Hilarious',
            // 'gallery'=>'https://images.pexels.com/photos/904620/pexels-photo-904620.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500'

            // 'name'=>'Fate of Earth',
            // 'price'=>'3000',
            // 'category'=>'Documentary',
            // 'description'=>'Will gut you to the bones',
            // 'gallery'=>'https://images.pexels.com/photos/1181671/pexels-photo-1181671.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500'

            'name'=>'Science Of Yoga',
            'price'=>'3000',
            'category'=>'Fitnes',
            'description'=>'All you need to know about Yoga',
            'gallery'=>'https://images.pexels.com/photos/2228580/pexels-photo-2228580.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500'
            
            ]); 
    }
}
