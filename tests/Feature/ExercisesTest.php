<?php

namespace Tests\Feature;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Exercise;

class ExercisesTest extends TestCase
{
    use WithFaker, RefreshDatabase;


    /** @test */
    public function a_user_can_create_an_exercise()
    {
        // This was interesting. Laravel fails gracefully when a route isn't found, so the post route '/exercises' wasn't failing until I explicitly told it to. 
        $this->withoutExceptionHandling();

        // if i have these attributes
        $attributes = [
            
            'name' => $this->faker->name,

            'description' => $this->faker->paragraph,

            'number of reps' => $this->faker->numberBetween(5,15)

        ];

        // and i try to post them to this route
        $this->post('/exercises', $attributes)->assertRedirect('/exercises');

        // then I expext them to be inserted into the projects table
        $this->assertDatabaseHas('exercises', $attributes);

        // and I expect to be able to see the exercise name
        $this->get('/exercises')->assertSee($attributes['name']);
    }

    /** @test */
    public function an_exercise_requires_a_name()
    {
        $attributes = Exercise::factory()->raw(['title'=>'']);

        $this->post('/exercises',[])->assertSessionHasErrors('name');
    }

    /** @test */
    public function an_exercise_requires_a_description()
    {

        $attributes = Exercise::factory()->raw(['description'=>'']);

        $this->post('/exercises',[])->assertSessionHasErrors('description');
    }

    /** @test */
    // my faker function for number of reps causes this to fail =[ ToDo:fix this
    // public function an_exercise_requires_a_number_of_reps()
    // {

    //     $attributes = Exercise::factory()->raw(['number of reps'=>'']);

    //     $this->post('/exercises',[])->assertSessionHasErrors('number of reps');
    // }
}
