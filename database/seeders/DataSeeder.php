<?php

namespace Database\Seeders;

use App\Models\Data;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $from = [
            'Sumidi',
            'Sulastri',
            'Sukadi',
            'Supomo',
            'Suntoyo',
            'Sumadi',
            'Sumitri',
            'Sundari',
            'Suhari',
            'Sukimin',
            'Sukat',
            'Sumaji'
        ];
        $city = [
            'Gemarang',
            'Winongo',
            'Madiun',
            'Tawang',
            'Kare',
            'Gemarang',
            'Gemarang',
            'Dagangan',
            'Kare',
            'Kare',
            'Dagangan',
            'Caruban'
        ];
        $money = [
            '50000',
            '100000',
            '20000',
            '50000',
            '100000',
            '200000',
            '50000',
            '20000',
            '20000',
            '50000',
            '100000',
            '20000'
        ];
        $item = [
            'Gula 5, Beras 2, Minyak 2',
            'Kelapa 2, Mie 2, Beras 2',
            'Minyak 2, Gula 1',
            'Mie 2',
            'Gula 3, Rokok 2',
            'Minyak 10, Beras 1',
            'Rokok 2, Mie 2, Kelapa 1',
            'Beras 10, Mie 3',
            'Minyak 5, Gula 10',
            'Rokok 1, Minyak 2',
            'Beras 2, Mie 1',
            'Kelapa 2'
        ];
        $note = [
            null,
            null,
            'Minyak Fortune',
            'Mie Eko',
            'Rokok Surya',
            'Minyak Fortune',
            'Rokok Surya',
            'Mie Eko',
            'Minyak Salma',
            'Rokok Dji Sam Soe',
            null,
            null
        ];
        for ($i = 0; $i < count($from); $i++) {
            $user = Data::create([
                'idUser'            => 1,
                'from'              => $from[$i],
                'city'              => $city[$i],
                'money'             => $money[$i],
                'item'              => $item[$i],
                'note'              => $note[$i],
            ]);
            $user->save();
        };
    }
}
