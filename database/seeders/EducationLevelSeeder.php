<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EducationLevel;

class EducationLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EducationLevel::create(['name' => 'Ensino Fundamental Incompleto']);
        EducationLevel::create(['name' => 'Ensino Fundamental Completo']);
        EducationLevel::create(['name' => 'Ensino Médio Incompleto']);
        EducationLevel::create(['name' => 'Ensino Médio Completo']);
        EducationLevel::create(['name' => 'Ensino Superior Incompleto']);
        EducationLevel::create(['name' => 'Ensino Superior Completo']);
        EducationLevel::create(['name' => 'Pós-Graduação']);
    }
}
