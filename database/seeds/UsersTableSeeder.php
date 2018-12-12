<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Andi Arief',
            'email' => 'andi.a@gmail.com',
            'alamat' => 'Jalan Swangsa no. 1, Bogor',
            'no_hp' => '089812345678',
            'password' => Hash::make('12345678'),
        ]);
        User::create([
            'name' => 'Budi Doremi',
            'email' => 'budi.d@gmail.com',
            'alamat' => 'Jalan Maleo no. 5, Bogor',
            'no_hp' => '089812349876',
            'password' => Hash::make('12345678'),
        ]);
        User::create([
            'name' => 'Anita Hutapea',
            'email' => 'anita.h@gmail.com',
            'alamat' => 'Apartemen Narena lantai 5 no. 17, Bekasi',
            'no_hp' => '089887654321',
            'password' => Hash::make('12345678'),
        ]);
    }
}
