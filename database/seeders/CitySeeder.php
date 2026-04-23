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
            ['name' => 'Cuiabá'],
            ['name' => 'Várzea Grande'],
            ['name' => 'São Paulo'],
            ['name' => 'Campinas'],
            ['name' => 'Rio de Janeiro'],
            ['name' => 'Niterói'],
            ['name' => 'Belo Horizonte'],
            ['name' => 'Uberlândia'],
            ['name' => 'Salvador'],
            ['name' => 'Feira de Santana'],
            ['name' => 'Curitiba'],
            ['name' => 'Londrina'],
            ['name' => 'Porto Alegre'],
            ['name' => 'Caxias do Sul'],
        ];
        foreach ($cities as $city) {
            City::create([
                'name' => $city['name'],
                'status' => true,
            ]);
        }
    }
}
