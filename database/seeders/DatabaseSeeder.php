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
        if(!DB::table('categories') -> exists('id')){
            $this -> categorySeeding();
        }
        if(!DB::table('users') -> exists('id')){
            $this -> accountSeeding();
        }
        $this -> productSeeding();
        $this -> customerSeeding();
    }

    private function categorySeeding(){
        DB::table('categories')->insert([
            'id' => 1,
            'name' => 'categ_01',
            'created_at' =>  date('Y-m-d H:i:s')
        ]);
    }

    private function customerSeeding(){
        DB::table('customers')->insert([
            'FName' => 'Maguire',
            'LName' => 'Harry',
            'Address' => 'ManU, London, UK, Earth',
            'PhoneNo' => '+84961202524'
        ]);
        DB::table('customers')->insert([
            'FName' => 'Cantona',
            'LName' => 'Eric',
            'Address' => 'Manchester U, Old London, UK, Earth',
            'PhoneNo' => '+84387254612'
        ]);
        DB::table('customers')->insert([
            'FName' => 'Kaká',
            'LName' => 'Ricardo Izecson dos Santos Leite',
            'Address' => 'ACM, Milan, Italian, Earth',
            'PhoneNo' => '+84961262292'
        ]);
    }
    private function accountSeeding(){
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => '$2y$10$PF6bes7pK63SYXf1lqCuU.c4lWFxSSH7N18M1k4DBYYKmSgrfqICa',
            'created_at' =>  date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'id' => 2,
            'name' => 'staff',
            'email' => 'staff@gmail.com',
            'password' => '$2y$10$PF6bes7pK63SYXf1lqCuU.c4lWFxSSH7N18M1k4DBYYKmSgrfqICa',
            'created_at' =>  date('Y-m-d H:i:s')
        ]);

        DB::table('roles')->insert(
        [
            'role_name' => 'admin',
            'created_at' =>  date('Y-m-d H:i:s')],
        [
            'role_name' => 'staff',
            'created_at' =>  date('Y-m-d H:i:s')
        ]);
        DB::table('users_roles') -> insert(['role_id' => 1, 'user_id' => 1], ['role_id' => 2, 'user_id' => 2]);

    }

    private function orderSeeding(){

    }

    private function productSeeding(){
        DB::table('products')->insert([
            'name' => Str::random(10),
            'linkimg' => 'https://i.ytimg.com/vi/o-A7IPezcZU/hqdefault.jpg?sqp=-oaymwEXCOADEI4CSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLDwOLBAcIiJ7CiWzynh8x54LYSShg',
            'description' => 'Description 01',
            'active' => 1,
            'price' => 120000,
            'category_id' => 3,
            'created_at' =>  date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'name' => Str::random(10),
            'linkimg' => 'https://i.ytimg.com/vi/1mQwr_O81a4/hqdefault.jpg?sqp=-oaymwEXCOADEI4CSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLBsTybpcsl_cZ67JwRYhfFJPEUBHQ',
            'description' => 'Description 01',
            'active' => 1,
            'price' => 120000,
            'category_id' => 2,
            'created_at' =>  date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'name' => Str::random(10),
            'linkimg' => 'https://i.ytimg.com/vi/qejbofWMgy8/hqdefault.jpg?sqp=-oaymwEcCOADEI4CSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLC3L3hf02dkEm8Wc-G7c8i_-7jGbw',
            'description' => 'Description 01',
            'active' => 1,
            'price' => 120000,
            'category_id' => 2,
            'created_at' =>  date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'name' => Str::random(10),
            'linkimg' => 'https://i.ytimg.com/vi/GgQFO8dL5XQ/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLDRjMN_hnDHjQe-MND_08VvJiv9cQ',
            'description' => 'Description 01',
            'active' => 1,
            'price' => 120000,
            'category_id' => 2,
            'created_at' =>  date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'name' => Str::random(10),
            'linkimg' => 'https://i.ytimg.com/vi/QOOWzrBYn3k/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLB-S05hLe4OUOGNA7U7fLLTfJwcpQ',
            'description' => 'Description 01',
            'active' => 1,
            'price' => 1230000,
            'category_id' => 3,
            'created_at' =>  date('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([
            'name' => Str::random(10),
            'linkimg' => 'https://i.ytimg.com/vi/fVYiAJFND0I/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLBiy-rBhz13t25lstLlA_kN9nkD3g',
            'description' => 'Description 01',
            'active' => 1,
            'price' => 1220000,
            'category_id' => 1,
            'created_at' =>  date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'name' => Str::random(10),
            'linkimg' => 'https://i.ytimg.com/vi/1mQwr_O81a4/hqdefault.jpg?sqp=-oaymwEXCOADEI4CSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLBsTybpcsl_cZ67JwRYhfFJPEUBHQ',
            'description' => 'Description 01',
            'active' => 1,
            'price' => 1120000,
            'category_id' => 1,
            'created_at' =>  date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'name' => Str::random(10),
            'linkimg' => 'https://i.ytimg.com/vi/qejbofWMgy8/hqdefault.jpg?sqp=-oaymwEcCOADEI4CSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLC3L3hf02dkEm8Wc-G7c8i_-7jGbw',
            'description' => 'Description 01',
            'active' => 1,
            'price' => 1200000,
            'category_id' => 2,
            'created_at' =>  date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'name' => Str::random(10),
            'linkimg' => 'https://i.ytimg.com/vi/bPcG7rI9Kxs/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLAjWhqKRqXYVMX2AP7At5k11S9sXA',
            'description' => 'Description 01',
            'active' => 1,
            'price' => 150000,
            'category_id' => 1,
            'created_at' =>  date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'name' => Str::random(10),
            'linkimg' => 'https://i.ytimg.com/vi/sw6oVPrIOVc/hqdefault.jpg?sqp=-oaymwEcCOADEI4CSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLBnAAxoXXQgwlR6yAxsy6ssYAUL5A',
            'description' => 'Description 01',
            'active' => 1,
            'price' => 130000,
            'category_id' => 1,
            'created_at' =>  date('Y-m-d H:i:s')
        ]);
    }

}
