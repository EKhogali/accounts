<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('types')->insert([
            'name'=> 'الأصول المتداولة'
            ,'name_en'=> 'Current Assets'
            ,'category_txt'=> 'الاصول | Assets'
            ,'archived'=> 0

            ,'created_by'=> 1
            ,'updated_by'=> 1
        ]);

        DB::table('types')->insert([
            'name'=> 'الأصول غير المتداولة'
            ,'name_en'=> 'Non-Current Assets'
            ,'category_txt'=> 'الاصول | Assets'
            ,'archived'=> 0

            ,'created_by'=> 1
            ,'updated_by'=> 1
        ]);

        DB::table('types')->insert([
            'name'=> 'الخصوم المتداولة'
            ,'name_en'=> 'Current Liabilities'
            ,'category_txt'=> 'الخصوم | Liabilities'
            ,'archived'=> 0

            ,'created_by'=> 1
            ,'updated_by'=> 1
        ]);

        DB::table('types')->insert([
            'name'=> 'الخصوم غير المتداولة'
            ,'name_en'=> 'Non-Current Liabilities'
            ,'category_txt'=> 'الخصوم | Liabilities'
            ,'archived'=> 0

            ,'created_by'=> 1
            ,'updated_by'=> 1
        ]);

        DB::table('types')->insert([
            'name'=> 'حقوق الملكية'
            ,'name_en'=> 'Equity'
            ,'category_txt'=> 'حقوق الملكية | Equity'
            ,'archived'=> 0

            ,'created_by'=> 1
            ,'updated_by'=> 1
        ]);

        DB::table('types')->insert([
            'name'=> 'الايرادات'
            ,'name_en'=> 'Revenues'
            ,'category_txt'=> 'الايرادات | Revenues'
            ,'archived'=> 0

            ,'created_by'=> 1
            ,'updated_by'=> 1
        ]);

        DB::table('types')->insert([
            'name'=> 'المصروفات'
            ,'name_en'=> 'Expenses'
            ,'category_txt'=> 'المصروفات | Expenses'
            ,'archived'=> 0

            ,'created_by'=> 1
            ,'updated_by'=> 1
        ]);

    }
}
