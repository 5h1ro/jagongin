<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Beras',
            'Gula',
            'Minyak',
            'Kelapa'
        ];

        foreach ($data as $array) {
            $user = Item::create([
                'name'             => $array
            ]);
            $user->save();
        };
    }
}
