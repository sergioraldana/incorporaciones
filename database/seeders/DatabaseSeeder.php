<?php

namespace Database\Seeders;
use App\Models\Pais;
use App\Models\Departamento;
use App\Models\Municipio;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;
use App\Models\User;

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

        $this->call([
            PaisSeeder::class,
            DepartamentoSeeder::class,
            MunicipioSeeder::class,
            RolesYPermisosSeeder::class,
            UsuariosSeeder::class,
        ]);
    }
}
