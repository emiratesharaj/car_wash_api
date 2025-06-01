<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WashPricingTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('wash_pricing')->insert([
            ['pricing_date' => '2025-08-05', 'wash_type_id' => 1, 'price' => 10],
            ['pricing_date' => '2025-08-05', 'wash_type_id' => 2, 'price' => 25],
            ['pricing_date' => '2025-08-05', 'wash_type_id' => 3, 'price' => 50],
            ['pricing_date' => '2025-08-05', 'wash_type_id' => 4, 'price' => 50],
        ]);
    }
}
