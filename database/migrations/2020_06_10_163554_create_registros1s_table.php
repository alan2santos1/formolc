<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRegistros1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros1s', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('Foto')->nullable();
            $table->string('Nombre')->nullable();
            $table->string('ApellidoPaterno')->nullable();
            $table->string('ApellidoMaterno')->nullable();
            $table->string('Sexo');
            $table->integer('Telefono')->nullable();
            $table->string('Correo')->nullable();
            $table->date('FechaNacimiento')->nullable();
            $table->integer('Edad')->nullable();
            $table->string('Identificacion')->nullable();
            $table->string('ServicioMedico')->nullable();
            $table->string('Institucion');
            $table->string('Especifique')->nullable();
            $table->string('Imss')->nullable();
            $table->string('Issste')->nullable();
            $table->string('Alcaldia')->nullable();
            $table->string('Calle')->nullable();
            $table->integer('Numero')->nullable();
            $table->integer('NumeroInterior')->nullable();
            $table->string('Colonia')->nullable();
            $table->integer('Cp')->nullable();
            $table->string('ComprobanteDomicilio')->nullable();
            $table->string('Deporte');
            $table->string('Rama');
            $table->string('Modalidad');
            $table->string('Categoria')->nullable();
            $table->string('Capitan')->nullable();
            $table->string('NombreEquipo')->nullable();
            $table->string('CintasTae');
            $table->string('CartaResponsiva')->nullable();
            $table->string('Peso')->nullable();
            $table->string('Estatura')->nullable();
            $table->string('EstadoDeSalud')->nullable();
            $table->string('PadeceEnfermedad')->nullable();
            $table->string('QueEnfermedadPadece')->nullable();
            $table->string('EspecifiqueEnfermedad')->nullable();
            $table->string('Fuma')->nullable();
            $table->string('CuantoFuma')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('registros1s');
    }
}
