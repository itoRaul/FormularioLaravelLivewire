<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $cities = [
            ['name' => 'Cuiabá', 'state_id' => 1],
            ['name' => 'Várzea Grande', 'state_id' => 1],
            ['name' => 'São Paulo', 'state_id' => 2],
            ['name' => 'Campinas', 'state_id' => 2],
            ['name' => 'Rio de Janeiro', 'state_id' => 3],
            ['name' => 'Niterói', 'state_id' => 3],
            ['name' => 'Belo Horizonte', 'state_id' => 4],
            ['name' => 'Uberlândia', 'state_id' => 4],
            ['name' => 'Salvador', 'state_id' => 5],
            ['name' => 'Feira de Santana', 'state_id' => 5],
            ['name' => 'Curitiba', 'state_id' => 6],
            ['name' => 'Londrina', 'state_id' => 6],
            ['name' => 'Porto Alegre', 'state_id' => 7],
            ['name' => 'Caxias do Sul', 'state_id' => 7],
        ];
        foreach ($cities as $city) {
            City::create([
                'name' => $city['name'],
                'state_id' => $city['state_id'],
                'status' => true,
            ]);
        }
    }
}
