<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $alph = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        return [
            'content' => 'some comment for test'. substr(str_shuffle($alph), 0, 10),
            'post_id' => rand(1, 10),
            'author_id' => rand(2, 10)
        ];
    }
}
