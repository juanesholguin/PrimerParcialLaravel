<?php

namespace Database\Seeders;

use Database\Factories\PetFactory;
use Illuminate\Database\Seeder;

// Replace with your actual model path

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PetFactory::times(100)->create();
    }
}
