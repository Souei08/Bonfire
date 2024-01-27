<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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

        // \App\Models\User::factory()->create([s
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'firstName' => 'Admin',
            'lastName' => 'Admin',
            'number' => '123',
            'email' => 'hello@rweb.solutions',
            'password' => Hash::make('*'),
            'role' => 'cms'
        ]);
        User::create([
            'firstName' => 'lorem',
            'lastName' => 'ipsum',
            'number' => '123465798',
            'email' => 'lorem@email.com',
            'password' => Hash::make('123456'),
            'role' => 'user'
        ]);
    }
}
