<?php

namespace Database\Factories;

use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonFactory extends Factory
{
    // Name of the model the factory is using.
    protected $model = Person::class;

    // Define the data going into the model.
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstname(), 
            'last_name' => $this->faker->lastname()
        ];
    }
}
