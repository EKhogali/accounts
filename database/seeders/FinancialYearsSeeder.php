<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FinancialYearsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('financial_years')->insert([
            'company_id'=> 1
            ,'financial_year'=> 2024
            ,'state_id'=> 1
            ,'archived'=> 0

            ,'created_by'=> 1
            ,'updated_by'=> 1
        ]);
    }
}
