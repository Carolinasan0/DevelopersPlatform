<?php

namespace Database\Seeders;

use App\Models\Tecnology;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TecnologiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tecnologies')->insert([
            'name' => 'Angular',
            'slug' => 'angular'
        ]);

        DB::table('tecnologies')->insert([
            'name' => 'C++',
            'slug' => 'c--'
        ]);

        DB::table('tecnologies')->insert([
            'name' => 'CSS',
            'slug' => 'css'
        ]);

        DB::table('tecnologies')->insert([
            'name' => 'Docker',
            'slug' => 'docker'
        ]);

        DB::table('tecnologies')->insert([
            'name' => 'Go',
            'slug' => 'go'
        ]);

        DB::table('tecnologies')->insert([
            'name' => 'HTML',
            'slug' => 'html'
        ]);

        DB::table('tecnologies')->insert([
            'name' => 'Java',
            'slug' => 'java'
        ]);

        DB::table('tecnologies')->insert([
            'name' => 'JavaScript',
            'slug' => 'javascript'
        ]);

        DB::table('tecnologies')->insert([
            'name' => 'Kotlin',
            'slug' => 'kotlin'
        ]);

        DB::table('tecnologies')->insert([
            'name' => 'Laravel',
            'slug' => 'laravel'
        ]);

        DB::table('tecnologies')->insert([
            'name' => 'MongoDB',
            'slug' => 'mongodb'
        ]);

        DB::table('tecnologies')->insert([
            'name' => 'NodeJS',
            'slug' => 'nodejs'
        ]);

        DB::table('tecnologies')->insert([
            'name' => 'PHP',
            'slug' => 'php'
        ]);

        DB::table('tecnologies')->insert([
            'name' => 'Python',
            'slug' => 'python'
        ]);

        DB::table('tecnologies')->insert([
            'name' => 'React',
            'slug' => 'react'
        ]);

        DB::table('tecnologies')->insert([
            'name' => 'Ruby',
            'slug' => 'ruby'
        ]);

        DB::table('tecnologies')->insert([
            'name' => 'Rust',
            'slug' => 'rust'
        ]);

        DB::table('tecnologies')->insert([
            'name' => 'Shell',
            'slug' => 'shell'
        ]);

        DB::table('tecnologies')->insert([
            'name' => 'SQL',
            'slug' => 'sql'
        ]);

        DB::table('tecnologies')->insert([
            'name' => 'Switf',
            'slug' => 'switf'
        ]);

        DB::table('tecnologies')->insert([
            'name' => 'TypeScript',
            'slug' => 'typescript'
        ]);

        DB::table('tecnologies')->insert([
            'name' => 'Vue',
            'slug' => 'vue'
        ]);

        DB::table('tecnologies')->insert([
            'name' => '.NET',
            'slug' => 'net'
        ]);
    }
}
