<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\RolesAndPermissionsTableSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this-> call(RolesAndPermissionsTableSeeder::class);
        $this->call(UsuariosTableSeeder::class);
        $this->call(CursosSeeder::class);
        $this->call(ClasifAccionSeeder::class);
        $this->call(EnfoqueSeeder::class);
        $this->call(TipoCursoSeeder::class);
    }
}
