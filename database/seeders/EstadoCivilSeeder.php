<?php

namespace Database\Seeders;

use App\Models\EstadoCivil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstadoCivilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EstadoCivil::create(['name' => 'Solteiro(a)']);
        EstadoCivil::create(['name' => 'Casado(a)']);
        EstadoCivil::create(['name' => 'Divorciado(a)']);
        EstadoCivil::create(['name' => 'Viúvo(a)']);
        EstadoCivil::create(['name' => 'Outro']);
    }
}
