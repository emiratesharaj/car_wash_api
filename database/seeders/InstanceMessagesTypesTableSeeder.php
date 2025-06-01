<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstanceMessagesTypesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('instance_messages_types')->insert([
            ['message' => 'تم تأكيد الحجز'],
            ['message' => 'جاري الغسيل الآن'],
            ['message' => 'السيارة تم غسلها، و جاهزة للاستلام'],
            ['message' => 'أخرى'],
        ]);
    }
}
