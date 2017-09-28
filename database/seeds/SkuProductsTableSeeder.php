<?php

use Illuminate\Database\Seeder;
use Pastillero\Sku_product;

class SkuProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Sku_product::class, 5)->create();
    }
}
