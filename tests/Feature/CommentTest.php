<?php

namespace Tests\Feature;

use App\Models\Comment;
use Tests\TestCase;

class CommentTest extends TestCase
{
    /** @test */
    function user_can_store_comment()
    {
        $this->postJson('api/comments', [
            'name' => $name = $this->faker->name,
            'text' => $text = $this->faker->sentences(3, true)
        ]);

        $this->assertDatabaseHas((new Comment())->getTable(), [
            'name' => $name,
            'text' => $text
        ]);
    }

    /** @test */
    function user_can_not_store_comment_with_bad_attributes()
    {
        $this->postJson('api/comments', [
            'name' => $name = '',
            'text' => $text = ''
        ])
            ->assertStatus(422)
            ->assertJsonValidationErrors([
                'name', 'text'
            ]);
    }

    /** @test */
    function user_can_see_all_comments()
    {
        $this->getJson('api/comments')
            ->assertStatus(200)
            ->assertJson([
                'data' => [
                    ['id' => 1],
                    ['id' => 2],
                    ['id' => 3]
                ]
            ]);
    }

    /** @test */
    function user_can_see_his_new_comment()
    {
        $this->postJson('api/comments', [
            'name' => $name = $this->faker->name,
            'text' => $text = $this->faker->sentences(3, true)
        ]);

        $this->getJson('api/comments')
            ->assertStatus(200)
            ->assertSee($text);
    }
}
