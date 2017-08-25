<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Pastillero\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'username' => $faker->name,
        'password' => $password ?: $password = bcrypt('123456'),
        'email' => $faker->unique()->safeEmail,
        'group' => 'user',
        'remember_token' => str_random(10),
        'organization_id' => 1,
    ];
});

$factory->define(Pastillero\Doctor::class, function (Faker\Generator $faker) {

    return [
        'code' => str_random(10),
        'name' => $faker->firstName,
        'last_name' => $faker->lastname,
        'email' => $faker->unique()->safeEmail,
        'mobile' => $faker->phoneNumber,
        'organization_id' => 1,
    ];
});

$factory->define(Pastillero\Patient::class, function (Faker\Generator $faker) {

    return [
        'username' => $faker->unique()->safeEmail,
        'password' => bcrypt('1234'),
        'name' => $faker->name,
        'last_name' => $faker->lastname,
        'birth' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'pathology' => 'ASMA',
        'organization_id' => 1,
        'doctor_id' => 1,
        //TODO: ASIGNARLE UN DOCTOR DE LOS EXISTENTES
    ];
});

$factory->define(Pastillero\Product::class, function (Faker\Generator $faker) {

    return [
        'code' => str_random(10),
        'description' => $faker->word(),
        'dosage' => 120,
        'organization_id' => 1,
    ];
});

$factory->define(Pastillero\Sku_product::class, function (Faker\Generator $faker) {

    return [
        'code' => $faker->isbn13(),
        'organization_id' => 1,
        'doctor_id' => 1,
        'product_id' => 1,
        'patient_id' => 1,
    ];
});

