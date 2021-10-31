<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoTramiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('tipo_tramite')->insert(['codigo' => 'INCORPORACION',
                                                'nombre' => 'Incorporación']);
        DB::table('tipo_tramite')->insert(['codigo' => 'AUTORIZACION',
                                                'nombre' => 'Autorización para Ejercer Profesión Universitaria']);
        DB::table('tipo_tramite')->insert(['codigo' => 'POSTGRADO',
                                                'nombre' => 'Reconocimiento de Estudios de Postgrado']);
        DB::table('tipo_tramite')->insert(['codigo' => 'REM NACIONAL',
                                                'nombre' => 'Reconocimiento de Postgrado de Especialidad Médica, Programa Nacional']);
        DB::table('tipo_tramite')->insert(['codigo' => 'REM EXTRANJERO',
                                                'nombre' => 'Reconocimiento de Postgrado de Especialidad Médica, Programa Extranjero']);
        DB::table('tipo_tramite')->insert(['codigo' => 'PROFESORES',
                                                'nombre' => 'Reconocimiento de Estudios de Postgrado a Profesores que prestan servicios en la USAC']);
        DB::table('tipo_tramite')->insert(['codigo' => 'REGISTRO',
                                                'nombre' => 'Registro de Titulo o Diploma de Postgrado']);
    }
}
