<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExpTypesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('exp_types')->insert([
            ['exp_name' => 'شراء صابون'],
            ['exp_name' => 'شراء فوم'],
            ['exp_name' => 'ملمع زجاج'],
            ['exp_name' => 'معطر'],
            ['exp_name' => 'مربيات عاملين'],
            ['exp_name' => 'أخرى'],
        ]);
    }
}
