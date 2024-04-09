<?php

namespace Database\Seeders;

use Database\Factories\Models\PetFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pet; // Replace with your actual model path

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
