<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comments>
 */
class CommentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'content'=>fake()->text(100),
            'likes'=>fake()->numberBetween(0,1281)
        ];
    }
    public function INTpostid(int $post_id){
        return $this->state([
            'post_id'=> $post_id,
        ]);
    }
}
