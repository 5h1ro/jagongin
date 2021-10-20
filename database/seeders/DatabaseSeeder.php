<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            BundleSeeder::class,
            UserSeeder::class,
            ItemSeeder::class,
            DataSeeder::class,
        ]);
    }
}
