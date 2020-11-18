<?php

namespace Tests\Unit;

// woof. the default namespace here needed changed from PHPUnit\Framework\ to the following to load the Factory correctly.(unit & feature tests are different. Ouuuch)
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Exercise;
class ExerciseTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */

    /** @test */
    public function it_has_path()
    {
        $exercise = Exercise::factory()->make();
        $this->assertEquals('/exercises/' . $exercise->id, $exercise->path());
    }
}
