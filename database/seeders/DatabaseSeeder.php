<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this -> productSeeding();
    }

    private function productSeeding(){
        DB::table('products')->insert([
            'name' => Str::random(10),
            'linkimg' => 'https://i.ytimg.com/vi/o-A7IPezcZU/hqdefault.jpg?sqp=-oaymwEXCOADEI4CSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLDwOLBAcIiJ7CiWzynh8x54LYSShg',
            'description' => 'Description 01',
            'active' => 1,
            'price' => 120000,
            'category_id' => 3
        ]);
        DB::table('products')->insert([
            'name' => Str::random(10),
            'linkimg' => 'https://i.ytimg.com/vi/1mQwr_O81a4/hqdefault.jpg?sqp=-oaymwEXCOADEI4CSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLBsTybpcsl_cZ67JwRYhfFJPEUBHQ',
            'description' => 'Description 01',
            'active' => 1,
            'price' => 120000,
            'category_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => Str::random(10),
            'linkimg' => 'https://i.ytimg.com/vi/qejbofWMgy8/hqdefault.jpg?sqp=-oaymwEcCOADEI4CSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLC3L3hf02dkEm8Wc-G7c8i_-7jGbw',
            'description' => 'Description 01',
            'active' => 1,
            'price' => 120000,
            'category_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => Str::random(10),
            'linkimg' => 'https://i.ytimg.com/vi/GgQFO8dL5XQ/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLDRjMN_hnDHjQe-MND_08VvJiv9cQ',
            'description' => 'Description 01',
            'active' => 1,
            'price' => 120000,
            'category_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => Str::random(10),
            'linkimg' => 'https://i.ytimg.com/vi/QOOWzrBYn3k/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLB-S05hLe4OUOGNA7U7fLLTfJwcpQ',
            'description' => 'Description 01',
            'active' => 1,
            'price' => 1230000,
            'category_id' => 3
        ]);

        DB::table('products')->insert([
            'name' => Str::random(10),
            'linkimg' => 'https://i.ytimg.com/vi/fVYiAJFND0I/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLBiy-rBhz13t25lstLlA_kN9nkD3g',
            'description' => 'Description 01',
            'active' => 1,
            'price' => 1220000,
            'category_id' => 1
        ]);
        DB::table('products')->insert([
            'name' => Str::random(10),
            'linkimg' => 'https://i.ytimg.com/vi/1mQwr_O81a4/hqdefault.jpg?sqp=-oaymwEXCOADEI4CSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLBsTybpcsl_cZ67JwRYhfFJPEUBHQ',
            'description' => 'Description 01',
            'active' => 1,
            'price' => 1120000,
            'category_id' => 1
        ]);
        DB::table('products')->insert([
            'name' => Str::random(10),
            'linkimg' => 'https://i.ytimg.com/vi/qejbofWMgy8/hqdefault.jpg?sqp=-oaymwEcCOADEI4CSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLC3L3hf02dkEm8Wc-G7c8i_-7jGbw',
            'description' => 'Description 01',
            'active' => 1,
            'price' => 1200000,
            'category_id' => 2
        ]);
        DB::table('products')->insert([
            'name' => Str::random(10),
            'linkimg' => 'https://i.ytimg.com/vi/bPcG7rI9Kxs/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLAjWhqKRqXYVMX2AP7At5k11S9sXA',
            'description' => 'Description 01',
            'active' => 1,
            'price' => 150000,
            'category_id' => 1
        ]);
        DB::table('products')->insert([
            'name' => Str::random(10),
            'linkimg' => 'https://i.ytimg.com/vi/sw6oVPrIOVc/hqdefault.jpg?sqp=-oaymwEcCOADEI4CSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLBnAAxoXXQgwlR6yAxsy6ssYAUL5A',
            'description' => 'Description 01',
            'active' => 1,
            'price' => 130000,
            'category_id' => 1
        ]);
    }
}
