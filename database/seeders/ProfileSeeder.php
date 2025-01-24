<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;
use Faker\Factory as Faker;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Create 30 profiles with auto-incrementing profile_no
        for ($i = 0; $i < 30; $i++) {
            Profile::create([
                'lastname' => $faker->lastName,
                'firstname' => $faker->firstName,
                'middlename' => $faker->lastName,
                'birthdate' => $faker->date('Y-m-d', '2005-01-01'),
                'age' => $faker->numberBetween(15, 30),
                'schoollevel' => $faker->randomElement(['Elementary', 'High School', 'College']),
                'ageCategory' => $faker->randomElement(['Child', 'Youth', 'Adult']),
                'lgbt' => $faker->randomElement(['Yes', 'No']),
                'weightstatus' => $faker->randomElement(['Underweight', 'Normal', 'Overweight']),
                'childClassification' => $faker->randomElement(['None', 'Orphan', 'With Disability']),
                'nameofschool' => $faker->company,
                'inschool' => $faker->randomElement(['Yes', 'No']),
                'nameofemergency' => $faker->name,
                'relationofemergency' => $faker->randomElement(['Mother', 'Father', 'Guardian']),
                'contactnoofemergency' => $faker->phoneNumber,
                'benefitstype' => $faker->randomElement(['Scholarship', 'Stipend', 'None']),
                'gender' => $faker->randomElement(['Male', 'Female']),
                'barangay' => $faker->city,
                'address' => $faker->address,
                'youth_class' => $faker->randomElement(['Student', 'Out-of-School Youth']),
                'ethnicity' => $faker->randomElement(['Filipino', 'Igorot', 'Moro']),
                'disability' => $faker->randomElement(['None', 'Physical', 'Visual']),
                'status' => $faker->randomElement(['Active', 'Inactive']),
            ]);
        }
    }
}