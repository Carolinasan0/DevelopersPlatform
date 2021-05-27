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
            'email' => 'carolina.s.98@hotmail.es',
            'password' => bcrypt('12345678')
        ])->assingRole('Admin');
    }
}
