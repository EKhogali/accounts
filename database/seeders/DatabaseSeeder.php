<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            GroupsSeeder::class
            ,TypesSeeder::class
            ,CompaniesSeeder::class
            ,FinancialYearsSeeder::class
            ,AccountsSeeder::class
            ,UsersSeeder::class
        ]);
    }
}
