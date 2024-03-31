<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
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

        \App\Models\Admin::create([
            'name' => 'Test User',
            'email' => 'rano@hitech.com',
            'phone' => 85157573144,
            'password' => Hash::make('12345678')
        ]);
        \App\Models\Admin::create([
            'name' => 'Azis',
            'email' => 'azis@hitech.com',
            'phone' => 123456789,
            'password' => Hash::make('12345678')
        ]);
    }
}
