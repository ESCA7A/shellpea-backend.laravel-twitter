<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tweet>
 */
class TweetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        static $number = 1;
        return [
            'header' => 'загаловок твита '. $number++,
            'content' => 'какой-то контент ',
            'email' => User::find($number)->email,
            'likes' => rand(1000, 2000),
            'user_id' => $number,
            'created_at' => time()
        ];
    }
}
