# laravel-cust
Just me fucking around trying to integrate Sentinel with Laravel 5.1

# lessons learned

1. To do useful things with Users, you seem to have to create a new model that extends EloquentUser

## custom User controller
```
<?php

namespace App;

use Cartalyst\Sentinel\Users\EloquentUser;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends EloquentUser
{
    //
}
```

## user model factory
```
<?php

$factory->define(App\User::class, function($faker) {
  return [
    'first_name' => $faker->firstNameMale,
    'last_name' => $faker->lastName,
    'email' => $faker->email,
    'password' => $faker->password,
  ];
});
```