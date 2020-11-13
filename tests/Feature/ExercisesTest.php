<?php

namespace Tests\Feature;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class ExercisesTest extends TestCase
{
    use WithFaker, RefreshDatabase;


    /** @test */

    public function a_user_can_create_an_exercise()
    {
        // This was interesting. Laravel fails gracefully when a route isn't found, so the post route '/exercises' wasn't failing until I explicitly told it to. 
        $this->withoutExceptionHandling();

        $attributes = [
            
            'name' => $this->faker->name,

            'description' => $this->faker->paragraph,

            'number of reps' => $this->faker->optional()->passthrough(mt_rand(5, 15))

        ];


        $this->post('/exercises', $attributes);


        $this->assertDatabaseHas('exercises', $attributes);

    }

}
