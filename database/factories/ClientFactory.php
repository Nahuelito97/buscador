<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;
use App\Client;

$factory->define(Client::class, function (Faker $faker) {
    return [
      'nombre' => $faker->word(10),
      'apellido' => $faker->word(10),
      'direccion' => $faker->word(15),
      'fechanacimiento' => $faker->date,
      'telefono' => $faker->e164PhoneNumber,
      'correoelectronico' => $faker->email,
    ];
});

