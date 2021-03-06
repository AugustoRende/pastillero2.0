<?php

use Illuminate\Database\Seeder;
use Pastillero\Patient;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Patient::class, 10)->create();
    }
}
