<?php

use Illuminate\Database\Seeder;
use App\Promo;

class PromosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Promo::create([
            'title' => 'DISKON 20% Wisudawan',
            'code' => 'WISUDAAAGP',
            'percentage' => 0.2,
            'valid_from' => '2018-12-17',
            'valid_until' => '2018-12-20',
        ]);
        Promo::create([
            'title' => 'Makan Rp50000 Diskon 15%',
            'code' => 'RAMEHEMAT',
            'percentage' => 0.15,
            'valid_from' => '2018-12-16',
            'valid_until' => '2019-01-21',
        ]);
        Promo::create([
            'title' => 'Diskon 10% jam 11.00 - 12.00',
            'code' => 'AGPLUNCH',
            'percentage' => 0.1,
            'valid_from' => '2018-12-19',
            'valid_until' => '2019-02-01',
        ]);
    }
}
