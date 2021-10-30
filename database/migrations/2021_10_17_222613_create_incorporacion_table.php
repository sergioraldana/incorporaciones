<?php

use App\Models\Incorporacion;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncorporacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incorporacion', function (Blueprint $table) {
            $table->id();

            $table->foreignId('solicitud_id')->constrained('solicitud');

            $table->enum('opcion_incorporacion', [Incorporacion::EXAMEN, [Incorporacion::SERVICIO]]);

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
        Schema::dropIfExists('incorporacion');
    }
}
