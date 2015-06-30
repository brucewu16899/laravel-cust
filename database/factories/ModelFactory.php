<?php

$factory->define(App\User::class, function($faker) {
  return [
    'first_name' => $faker->firstNameMale,
    'last_name' => $faker->lastName,
    'email' => $faker->email,
    'password' => $faker->password,
  ];
});