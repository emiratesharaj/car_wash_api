<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTypesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('user_types')->insert([
            ['type_name' => 'مدير النظام'],
            ['type_name' => 'صاحب سيارة'],
            ['type_name' => 'محاسب'],
            ['type_name' => 'مدير المغسلة'],
            ['type_name' => 'أخرى'],
        ]);
    }
}

