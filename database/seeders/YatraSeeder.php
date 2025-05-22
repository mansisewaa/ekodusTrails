<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class YatraSeeder extends Seeder
{
    public function run()
    {
        $yatras = [
            ['name' => 'Char Dham Yatra', 'price' => '35000', 'location' => 'Uttarakhand', 'days' => '10 Days', 'group' => 'Max 20'],
            ['name' => 'Panch Kedar Trek', 'price' => '45000', 'location' => 'Uttarakhand', 'days' => '12 Days', 'group' => 'Max 12'],
            ['name' => 'Do Dham Yatra', 'price' => '19999', 'location' => 'Uttarakhand', 'days' => '6 Days', 'group' => 'Max 20'],
            ['name' => 'Kedarnath Trek', 'price' => '11000', 'location' => 'Uttarakhand', 'days' => '4 Days', 'group' => 'Max 15'],
            ['name' => 'Badrinath Trek', 'price' => '12000', 'location' => 'Uttarakhand', 'days' => '3 Days', 'group' => 'Max 15'],
            ['name' => 'Tungnath Trek', 'price' => '7000', 'location' => 'Uttarakhand', 'days' => '3 Days', 'group' => 'Max 15'],
            ['name' => 'Hemkund Sahib Trek', 'price' => '8500', 'location' => 'Uttarakhand', 'days' => '4 Days', 'group' => 'Max 15'],
        ];

        DB::table('yatras')->insert($yatras);
    }
}
