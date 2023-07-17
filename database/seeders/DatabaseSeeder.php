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
        $this->call([
            ProductSeeder::class,
        ]);

        \App\Models\User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123')
        ]);

        \App\Models\Brand::create([
            'slug' => 'nike',
            'name' => 'Nike'
        ]);

        \App\Models\Brand::create([
            'slug' => 'new-balance',
            'name' => 'Balance'
        ]);

        \App\Models\Category::create([
            'slug' => 'sport',
            'name' => 'Sport'
        ]);

        \App\Models\Category::create([
            'slug' => 'run',
            'name' => 'Run'
        ]);
    }
}