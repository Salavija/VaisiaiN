<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'title' => 'Mažas krepšelis',
                'price' => 15
            ],
            [
                'title' => 'Vidutinis krepšelis',
                'price' => 25
            ],
            [
                'title' => 'Didelis krepšelis',
                'price' => 35
            ],
            [
                'title' => 'Krepšelis su gėlėmis',
                'price' => 30
            ],
        ];

        foreach ($data as $value) {
            App\Product::create($value);
        }
    }
}
