<?php

use Illuminate\Database\Seeder;
use Pastillero\Organization;


class OrganizationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Organization::create([
            'code' => 'PRUEBA',
            'name' => 'Organización de Prueba',
            'code_security' => '123456',
        ]);
    }
}
