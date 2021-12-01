<?php

namespace Database\Factories;

use App\Models\Prescription;
use Illuminate\Database\Eloquent\Factories\Factory;

class PrescriptionFactory extends Factory
{
    // Name of the model the factory is using.
    protected $model = Prescription::class;

    // Define the data going into the model.
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'dosage_amt' => $this->faker->randomNumber($nbDigits = 3, $strict = false),
            'dosage_unit'  => $this->faker->randomElement(['kg', 'g', 'mg', 'mcg', 'L', 'mL', 'cc', 'tablets', 'drops']),
            'route'  => $this->faker->randomElement(['oral', 'subcutaneous injection', 'intramuscular injection', 'intravenous injection', 'inhalation', 'ocular', 'topical']),
            'instructions'  => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'side_effects'  => $this->faker->sentence($nbWords = 6, $variableNbWords = true) 
        ];
    }
}
