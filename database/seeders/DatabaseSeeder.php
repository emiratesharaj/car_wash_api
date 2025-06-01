<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use InstanceMessagesTypesTableSeeder;
use WashPricingTableSeeder;
use WashTypesTableSeeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call([
            WashTypesTableSeeder::class,
            WashPricingTableSeeder::class,
            InstanceMessagesTypesTableSeeder::class,
            ExpTypesTableSeeder::class,
            UnitTypesTableSeeder::class,
            UserTypesTableSeeder::class,
        ]);
    }
}
