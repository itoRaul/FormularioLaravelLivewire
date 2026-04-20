<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GrauInstrucao;

class GrauInstrucaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GrauInstrucao::create(['name' => 'Ensino Fundamental Incompleto']);
        GrauInstrucao::create(['name' => 'Ensino Fundamental Completo']);
        GrauInstrucao::create(['name' => 'Ensino Médio Incompleto']);
        GrauInstrucao::create(['name' => 'Ensino Médio Completo']);
        GrauInstrucao::create(['name' => 'Ensino Superior Incompleto']);
        GrauInstrucao::create(['name' => 'Ensino Superior Completo']);
        GrauInstrucao::create(['name' => 'Pós-Graduação']);
    }
}
