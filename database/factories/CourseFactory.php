<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Course::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->title,
            'teaser' => $this->faker->text,
            'price_excl' => $this->faker->randomFloat,
            'price_excl' => $this->faker->randomFloat,
            'media_url' => $this->faker->imageUrl,
            'is_business' => $this->faker->text,
            'program_text' => $this->faker->text,
            'kmo_theme_id' => $this->faker->randomFloat,
            'sector_id' => $this->faker->randomFloat,
            'course_type_id' => $this->faker->randomFloat,
            'duration_id' => $this->faker->randomFloat,
            'level_id' => $this->faker->randomFloat,
            'study_type_id' => $this->faker->randomFloat,
            'details_text' => $this->faker->text,
            'details_extra_info' => $this->faker->text,
            'details_text' => $this->faker->text,
            'details_for_text' => $this->faker->text,
            'details_extra_requirements_text' => $this->faker->text















        ];
    }
}
