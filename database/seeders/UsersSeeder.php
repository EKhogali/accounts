<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=>'Elmothana'
            ,'type'=> 3
            ,'email'=>'elmothana.elmobarak@gmail.com'
            ,'password'=>Hash::make('Acc#2024')
            ,'created_by'=> 1
            ,'updated_by'=> 1

        ]);
    }
}
