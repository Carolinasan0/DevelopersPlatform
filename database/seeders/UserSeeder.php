<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Carolina Sánchez',
            'email' => 'carolina@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');

        User::create([
            'name' => 'Iván Rivera',
            'email' => 'ivan@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Reclutador');

        User::create([
            'name' => 'Sami Perez',
            'email' => 'samita@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('Desarrollador');
    }
}
