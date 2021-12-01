<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Person;
use App\Models\Prescription;
use App\Models\MedicalHistory;

class DatabaseSeeder extends Seeder
{

    // Function that seeds the database.
    public function run()
    {
        // Runs user factory 10 times.
        User::factory()
        ->count(10)
        ->create();

        // Runs person factory 10 times.
        Person::factory()
        ->count(10)
        ->create();

        // Runs prescription factory 10 times.
        Prescription::factory()
        ->count(10)
        ->create();

        // Runs medical history factory 10 times.
        MedicalHistory::factory()
        ->count(10)
        ->create();
    }
}
