<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        \App\Models\Product::factory()->create([
            'product_name' => 'Gloves',
            'product_price'=> '10',
            'product_stock'=> '100',
        ]);
    }
}