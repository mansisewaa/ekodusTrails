<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    public function run(): void
    {
        $locations = [
            'Uttarakhand', 'Chopta', 'Uttarkashi', 'Garhwal', 'Mussoorie', 'Yamunotri & Gangotri',
            'Govind National Park', 'Himachal Pradesh', 'Kashmir', 'Ladakh', 'Sikkim', 'Nepal'
        ];

        foreach (array_unique($locations) as $name) {
            DB::table('locations')->insert([
                'name' => $name,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
