<?php

use Illuminate\Database\Seeder;
use App\Menu;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::create([
            'title' => 'Ayam Geprek Original',
            'description' => 'Ayam Geprek dengan level 1-5',
            'price' => 15000,
            'stock' => 75,
            'images' => '',
        ]);
        Menu::create([
            'title' => 'Ayam Bakar',
            'description' => 'Ayam Bakar dengan cita rasa khas',
            'price' => 14000,
            'stock' => 75,
            'images' => '',
        ]);
        Menu::create([
            'title' => 'Ayam Saus Padang',
            'description' => 'Ayam yang dilumuri dengan saus padang yang berempah',
            'price' => 17000,
            'stock' => 40,
            'images' => '',
        ]);
    }
}
