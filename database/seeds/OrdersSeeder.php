<?php

use Illuminate\Database\Seeder;

class OrdersSeeder extends Seeder
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
                'product_id' => '1',
                'first_name' => 'Arturas',
                'last_name' => 'Vairavicius',
                'price' => 20,
            ],
    }
}
