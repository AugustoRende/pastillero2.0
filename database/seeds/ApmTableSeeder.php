<?php

use Illuminate\Database\Seeder;
use Pastillero\Apm;

class ApmTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Apm::class, 3)->create();
    }
}
