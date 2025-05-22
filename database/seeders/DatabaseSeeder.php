<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Admin',
        //     'email' => 'aadmin@gmail.com',
        //     'password' => bcrypt('password'),
        // ]);

        $this->call([
            LocationSeeder::class,
            TrekSeeder::class
        ]);
    }
}
