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

$factory->define(App\Models\User::class, function() {
    return [
        "username" => "namnv609",
        "email" => "namnv609@gmail.com",
        "password" => "123123",
        "fullname" => "NamNV609",
    ];
});

$factory->define(App\Models\Category::class, function() {
    return [
        "name" => "Test category",
    ];
});
