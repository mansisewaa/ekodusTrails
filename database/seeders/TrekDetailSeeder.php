<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrekDetailSeeder extends Seeder
{
    public function run()
    {
        DB::table('trek_details')->insert([
            'trek_id' => 2,  // This refers to Kedarkantha Trek (assuming it has trek_id = 2)
            'overview' => 'Kedarkantha is a famous winter trek located in Uttarakhand, known for its snow-covered peaks and mesmerizing views.',
            'highlights' => 'Snow-clad mountain peaks, panoramic views of the Himalayan ranges, trek through pine forests, and camping at high altitudes.',
            'itinerary' => 'Day 1: Arrive at Sankri, Day 2: Sankri to Juda Ka Talab, Day 3: Juda Ka Talab to Kedarkantha Base, Day 4: Kedarkantha Summit and descend to Sankri, Day 5: Departure.',
            'includes' => 'Meals (Breakfast, Lunch, Dinner), Expert Trek Leader, Camping Equipment, Transportation (Sankri to Sankri), Permits.',
            'excludes' => 'Personal expenses, Emergency medical charges, Any kind of insurance.',
            'reviews' => 'The Kedarkantha trek is an incredible experience, with breathtaking views of the snow-covered mountains and excellent camping spots.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
