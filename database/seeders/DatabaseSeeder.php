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
            'linkimg' => 'https://i.ibb.co/nQx0TKS/man-2.jpg',
            'description' => 'Description 01',
            'active' => 1,
            'price' => 120000,
            'category_id' => 3,
            'created_at' =>  date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'name' => Str::random(10),
            'linkimg' => 'https://i.ibb.co/th6PZtx/man-3.jpg',
            'description' => 'Description 01',
            'active' => 1,
            'price' => 120000,
            'category_id' => 2,
            'created_at' =>  date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'name' => Str::random(10),
            'linkimg' => 'https://i.ibb.co/mJRQ0DF/man-large.jpg',
            'description' => 'Description 01',
            'active' => 1,
            'price' => 120000,
            'category_id' => 2,
            'created_at' =>  date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'name' => Str::random(10),
            'linkimg' => 'https://i.ibb.co/tzzWyz1/product-2.jpg',
            'description' => 'Description 01',
            'active' => 1,
            'price' => 120000,
            'category_id' => 2,
            'created_at' =>  date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'name' => Str::random(10),
            'linkimg' => 'https://i.ibb.co/QPfdKvK/man-4.jpg',
            'description' => 'Description 01',
            'active' => 1,
            'price' => 1230000,
            'category_id' => 3,
            'created_at' =>  date('Y-m-d H:i:s')
        ]);

        DB::table('products')->insert([
            'name' => Str::random(10),
            'linkimg' => 'https://i.ibb.co/BLYKtd8/product-7.jpg',
            'description' => 'Description 01',
            'active' => 1,
            'price' => 1220000,
            'category_id' => 1,
            'created_at' =>  date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'name' => Str::random(10),
            'linkimg' => 'https://i.ibb.co/fHTcGDb/product-5.jpg',
            'description' => 'Description 01',
            'active' => 1,
            'price' => 1120000,
            'category_id' => 1,
            'created_at' =>  date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'name' => Str::random(10),
            'linkimg' => 'https://i.ibb.co/VLhTYF5/product-8.jpg',
            'description' => 'Description 01',
            'active' => 1,
            'price' => 1200000,
            'category_id' => 2,
            'created_at' =>  date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'name' => Str::random(10),
            'linkimg' => 'https://i.ibb.co/RcDHLqk/product-4.jpg',
            'description' => 'Description 01',
            'active' => 1,
            'price' => 150000,
            'category_id' => 1,
            'created_at' =>  date('Y-m-d H:i:s')
        ]);
        DB::table('products')->insert([
            'name' => Str::random(10),
            'linkimg' => 'https://i.ibb.co/hYQx9X7/product-9.jpg',
            'description' => 'Description 01',
            'active' => 1,
            'price' => 130000,
            'category_id' => 1,
            'created_at' =>  date('Y-m-d H:i:s')
        ]);
    }

}
