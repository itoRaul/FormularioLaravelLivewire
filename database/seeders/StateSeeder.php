<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $states = [
            'Mato Grosso',
            'São Paulo',
            'Rio de Janeiro',
            'Minas Gerais',
            'Bahia',
            'Paraná',
            'Rio Grande do Sul',
        ];
        foreach ($states as $state) {
            State::create(['name' => $state]);
        }
    }
}
