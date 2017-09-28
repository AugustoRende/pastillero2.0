<?php

use Illuminate\Database\Seeder;
use Pastillero\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(Product::class, 3)->create();
        Product::create(['code' => '00001','description' => 'Maxivent','dosage' => '120']);
        Product::create(['code' => '00002','description' => 'Maxivent','dosage' => '60']);
        Product::create(['code' => '00003','description' => 'Otro','dosage' => '120']);
        Product::create(['code' => '00004','description' => 'Otro','dosage' => '60']);
    }
}
