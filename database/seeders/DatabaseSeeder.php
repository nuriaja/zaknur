<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Hari::create([
            'hari' => 'Senin',
        ]);
        \App\Models\Hari::create([
            'hari' => 'Selasa',
        ]);
        \App\Models\Hari::create([
            'hari' => 'Rabu',
        ]);
        \App\Models\Hari::create([
            'hari' => 'Kamis',
        ]);
        \App\Models\Hari::create([
            'hari' => 'Jumat',
        ]);
    }
}
