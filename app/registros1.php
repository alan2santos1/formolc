<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class registros1 extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'registros1s';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Foto', 'Nombre', 'ApellidoPaterno', 'ApellidoMaterno', 'Sexo', 'Telefono', 'Correo', 'FechaNacimiento', 'Edad', 'Identificacion', 'ServicioMedico', 'Institucion', 'Especifique', 'Imss', 'Issste', 'Alcaldia', 'Calle', 'Numero', 'NumeroInterior', 'Colonia', 'Cp', 'ComprobanteDomicilio', 'Deporte', 'Rama', 'Modalidad', 'Categoria', 'Capitan', 'NombreEquipo', 'CintasTae', 'CartaResponsiva', 'Peso', 'Estatura', 'EstadoDeSalud', 'PadeceEnfermedad', 'QueEnfermedadPadece', 'EspecifiqueEnfermedad', 'Fuma', 'CuantoFuma'];

    
}
