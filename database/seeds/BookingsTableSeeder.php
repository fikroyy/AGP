<?php

use Illuminate\Database\Seeder;
use App\Booking;

class BookingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Booking::create([
            'book_date' => '2012-12-19',
            'book_time' => '19:00:00',
            'status' => 'BELUM DATANG',
            'name' => 'Awaludin',
            'phone' => '081299887766',
            'people_amount' => 4,
        ]);
        Booking::create([
            'book_date' => '2012-12-19',
            'book_time' => '16:00:00',
            'status' => 'SUDAH DATANG',
            'name' => 'Annisa Juwita',
            'phone' => '089812344321',
            'people_amount' => 3,
        ]);
        Booking::create([
            'book_date' => '2012-12-21',
            'book_time' => '19:30:00',
            'status' => 'SUDAH DATANG',
            'name' => 'Ananda Assalam',
            'phone' => '081298989898',
            'people_amount' => 8,
        ]);
        Booking::create([
            'book_date' => '2012-12-18',
            'book_time' => '11:15:00',
            'status' => 'BELUM DATANG',
            'name' => 'William Kanisda',
            'phone' => '083487878787',
            'people_amount' => 4,
        ]);
    }
}
