<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TestDataRelation>
 */
class TestDataRelationFactory extends Factory
{
    protected $model = \App\Models\TestDataRelation::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'relation_name' => $this->faker->name,
            'relation_email' => $this->faker->unique()->safeEmail,
            'relation_age' => $this->faker->numberBetween(18, 65),
        ];
    }
}
