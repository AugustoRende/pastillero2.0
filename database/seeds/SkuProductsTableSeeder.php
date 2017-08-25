<?php

use Illuminate\Database\Seeder;
use Pastillero\Sku_Product;

class SkuProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Sku_Product::class, 3)->create();
    }
}
