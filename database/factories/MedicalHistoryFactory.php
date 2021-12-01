<?php

namespace Database\Factories;

use App\Models\MedicalHistory;
use Illuminate\Database\Eloquent\Factories\Factory;

class MedicalHistoryFactory extends Factory
{
    // Name of the model the factory is using.
    protected $model = MedicalHistory::class;

    // Define the data going into the model.
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'DOB' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'bloodtype' => $this->faker->randomElement(['O-', 'O+', 'B-', 'B+', 'A-', 'A+', 'AB-', 'AB+']),
            'allergies' => $this->faker->randomElement(['Dog Allergy', 'Cat Allergy', 'Fish Allergy', 'Red Meat Allergy']),
            'conditions' => $this->faker->randomElement(['Amyotrophic Lateral Sclerosis (ALS)', 'Arrhythmia', 'Arthritis', 'Atrial Fibrillation', 'Autism', 'Cataracts', 'Cholesterol', 'Chronic Pain']),
            'surgeries' => $this->faker->randomElement(['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'])
        ];
    }
}
