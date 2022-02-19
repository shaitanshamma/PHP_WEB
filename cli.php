<?php

include 'vendor/autoload.php';

use shamma\entity\Comment;
use shamma\entity\Post;
use shamma\entity\User;


$faker = Faker\Factory::create();

switch ($argv[1]) {
    case 'user':
        echo new User(
            $faker->randomDigitNotNull,
            $faker->firstName(),
            $faker->lastName()
        );
        break;
    case 'post':
        echo new Post(
            $faker->randomDigitNotNull(),
            $faker->text(),
            $faker->word(),
            $faker->randomDigitNotNull
        );
        break;
    case 'comment':
        echo new Comment(
            $faker->randomDigitNotNull(),
            $faker->text,
            $faker->randomDigitNotNull,
            $faker->randomDigitNotNull
        );
        break;
}