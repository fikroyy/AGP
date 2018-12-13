<?php

use Illuminate\Database\Seeder;
use App\Pesan_online;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pesan_online::create([
            'name' => 'Azhari',
            'menu' => 'Ayam Geprek Original',
            'level' => 3,
            'pcs' => 5,
            'your_money' => 100000,
            'phone' => '089812121212',
            'locate' => 'Jalan Babakan, Desa Babakan Lebak',
            'time' => '13:00:00',
            'voucher' => 'AGPLUNCH',
            'note' => 'Antar ke kosan Mawar',
            'status' => 'BELUM KONFIRMASI',
        ]);
        Pesan_online::create([
            'name' => 'Bianca S',
            'menu' => 'Ayam Geprek Saus Padang',
            'level' => 2,
            'pcs' => 1,
            'your_money' => 20000,
            'phone' => '089812123434',
            'locate' => 'Jalan Babakan, Desa Babakan Lio',
            'time' => '12:00:00',
            'voucher' => '',
            'note' => 'Antar ke kosan Melati',
            'status' => 'BELUM KONFIRMASI',
        ]);
        Pesan_online::create([
            'name' => 'Narendra Ahmad',
            'menu' => 'Ayam Bakar',
            'level' => 1,
            'pcs' => 2,
            'your_money' => 50000,
            'phone' => '087765433434',
            'locate' => 'Jalan Perwira, Dramaga',
            'time' => '14:00:00',
            'voucher' => '',
            'note' => 'Ambil sendiri',
            'status' => 'SUDAH KONFIRMASI',
        ]);
    }
}
