<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamento')->insert(['nombre' => 'Alta Verapaz']);
        DB::table('departamento')->insert(['nombre' => 'Baja Verapaz']);
        DB::table('departamento')->insert(['nombre' => 'Chimaltenango']);
        DB::table('departamento')->insert(['nombre' => 'Chiquimula']);
        DB::table('departamento')->insert(['nombre' => 'El Progreso']);
        DB::table('departamento')->insert(['nombre' => 'Escuintla']);
        DB::table('departamento')->insert(['nombre' => 'Guatemala']);
        DB::table('departamento')->insert(['nombre' => 'Huehuetenango']);
        DB::table('departamento')->insert(['nombre' => 'Izabal']);
        DB::table('departamento')->insert(['nombre' => 'Jalapa']);
        DB::table('departamento')->insert(['nombre' => 'Jutiapa']);
        DB::table('departamento')->insert(['nombre' => 'Petén']);
        DB::table('departamento')->insert(['nombre' => 'Quetzaltenango']);
        DB::table('departamento')->insert(['nombre' => 'Quiché']);
        DB::table('departamento')->insert(['nombre' => 'Retalhuleu']);
        DB::table('departamento')->insert(['nombre' => 'Sacatepéquez']);
        DB::table('departamento')->insert(['nombre' => 'San Marcos']);
        DB::table('departamento')->insert(['nombre' => 'Santa Rosa']);
        DB::table('departamento')->insert(['nombre' => 'Solola']);
        DB::table('departamento')->insert(['nombre' => 'Suchitepéquez']);
        DB::table('departamento')->insert(['nombre' => 'Totonicapán']);
        DB::table('departamento')->insert(['nombre' => 'Zacapa']);
    }
}
