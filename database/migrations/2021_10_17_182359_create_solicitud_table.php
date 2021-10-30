<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
USE App\Models\Solicitud;

class CreateSolicitudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitud', function (Blueprint $table) {
            $table->id();
            $table->enum('tipo_tramite',
                [Solicitud::INCORPORACION,
                Solicitud::AUTORIZACION,
                Solicitud::POSTGRADO,
                Solicitud::REM_NACIONAL,
                Solicitud::PROFESORES,
                Solicitud::REGISTRO]);

            $table->tinyInteger('estado');

            //Datos Generales
            $table->foreignId('estudiante_usuario_id')->constrained('users');

            $table->foreignId('admin_usuario_id')->constrained('users');

            $table->char('cui', 13);
            $table->char('pasaporte', 20)->nullable();
            $table->string('nombres', 100);
            $table->string('apellidos', 100);
            $table->char('telefono', 8)->nullable();
            $table->char('celular', 8);
            $table->string('correo', 50);

            $table->foreignId('dir_departamento_id')->constrained('departamento');

            $table->foreignId('dir_municipio_id')->constrained('municipio');

            $table->string('direccion', 100);

            $table->foreignId('nac_departamento_id')->constrained('departamento');

            $table->foreignId('nac_municipio_id')->constrained('municipio');

            $table->date('nac_fecha');

            $table->foreignId('nac_pais_id')->constrained('pais');

            //Estudios Realizados en el extranjero
            $table->foreignId('institucion_pais_id')->constrained('pais');

            $table->string('institucion_graduacion', 100);
            $table->string('titulo_profesional', 200);
            $table->double('duracion', 1, 1);
            $table->tinyInteger('cursos_aprobados');
            $table->string('observaciones', 300)->nullable();

            //Reconocimientos
            $table->string('titulo_prof_grado', 100);
            $table->smallInteger('numero_registro');
            $table->date('fecha_registro');

            //Opciones incorporacion

            $table->index(['nombres']);
            $table->index(['apellidos']);
            $table->index(['nombres', 'apellidos']);
            $table->index(['cui']);
            $table->index(['nac_pais_id']);
            $table->index(['institucion_pais_id']);
            $table->index(['tipo_tramite']);
            $table->index(['estado']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitud');
    }
}
