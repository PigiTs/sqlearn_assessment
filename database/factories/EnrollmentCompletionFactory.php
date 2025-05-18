<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;
use App\Models\Course;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EnrollmentCompletion>
 */
class EnrollmentCompletionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id' => Student::inRandomOrder()->first()->id,
            'course_id' => Course::inRandomOrder()->first()->id,
            'enrolled_on' => $this->faker->dateTimeBetween('-6 months','now'),
            'completed_on' => null,
        ];
    }

    public function completed()
    {
        return $this->state(function (){
            return [
                'completed_on' => $this->faker->dateTimeBetween('-3 months','now'),
            ];
        });
    }
}
