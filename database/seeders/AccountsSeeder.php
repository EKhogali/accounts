<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $code = 1;
        DB::table('accounts')->insert([
            'name'=> 'النقد'
            ,'code'=> '00'.$code
            ,'name_en'=> 'Cash'
            ,'type_id'=> 1
            ,'group_id'=> 1
            ,'archived'=> 0

            ,'created_by'=> 1
            ,'updated_by'=> 1
        ]);

        $code +=1;
        DB::table('accounts')->insert([
            'name'=> 'الذمم المدينة'
            ,'name_en'=> 'Accounts Receivable'
            ,'code'=> '00'.$code
            ,'type_id'=> 1
            ,'group_id'=> 1
            ,'archived'=> 0

            ,'created_by'=> 1
            ,'updated_by'=> 1
        ]);

        $code +=1;
        DB::table('accounts')->insert([
            'name'=> 'المخزون'
            ,'name_en'=> 'Inventory'
            ,'code'=> '00'.$code
            ,'type_id'=> 1
            ,'group_id'=> 1
            ,'archived'=> 0

            ,'created_by'=> 1
            ,'updated_by'=> 1
        ]);

        $code +=1;
        DB::table('accounts')->insert([
            'name'=> 'المصروفات المدفوعة مقدماً'
            ,'name_en'=> 'Prepaid Expenses'
            ,'code'=> '00'.$code
            ,'type_id'=> 1
            ,'group_id'=> 1
            ,'archived'=> 0

            ,'created_by'=> 1
            ,'updated_by'=> 1
        ]);

        $code +=1;
        DB::table('accounts')->insert([
            'name'=> 'الاملاك والمعدات'
            ,'name_en'=> 'Property, Plant, and Equipment'
            ,'code'=> '00'.$code
            ,'type_id'=> 2
            ,'group_id'=> 1
            ,'archived'=> 0

            ,'created_by'=> 1
            ,'updated_by'=> 1
        ]);

        $code +=1;
        DB::table('accounts')->insert([
            'name'=> 'الأصول غير الملموسة مثل براءات الاختراع والعلامات التجارية'
            ,'name_en'=> 'Intangible Assets'
            ,'code'=> '00'.$code
            ,'type_id'=> 2
            ,'group_id'=> 1
            ,'archived'=> 0

            ,'created_by'=> 1
            ,'updated_by'=> 1
        ]);

        $code +=1;
        DB::table('accounts')->insert([
            'name'=> 'الاستثمارات طويلة الأجل'
            ,'name_en'=> 'Long-term Investments'
            ,'code'=> '00'.$code
            ,'type_id'=> 2
            ,'group_id'=> 1
            ,'archived'=> 0

            ,'created_by'=> 1
            ,'updated_by'=> 1
        ]);

        $code +=1;
        DB::table('accounts')->insert([
            'name'=> 'الاهلاك المتراكم'
            ,'name_en'=> 'Accumulated Depreciation'
            ,'code'=> '00'.$code
            ,'type_id'=> 2
            ,'group_id'=> 1
            ,'archived'=> 0

            ,'created_by'=> 1
            ,'updated_by'=> 1
        ]);

        $code +=1;
        DB::table('accounts')->insert([
            'name'=> 'الذمم الدائنة'
            ,'name_en'=> 'Accounts Payable'
            ,'code'=> '00'.$code
            ,'type_id'=> 3
            ,'group_id'=> 1
            ,'archived'=> 0

            ,'created_by'=> 1
            ,'updated_by'=> 1
        ]);

        $code +=1;
        DB::table('accounts')->insert([
            'name'=> 'القروض القصيرة الأجل'
            ,'name_en'=> 'Short-term Loans'
            ,'code'=> '00'.$code
            ,'type_id'=> 3
            ,'group_id'=> 1
            ,'archived'=> 0

            ,'created_by'=> 1
            ,'updated_by'=> 1
        ]);

        $code +=1;
        DB::table('accounts')->insert([
            'name'=> 'المصاريف المستحقة'
            ,'name_en'=> 'Accrued Expenses'
            ,'code'=> '00'.$code
            ,'type_id'=> 3
            ,'group_id'=> 1
            ,'archived'=> 0

            ,'created_by'=> 1
            ,'updated_by'=> 1
        ]);

        $code +=1;
        DB::table('accounts')->insert([
            'name'=> 'القروض طويلة الأجل'
            ,'name_en'=> 'Long-term Loans'
            ,'code'=> '00'.$code
            ,'type_id'=> 4
            ,'group_id'=> 1
            ,'archived'=> 0

            ,'created_by'=> 1
            ,'updated_by'=> 1
        ]);

        $code +=1;
        DB::table('accounts')->insert([
            'name'=> 'السندات المستحقة الدفع'
            ,'name_en'=> 'Bonds Payable'
            ,'code'=> '00'.$code
            ,'type_id'=> 4
            ,'group_id'=> 1
            ,'archived'=> 0

            ,'created_by'=> 1
            ,'updated_by'=> 1
        ]);

        $code +=1;
        DB::table('accounts')->insert([
            'name'=> 'الضرائب المؤجلة'
            ,'name_en'=> 'Deferred Tax Liabilities'
            ,'code'=> '00'.$code
            ,'type_id'=> 4
            ,'group_id'=> 1
            ,'archived'=> 0

            ,'created_by'=> 1
            ,'updated_by'=> 1
        ]);

        $code +=1;
        DB::table('accounts')->insert([
            'name'=> 'الأسهم العادية'
            ,'name_en'=> 'Common Stock'
            ,'code'=> '00'.$code
            ,'type_id'=> 5
            ,'group_id'=> 1
            ,'archived'=> 0

            ,'created_by'=> 1
            ,'updated_by'=> 1
        ]);

        $code +=1;
        DB::table('accounts')->insert([
            'name'=> 'الأرباح المحتجزة'
            ,'name_en'=> 'Retained Earnings'
            ,'code'=> '00'.$code
            ,'type_id'=> 5
            ,'group_id'=> 1
            ,'archived'=> 0

            ,'created_by'=> 1
            ,'updated_by'=> 1
        ]);

        $code +=1;
        DB::table('accounts')->insert([
            'name'=> 'رأس المال المدفوع الإضافي'
            ,'name_en'=> 'Additional Paid-in Capital'
            ,'code'=> '00'.$code
            ,'type_id'=> 5
            ,'group_id'=> 1
            ,'archived'=> 0

            ,'created_by'=> 1
            ,'updated_by'=> 1
        ]);

        $code +=1;
        DB::table('accounts')->insert([
            'name'=> 'أسهم الخزينة'
            ,'name_en'=> 'Treasury Stock'
            ,'code'=> '00'.$code
            ,'type_id'=> 5
            ,'group_id'=> 1
            ,'archived'=> 0

            ,'created_by'=> 1
            ,'updated_by'=> 1
        ]);

        $code +=1;
        DB::table('accounts')->insert([
            'name'=> 'ايرادات المبيعات'
            ,'name_en'=> 'Sales Revenue'
            ,'code'=> '00'.$code
            ,'type_id'=> 6
            ,'group_id'=> 1
            ,'archived'=> 0

            ,'created_by'=> 1
            ,'updated_by'=> 1
        ]);

        $code +=1;
        DB::table('accounts')->insert([
            'name'=> 'ايرادات الخدمات'
            ,'name_en'=> 'Service Revenue'
            ,'code'=> '00'.$code
            ,'type_id'=> 6
            ,'group_id'=> 1
            ,'archived'=> 0

            ,'created_by'=> 1
            ,'updated_by'=> 1
        ]);

        $code +=1;
        DB::table('accounts')->insert([
            'name'=> 'دخل الإيجارات'
            ,'name_en'=> 'Rental Income'
            ,'code'=> '00'.$code
            ,'type_id'=> 6
            ,'group_id'=> 1
            ,'archived'=> 0

            ,'created_by'=> 1
            ,'updated_by'=> 1
        ]);

        $code +=1;
        DB::table('accounts')->insert([
            'name'=> 'تكلفة البضاعة المباعة'
            ,'name_en'=> 'Cost of Goods Sold'
            ,'code'=> '00'.$code
            ,'type_id'=> 7
            ,'group_id'=> 1
            ,'archived'=> 0

            ,'created_by'=> 1
            ,'updated_by'=> 1
        ]);

        $code +=1;
        DB::table('accounts')->insert([
            'name'=> 'مصاريف الرواتب'
            ,'name_en'=> 'Salaries Expense'
            ,'code'=> '00'.$code
            ,'type_id'=> 7
            ,'group_id'=> 1
            ,'archived'=> 0

            ,'created_by'=> 1
            ,'updated_by'=> 1
        ]);

        $code +=1;
        DB::table('accounts')->insert([
            'name'=> 'مصاريف الإيجار'
            ,'name_en'=> 'Rent Expense'
            ,'code'=> '00'.$code
            ,'type_id'=> 7
            ,'group_id'=> 1
            ,'archived'=> 0

            ,'created_by'=> 1
            ,'updated_by'=> 1
        ]);

        $code +=1;
        DB::table('accounts')->insert([
            'name'=> 'مصاريف المرافق'
            ,'name_en'=> 'Utilities Expense'
            ,'code'=> '00'.$code
            ,'type_id'=> 7
            ,'group_id'=> 1
            ,'archived'=> 0

            ,'created_by'=> 1
            ,'updated_by'=> 1
        ]);

        $code +=1;
        DB::table('accounts')->insert([
            'name'=> 'مصاريف الإهلاك'
            ,'name_en'=> 'Depreciation Expense'
            ,'code'=> '00'.$code
            ,'type_id'=> 7
            ,'group_id'=> 1
            ,'archived'=> 0

            ,'created_by'=> 1
            ,'updated_by'=> 1
        ]);
    }
}
