<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use PHPUnit\Framework\Constraint\Count;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = array(
            array('id' => 1,  'short_description' => 'AM', 'long_description' => 'Amazonas'),
            array('id' => 2,  'short_description' => 'ANT', 'long_description' => 'Antioquia'),
            array('id' => 3,  'short_description' => 'ARA', 'long_description' => 'Arauca'),
            array('id' => 4,  'short_description' => 'ATL', 'long_description' => 'Atlántico'),
            array('id' => 5,  'short_description' => 'BOL', 'long_description' => 'Bolivar'),
            array('id' => 6,  'short_description' => 'BOY', 'long_description' => 'Boyacá'),
            array('id' => 7,  'short_description' => 'CAL', 'long_description' => 'Caldas'),
            array('id' => 8,  'short_description' => 'CAQ', 'long_description' => 'Caquetá'),
            array('id' => 9,  'short_description' => 'CAS', 'long_description' => 'Casanare'),
            array('id' => 10, 'short_description' => 'CAU', 'long_description' =>  'Cauca'),
            array('id' => 11, 'short_description' => 'CE', 'long_description' =>  'Cesar'),
            array('id' => 12, 'short_description' => 'CH', 'long_description' =>  'Chocó'),
            array('id' => 13, 'short_description' => 'COR', 'long_description' =>  'Córdoba'),
            array('id' => 14, 'short_description' => 'CUN', 'long_description' =>  'Cundinamarca'),
            array('id' => 15, 'short_description' => 'GUAI', 'long_description' =>  'Guainía'),
            array('id' => 16, 'short_description' => 'GUAV', 'long_description' =>  'Guaviare'),
            array('id' => 17, 'short_description' => 'HUI', 'long_description' =>  'Huila'),
            array('id' => 18, 'short_description' => 'GUAJ', 'long_description' =>  'La Guajira'),
            array('id' => 19, 'short_description' => 'MAG', 'long_description' =>  'Magdalena'),
            array('id' => 20, 'short_description' => 'MET', 'long_description' =>  'Meta'),
            array('id' => 21, 'short_description' => 'NAR', 'long_description' =>  'Nariño'),
            array('id' => 22, 'short_description' => 'NDS', 'long_description' =>  'Norte de Santander'),
            array('id' => 23, 'short_description' => 'PUT', 'long_description' =>  'Putumayo'),
            array('id' => 24, 'short_description' => 'QUI', 'long_description' =>  'Quindío'),
            array('id' => 25, 'short_description' => 'RIS', 'long_description' =>  'Risaralda'),
            array('id' => 26, 'short_description' => 'SAYP', 'long_description' =>  'San Andrés y Providencia'),
            array('id' => 27, 'short_description' => 'SAN', 'long_description' =>  'Santander'),
            array('id' => 28, 'short_description' => 'SUC', 'long_description' =>  'Sucre'),
            array('id' => 29, 'short_description' => 'TOL', 'long_description' =>  'Tolima'),
            array('id' => 30, 'short_description' => 'VADC', 'long_description' =>  'Valle del Cauca'),
            array('id' => 31, 'short_description' => 'VAU', 'long_description' =>  'Vaupés'),
            array('id' => 32, 'short_description' => 'VIC', 'long_description' =>  'Vichada'),
        );

        foreach ($countries as $key => $item) {
            Country::create([
                'id' =>  $item['id'],
                'short_description' => ($item['short_description']),
                'long_description' => ($item['long_description']),
            ]);
        }
    }
}
