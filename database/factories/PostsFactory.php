<?php

namespace Database\Factories;
use App\Models\Comments;
use App\Models\Posts;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Posts>
 */
class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'content'=>fake()->text(),
            'likes'=>fake()->numberBetween(0,122),
        ];
    }
    public function withcomments(int $commentscoumt){
        return $this->afterCreating(function(Posts $post) use ($commentscoumt){
                    Comments::factory($commentscoumt)->create([
                    'post_id'=>$post->id,
        ]);
        });

    }


}
