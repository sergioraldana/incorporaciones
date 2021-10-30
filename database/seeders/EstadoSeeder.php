<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estado')->insert(['id' => 1, 'nombre' => 'Solicitado']);
        DB::table('estado')->insert(['id' => 2, 'nombre' => 'Revisión']);
        DB::table('estado')->insert(['id' => 3, 'nombre' => 'Pendiente completar']);
        DB::table('estado')->insert(['id' => 4, 'nombre' => 'En tramite']);
        DB::table('estado')->insert(['id' => 5, 'nombre' => 'Comisión calificación']);
        DB::table('estado')->insert(['id' => 6, 'nombre' => 'Aprobado']);
        DB::table('estado')->insert(['id' => 7, 'nombre' => 'Desistido']);
        DB::table('estado')->insert(['id' => 8, 'nombre' => 'Denegado']);
    }
}
