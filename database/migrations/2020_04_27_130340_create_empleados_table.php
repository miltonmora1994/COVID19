<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id('ID');           
           
            $table->integer('CEDULA');
            $table->string('NOMBRE');
            $table->string('APELLIDO');
            $table->string('CARGO');
            $table->string('TELEFONO');
            $table->string('CODCC');
            $table->string('NOMBRECOSTOS');
            $table->string('DIRECCION');
            $table->date('FECNAC');
            $table->string('SEXO');
            $table->string('EMPRESA')->nullable();
            $table->string('EMAIL');
             $table->string('EPS');
            $table->string('ARL');
            $table->boolean('DILIGENCIAR')->nullable();

            $table->string('contactoempresa');

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
        Schema::dropIfExists('empleados');
    }
}
