<?php

use Illuminate\Database\Seeder;
use Pastillero\Doctor;

class DoctorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Doctor::class, 10)->create();
    }
}
