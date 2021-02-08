<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'title' => $faker -> unique() -> jobTitle(),
        'description' => $faker -> sentence(),  
        'priority' => rand(1,5) 
    ];  
});
 