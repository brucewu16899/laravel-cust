<?php

$factory->define(Sentinel::class, function($faker) {
  return [
    'first_name' => $faker->first_name,
    'last_name' => $faker->last_name,
    'email' => $faker->email,
    'password' => $faker->password
  ];
});