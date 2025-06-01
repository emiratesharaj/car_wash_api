<?php

namespace Database\Seeders;

// database/seeders/UnitTypesTableSeeder.php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitTypesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('unit_types')->insert([
            ['unit_name' => 'دستة'],
            ['unit_name' => 'كرتونة'],
            ['unit_name' => 'جوال'],
            ['unit_name' => 'برميل'],
            ['unit_name' => 'أخرى'],
        ]);
    }
}
