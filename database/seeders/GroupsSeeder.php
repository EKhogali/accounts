<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('groups')->insert([
            'name'=> 'المجموعة الرئيسية'
            ,'archived'=> 0

            ,'created_by'=> 1
            ,'updated_by'=> 1
        ]);
    }
}
