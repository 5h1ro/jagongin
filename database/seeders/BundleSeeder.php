<?php

namespace Database\Seeders;

use App\Models\Bundle;
use Illuminate\Database\Seeder;

class BundleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = [
            'Bronze',
            'Silver',
            'Gold'
        ];
        $max = [
            '200',
            '500',
            '1000'
        ];
        for ($i = 0; $i < count($name); $i++) {
            $user = Bundle::create([
                'name'             => $name[$i],
                'max'              => $max[$i]
            ]);
            $user->save();
        };
    }
}
