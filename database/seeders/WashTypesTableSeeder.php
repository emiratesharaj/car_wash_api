<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WashTypesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('wash_types')->insert([
            ['type_name' => 'خارجي'],
            ['type_name' => 'خارجي-داخلي'],
            ['type_name' => 'غسيل فاخر(سريع)'],
            ['type_name' => 'غسيل فرش (سجاد)'],
            ['type_name' => 'أخرى'],
        ]);
    }
}

