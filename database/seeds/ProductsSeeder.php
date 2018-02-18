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
                'title' => 'Small',
                'price' => 20
            ],
            [
                'title' => 'Medium',
                'price' => 30
            ],
            [
                'title' => 'Big',
                'price' => 39
            ],
        ];

        foreach ($data as $value) {
            App\Product::create($value);
        }
    }
}
