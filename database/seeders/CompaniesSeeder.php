<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('companies')->insert([
            'name'=> 'الشركة الأولى'
            ,'archived'=> 0

            ,'created_by'=> 1
            ,'updated_by'=> 1
        ]);
    }
}
