<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tweet>
 */
class PostFactory extends Factory
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
            'comment_count' => null,
            'repost_count' => rand(0, 10),
            'like_count' => rand(1000, 2000),
            'author_id' => $number,
            'created_at' => time()
        ];
    }
}
