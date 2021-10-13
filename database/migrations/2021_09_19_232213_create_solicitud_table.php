<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Solicitud;

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

            $table->enum('tipo_tramite', [Solicitud::INCORPORACION]);
            $table->string('nombres', 100);
            $table->string('apellidos', 100);
            $table->char('cui', 13);
            $table->char('pasaporte', 20)->nullable();
            $table->char('telefono', 8)->nullable();
            $table->char('celular', 8);
            $table->string('correo', 50);
            $table->index(['nombres']);
            $table->index(['apellidos']);
            $table->index(['cui']);

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
