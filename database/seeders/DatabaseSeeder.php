<?php

namespace Database\Seeders;

use App\Models\Registro;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@modaexpress.com',
            'password' => Hash::make('123456'),
        ]);

        User::create([
            'name' => 'João Silva',
            'email' => 'joao@modaexpress.com',
            'password' => Hash::make('123456'),
        ]);

        User::create([
            'name' => 'Maria Santos',
            'email' => 'maria@modaexpress.com',
            'password' => Hash::make('123456'),
        ]);

        $this->call([
            AmbienteSeeder::class,
            SensorSeeder::class,
            RegistroSeeder::class
        ]);
    }
}
