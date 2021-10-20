<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = User::create([
            'name'             => 'Andi',
            'email'            => 'admin@admin.com',
            'password'         => Crypt::encrypt('password'),
            'role'             => 'admin',
            'idBundle'         => 1
        ]);
        $user->save();
    }
}
