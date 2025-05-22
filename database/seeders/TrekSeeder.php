<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrekSeeder extends Seeder
{
    public function run(): void
    {
        $treks = [
            ['name' => 'Surya Top Trek', 'price' => '₹13,000', 'location' => 'Uttarakhand', 'days' => '6 Days', 'group' => 'Max 10'],
            ['name' => 'Kedarkantha', 'price' => '₹5,000', 'location' => 'Uttarakhand', 'days' => '5 Days', 'group' => 'Max 12'],
            ['name' => 'Tungnath Trek', 'price' => '₹5,500', 'location' => 'Chopta', 'days' => '3 Days', 'group' => 'Max 15'],
            ['name' => 'Do Dham Yatra', 'price' => '₹17,000', 'location' => 'Yamunotri & Gangotri', 'days' => '7 Days', 'group' => 'Max 20'],
            ['name' => 'Char Dham Yatra', 'price' => '₹30,000', 'location' => 'Uttarakhand', 'days' => '12 Days', 'group' => 'Max 20'],
            ['name' => 'Chopta Chandrashila Trek', 'price' => '₹6,000', 'location' => 'Chopta', 'days' => '4 Days', 'group' => 'Max 12'],
            ['name' => 'Dayara Bugyal & Dodital Trek', 'price' => '₹13,000', 'location' => 'Uttarkashi', 'days' => '7 Days', 'group' => 'Max 10'],
            ['name' => 'Rudranath Trek', 'price' => '₹19,000', 'location' => 'Garhwal', 'days' => '6 Days', 'group' => 'Max 8'],
            ['name' => 'Gartang Gali Trek', 'price' => '₹6,000', 'location' => 'Uttarkashi', 'days' => '2 Days', 'group' => 'Max 10'],
            ['name' => 'Nagtiba Trek', 'price' => '₹3,000', 'location' => 'Mussoorie', 'days' => '2 Days', 'group' => 'Max 15'],
            ['name' => 'Ruinsara Tal Har Ki Dun Trek', 'price' => '₹9,000', 'location' => 'Govind National Park', 'days' => '8 Days', 'group' => 'Max 10'],
            ['name' => 'Sari Pass Trek', 'price' => '₹6,000', 'location' => 'Himachal Pradesh', 'days' => '7 Days', 'group' => 'Max 12'],
            ['name' => 'Spiti Valley Trek', 'price' => '₹20,000', 'location' => 'Himachal Pradesh', 'days' => '10 Days', 'group' => 'Max 8'],
            ['name' => 'Sar Pass Trek', 'price' => '₹6,000', 'location' => 'Himachal Pradesh', 'days' => '8 Days', 'group' => 'Max 15'],
            ['name' => 'Chandratal Trek', 'price' => '₹12,000', 'location' => 'Himachal Pradesh', 'days' => '5 Days', 'group' => 'Max 10'],
            ['name' => 'Hampta Pass Trek', 'price' => '₹6,500', 'location' => 'Himachal Pradesh', 'days' => '7 Days', 'group' => 'Max 12'],
            ['name' => 'Kashmir Great Lakes Trek', 'price' => '₹22,000', 'location' => 'Kashmir', 'days' => '8 Days', 'group' => 'Max 10'],
            ['name' => 'Tarsar Marsar Trek', 'price' => '₹20,000', 'location' => 'Kashmir', 'days' => '7 Days', 'group' => 'Max 8'],
            ['name' => 'Gadsar Lake Trek', 'price' => '₹18,000', 'location' => 'Kashmir', 'days' => '9 Days', 'group' => 'Max 10'],
            ['name' => 'Markha Valley Trek', 'price' => '₹24,000', 'location' => 'Ladakh', 'days' => '10 Days', 'group' => 'Max 10'],
            ['name' => 'Stok Kangri Trek', 'price' => '₹30,000', 'location' => 'Ladakh', 'days' => '12 Days', 'group' => 'Max 6'],
            ['name' => 'Nubra Valley Trek', 'price' => '₹28,000', 'location' => 'Ladakh', 'days' => '8 Days', 'group' => 'Max 10'],
            ['name' => 'Dzongri Trek', 'price' => '₹15,000', 'location' => 'Sikkim', 'days' => '7 Days', 'group' => 'Max 10'],
            ['name' => 'Goechala Trek', 'price' => '₹20,000', 'location' => 'Sikkim', 'days' => '10 Days', 'group' => 'Max 8'],
            ['name' => 'Everest Base Camp Trek', 'price' => '₹50,000', 'location' => 'Nepal', 'days' => '14 Days', 'group' => 'Max 12'],
            ['name' => 'Annapurna Circuit Trek', 'price' => '₹40,000', 'location' => 'Nepal', 'days' => '14 Days', 'group' => 'Max 12'],
            ['name' => 'Langtang Valley Trek', 'price' => '₹25,000', 'location' => 'Nepal', 'days' => '10 Days', 'group' => 'Max 12'],
            ['name' => 'Manaslu Circuit Trek', 'price' => '₹55,000', 'location' => 'Nepal', 'days' => '16 Days', 'group' => 'Max 8'],
        ];

        foreach ($treks as $trek) {

             $locationId = Location::where('name', $trek['location'])->value('id');

            DB::table('treks')->insert([
                'name' => $trek['name'],
                'location' =>$locationId ,
                'price' => floatval(str_replace(['₹', ','], '', $trek['price'])),
                'duration' => $trek['days'],
                'max_group_size' => (int) filter_var($trek['group'], FILTER_SANITIZE_NUMBER_INT),
                'rating' => rand(3, 5),
                'review_count' => rand(10, 300),
                'difficulty' => ['Easy', 'Moderate', 'Difficult'][array_rand(['Easy', 'Moderate', 'Difficult'])],
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
