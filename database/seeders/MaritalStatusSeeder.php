<?php

namespace Database\Seeders;

use App\Models\MaritalStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaritalStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MaritalStatus::create(['name' => 'Solteiro(a)']);
        MaritalStatus::create(['name' => 'Casado(a)']);
        MaritalStatus::create(['name' => 'Divorciado(a)']);
        MaritalStatus::create(['name' => 'Viúvo(a)']);
        MaritalStatus::create(['name' => 'Outro']);
    }
}
