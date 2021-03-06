{{-- DEPORTE --}}


  {{-- termina prueba --}}

  

  {{-- FOTO INICIAL--}}

<div class="form-group {{ $errors->has('Foto') ? 'has-error' : ''}}">
    <label for="Foto" class="control-label">{{ 'Foto' }}</label>
    <input class="form-control" name="Foto" type="file" id="Foto" value="{{ isset($registro->Foto) ? $registro->Foto : ''}}" >
    {!! $errors->first('Foto', '<p class="help-block">:message</p>') !!}
</div>

{{-- TERMINA PRUEBA --}}


{{-- NOMBRE --}}
<div class="form-group  {{ $errors->has('Nombre') ? 'has-error' : ''}}">
    <label for="Nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="Nombre" type="text" id="Nombre" value="{{ isset($registro->Nombre) ? $registro->Nombre : ''}}" >
    {!! $errors->first('Nombre', '<p class="help-block">:message</p>') !!}
</div>

{{-- APELLIDO PATERNO --}}
<div class="form-group {{ $errors->has('ApellidoPaterno') ? 'has-error' : ''}}">
    <label for="ApellidoPaterno" class="control-label">{{ 'Apellido paterno' }}</label>
    <input class="form-control" name="ApellidoPaterno" type="text" id="ApellidoPaterno" value="{{ isset($registro->ApellidoPaterno) ? $registro->ApellidoPaterno : ''}}" >
    {!! $errors->first('ApellidoPaterno', '<p class="help-block">:message</p>') !!}
</div>

{{-- APELLIDO MATERNO --}}

<div class="form-group {{ $errors->has('ApellidoMaterno') ? 'has-error' : ''}}">
    <label for="ApellidoMaterno" class="control-label">{{ 'Apellido materno' }}</label>
    <input class="form-control" name="ApellidoMaterno" type="text" id="ApellidoMaterno" value="{{ isset($registro->ApellidoMaterno) ? $registro->ApellidoMaterno : ''}}" >
    {!! $errors->first('ApellidoMaterno', '<p class="help-block">:message</p>') !!}
</div>

{{-- SEXO --}}
<div class="form-group {{ $errors->has('Sexo') ? 'has-error' : ''}}">
    <label for="Sexo" class="control-label">{{ 'Sexo' }}</label>
    <select name="Sexo" class="form-control" id="Sexo" >
    @foreach (json_decode('{"hombre":"Hombre", "mujer": "Mujer"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($registro->Sexo) && $registro->Sexo == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('Sexo', '<p class="help-block">:message</p>') !!}
</div>

{{-- TELÉFONO --}}
<div class="form-group {{ $errors->has('Telefono') ? 'has-error' : ''}}">
    <label for="Telefono" class="control-label">{{ 'Teléfono' }}</label>
    <input class="form-control" name="Telefono" type="number" id="Telefono" value="{{ isset($registro->Telefono) ? $registro->Telefono : ''}}" >
    {!! $errors->first('Telefono', '<p class="help-block">:message</p>') !!}
</div>

{{-- CORREO --}}
<div class="form-group {{ $errors->has('Correo') ? 'has-error' : ''}}">
    <label for="Correo" class="control-label">{{ 'Correo' }}</label>
    <input class="form-control" name="Correo" type="email" id="Correo" value="{{ isset($registro->Correo) ? $registro->Correo : ''}}" >
    {!! $errors->first('Correo', '<p class="help-block">:message</p>') !!}
</div>

{{-- FECHA DE NACIMIENTO --}}
<div class="form-group {{ $errors->has('FechaNacimiento') ? 'has-error' : ''}}">
    <label for="FechaNacimiento" class="control-label">{{ 'Fecha de nacimiento' }}</label>
    <input class="form-control" name="FechaNacimiento" type="date" id="birthday" value="{{ isset($registro->FechaNacimiento) ? $registro->FechaNacimiento : ''}}" >
    {!! $errors->first('FechaNacimiento', '<p class="help-block">:message</p>') !!}
</div>

{{-- EDAD --}}
<div class="form-group {{ $errors->has('Edad') ? 'has-error' : ''}}">
    <label for="Edad" class="control-label">{{ 'Edad' }}</label>
    <input class="form-control" name="Edad" type="text" id="age" value="{{ isset($registro->Edad) ? $registro->Edad : ''}}" >
    {!! $errors->first('Edad', '<p class="help-block">:message</p>') !!}
</div>

{{-- IDENTIFICACIÓN --}}
<div class="form-group {{ $errors->has('Identificacion') ? 'has-error' : ''}}">
    <label for="Identificacion" class="control-label">{{ 'Identificación' }}</label>
    <input class="form-control" name="Identificacion" type="file" id="Identificacion" value="{{ isset($registro->Identificacion) ? $registro->Identificacion : ''}}" >
    {!! $errors->first('Identificacion', '<p class="help-block">:message</p>') !!}
</div>

{{-- SERVICIO MEDICO --}}
<div class="form-group {{ $errors->has('ServicioMedico') ? 'has-error' : ''}}">
    <label for="ServicioMedico" class="control-label">{{ 'Servicio médico' }}</label>
    <div class="radio">
    <label><input name="ServicioMedico" type="radio" value="1" {{ (isset($registro) && 1 == $registro->ServicioMedico) ? 'checked' : '' }}> Si</label>
</div> 
<div class="radio">
    <label><input name="ServicioMedico" type="radio" value="0" @if (isset($registro)) {{ (0 == $registro->ServicioMedico) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
    {!! $errors->first('ServicioMedico', '<p class="help-block">:message</p>') !!}
</div>

{{-- INSTITUCIÓN --}}
<div class="form-group {{ $errors->has('Institucion') ? 'has-error' : ''}}">
    <label for="Institucion" class="control-label">{{ 'Institucion' }}</label>
    <select name="Institucion" class="form-control" id="Institucion" >
    @foreach (json_decode('{"imss":"IMSS", "issste":"ISSSTE", "otro":"OTRO"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($registro->Institucion) && $registro->Institucion == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('Institucion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Especifique') ? 'has-error' : ''}}">
    <label for="Especifique" class="control-label">{{ 'Especifique' }}</label>
    <input class="form-control" name="Especifique" type="text" id="Especifique" value="{{ isset($registro->Especifique) ? $registro->Especifique : ''}}" >
    {!! $errors->first('Especifique', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Imss') ? 'has-error' : ''}}">
    <label for="Imss" class="control-label">{{ 'Imss' }}</label>
    <input class="form-control" name="Imss" type="text" id="Imss" value="{{ isset($registro->Imss) ? $registro->Imss : ''}}" >
    {!! $errors->first('Imss', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Issste') ? 'has-error' : ''}}">
    <label for="Issste" class="control-label">{{ 'Issste' }}</label>
    <input class="form-control" name="Issste" type="text" id="Issste" value="{{ isset($registro->Issste) ? $registro->Issste : ''}}" >
    {!! $errors->first('Issste', '<p class="help-block">:message</p>') !!}
</div>

{{-- ALCALDIA --}}
<div class="form-group {{ $errors->has('Alcaldia') ? 'has-error' : ''}}">
    <label for="Alcaldia" class="control-label">{{ 'Alcaldia' }}</label>
    <select name="Alcaldia" class="form-control" id="Alcaldia" >
    @foreach (json_decode('{"SELECCIONE":"Seleccione Alcaldía", "ALVARO":"Álvaro Obregón", "AZCAPOTZALCO":"Azcapotzalco", "BJ":"Benito Juárez", "COYOACAN":"Coyoacán","CUAJIMALPA":"Cuajimalpa de Morelos", "CUAUHTEMOC":"Cuauhtémoc", "GAM":"Gustavo A. Madero", "IZTACALCO":"Iztacalco", "IZTAPALAPA":"Iztapalapa", "MAGDALENA":"Magdalena Contreras", "MH":"Miguel Hidalgo","MILPAALTA":"Milpa Alta","TLAHUAC":"Tláhuac", "TLALPAN":"Tlalpan", "VC":"Venustiano Carranza", "XOCHIMILCO":"Xochimilco"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($registro->Alcaldia) && $registro->Alcaldia == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('Alcaldia', '<p class="help-block">:message</p>') !!}
</div>


{{-- CALLE --}}
<div class="form-group {{ $errors->has('Calle') ? 'has-error' : ''}}">
    <label for="Calle" class="control-label">{{ 'Calle' }}</label>
    <input class="form-control" name="Calle" type="text" id="Calle" value="{{ isset($registro->Calle) ? $registro->Calle : ''}}" >
    {!! $errors->first('Calle', '<p class="help-block">:message</p>') !!}
</div>

{{-- NÚMERO EXTERIOR --}}

<div class="form-group {{ $errors->has('Numero') ? 'has-error' : ''}}">
    <label for="Numero" class="control-label">{{ 'Número exterior' }}</label>
    <input class="form-control" name="Numero" type="number" id="Numero" value="{{ isset($registro->Numero) ? $registro->Numero : ''}}" >
    {!! $errors->first('Numero', '<p class="help-block">:message</p>') !!}
</div>

{{-- NÚMERO INTERIOR --}}
<div class="form-group {{ $errors->has('NumeroInterior') ? 'has-error' : ''}}">
    <label for="NumeroInterior" class="control-label">{{ 'Número interior' }}</label>
    <input class="form-control" name="NumeroInterior" type="number" id="NumeroInterior" value="{{ isset($registro->NumeroInterior) ? $registro->NumeroInterior : ''}}" >
    {!! $errors->first('NumeroInterior', '<p class="help-block">:message</p>') !!}
</div>

{{-- COLONIA --}}
<div class="form-group {{ $errors->has('Colonia') ? 'has-error' : ''}}">
    <label for="Colonia" class="control-label">{{ 'Colonia' }}</label>
    <input class="form-control" name="Colonia" type="text" id="Colonia" value="{{ isset($registro->Colonia) ? $registro->Colonia : ''}}" >
    {!! $errors->first('Colonia', '<p class="help-block">:message</p>') !!}
</div>

{{-- CÓDIGO POSTAL --}}
<div class="form-group {{ $errors->has('Cp') ? 'has-error' : ''}}">
    <label for="Cp" class="control-label">{{ 'Código postal' }}</label>
    <input class="form-control" name="Cp" type="number" id="Cp" value="{{ isset($registro->Cp) ? $registro->Cp : ''}}" >
    {!! $errors->first('Cp', '<p class="help-block">:message</p>') !!}
</div>

{{-- COMPROBANTE DE DOMICILIO --}}

<div class="form-group {{ $errors->has('ComprobanteDomicilio') ? 'has-error' : ''}}">
    <label for="ComprobanteDomicilio" class="control-label">{{ 'Comprobante de domicilio' }}</label>
    <input class="form-control" name="ComprobanteDomicilio" type="file" id="ComprobanteDomicilio" value="{{ isset($registro->ComprobanteDomicilio) ? $registro->ComprobanteDomicilio : ''}}" >
    {!! $errors->first('ComprobanteDomicilio', '<p class="help-block">:message</p>') !!}
</div>

{{-- DEPORTE --}}
{{-- <div class="form-group {{ $errors->has('Deporte') ? 'has-error' : ''}}">
    <label for="Deporte" class="control-label">{{ 'Deporte' }}</label>
    <select name="Deporte" class="form-control" id="Deporte" >
    @foreach (json_decode('{"SELECCIONE":"Seleccione Deporte", "AJEDREZ":"Ajedrez", "ATLETISMO":"Atletismo", "BALONCESTO":"Baloncesto", "BALONCESTO3x3":"Baloncesto3x3","BEISBOL":"Beisbol", "BOXEO":"Boxeo", "CICLISMO":"Ciclismo", "FUTBOL5x5":"Futbol5x5", "FUTBOLASOCIACION":"Futbol_Asociacion", "SOFTBOL":"Softbol", "TAEKWONDO":"Taekwondo","VOLEIBOL":"Voleibol"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($registro->Deporte) && $registro->Deporte == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('Deporte', '<p class="help-block">:message</p>') !!}
</div> --}}

{{-- original 1 --}}
{{-- <div class="form-group {{ $errors->has('Deporte') ? 'has-error' : ''}}">
    <label for="" class="control-label">{{ 'Deporte' }}</label>
    <select class="form-control" name="Deporte" id="" onchange="ChangecatList()" required value="{{ isset($registro->Deporte) ? $registro->Deporte : ''}}" >
        <option value="">SELECCIONA DEPORTE </option>
        <option value="ajedrez">Ajedrez</option>
        <option value="atletismo">Atletismo</option>
        <option value="Baloncesto">Baloncesto</option>
        <option value="Baloncesto3x3">Baloncesto 3X3</option>
        <option value="Beisbol">Béisbol</option>
        <option value="Boxeo">Boxeo</option>
        <option value="Ciclismo">Ciclismo</option>
        <option value="Futbol5x5">Futbol5x5</option>
        <option value="Futbol_Asociacion">Futbol Asociación</option>
        <option value="Softbol">Sóftbol</option>
        <option value="Taekwondo">Taekwondo</option>
        <option value="Voleibol">Voleibol</option>
        
      </select>
    <div class="invalid-feedback">
         proporciona una Categoria.
    </div>
</select>
    {!! $errors->first('Deporte', '<p class="help-block">:message</p>') !!}
</div> --}}
{{-- termina original 1 --}}


{{-- código de registros1 --}}
<div class="form-group {{ $errors->has('Deporte') ? 'has-error' : ''}}">
    <label for="cambiar" class="control-label">Selecciona un Deporte</label>
    <select  class="form-control" id="cambiar" name="Deporte" value="{{ isset($registro->Deporte) ? $registro->Deporte : ''}}">
       <option value="">Selecciona una opción</option>
        <option value="ajedrez">Ajedrez</option>
        <option value="atletismo">Atletismo</option>
        <option value="Futbol5x5">Futbol 5x5</option>
        <option value="Taekwondo">Taekwondo</option>
        <option value="Voleibol">Voleibol</option>
   
    </select>
    {!! $errors->first('Deporte', '<p class="help-block">:message</p>') !!}
   </div>
   {{-- código de registros1 --}}

   {{-- modalidad registros1 --}}

   <div class="form-group {{ $errors->has('Modalidad') ? 'has-error' : ''}}" id="Ajedrez_" style="display:none" >
    <label for="Modalidad" class="control-label">{{ 'Modalidad:' }}</label>
     <select class="cambiar form-control" name="Modalidad" id="Modalidad">
     <option value="Individual">Individual</option>
     <option value="Mixto">Mixto</option>
   </select>
 </div>

 <div class="form-group {{ $errors->has('Modalidad') ? 'has-error' : ''}}" id="Atletismo_" style="display:none">    
    <label for="Modalidad" class="control-label">{{ 'Modalidad:' }}</label>
   <select class="cambiar form-control" name="Modalidad" id="Modalidad">
     <option value="Velocidad">Velocidad</option>
     <option value="Salto sin impulso">Salto sin impulso</option>
     <option value="Relevo mixto">Relevo mixto</option>
   </select>
 </div>

   {{-- Modalidad registros 1 --}}
   
   

{{-- MODALIDAD --}}

{{-- MODALIDAD AJEDREZ --}}

{{-- <div class="form-group ajedrez Individual EquipoMixto box {{ $errors->has('Modalidad') ? 'has-error' : ''}}">
    <label for="Modalidad" class="control-label">{{ 'Modalidad' }}</label>
    <select name="Modalidad" class="form-control" id="Modalidad" >
        <option value="Individual" >Individual</option>
        <option value="EquipoMixto" >EquipoMixto</option>

</select> 
    {!! $errors->first('Modalidad', '<p class="help-block">:message</p>') !!}
</div>  --}}
{{-- MODALIDAD ATLETISMO --}}
{{-- <div class="form-group atletismo Velocidad Salto_Sin_Impulso Relevo_Mixto box {{ $errors->has('Modalidad') ? 'has-error' : ''}}">
    <label for="Modalidad" class="control-label">{{ 'Modalidad' }}</label>
    <select name="Modalidad" class="form-control" id="Modalidad"  >
        <option value="Velocidad" >Velocidad</option>
        <option value="Salto_Sin_Impulso" >Salto sin impulso</option>
        <option value="Relevo_Mixto" >400Metros</option>
</select> 
    {!! $errors->first('Modalidad', '<p class="help-block">:message</p>') !!}
</div> 
 --}}
{{-- MODALIDAD FUT5X5 --}}
{{-- <div class="form-group Futbol5x5 Femenil Varonil Equipo_Mixto box {{ $errors->has('Modalidad') ? 'has-error' : ''}}">
    <label for="Modalidad" class="control-label">{{ 'Modalidad' }}</label>
    <select name="Modalidad" class="form-control" id="Modalidad"  >
        <option value="Femenil" >Femenil</option>
        <option value="Varonil" >Varonil</option>
        <option value="Equipo_Mixto" >Equipo Mixto</option>
</select> 
    {!! $errors->first('Modalidad', '<p class="help-block">:message</p>') !!}
</div>  --}}
{{-- <div class="form-group {{ $errors->has('Modalidad') ? 'has-error' : ''}}">
    <label for="Modalidad" class="control-label">{{ 'Modalidad' }}</label>
    <div class="radio">
    <label><input name="Modalidad" type="radio" value="1" {{ (isset($registro) && 1 == $registro->Modalidad) ? 'checked' : '' }}> Si</label>
</div>
<div class="radio">
    <label><input name="Modalidad" type="radio" value="0" @if (isset($registro)) {{ (0 == $registro->Modalidad) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
    {!! $errors->first('Modalidad', '<p class="help-block">:message</p>') !!}
</div> --}}

{{-- RAMA --}}
<div class="form-group  RAMA {{ $errors->has('Rama') ? 'has-error' : ''}}">
    <label for="Rama" class="control-label">{{ 'Rama' }}</label>
    <select name="Rama" class="form-control" id="Rama" >
    @foreach (json_decode('{"femenil":"Femenil", "varonil":"Varonil"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($registro->Rama) && $registro->Rama == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('Rama', '<p class="help-block">:message</p>') !!}
</div>

 

{{-- CATEGORÍA --}}
<div class="form-group {{ $errors->has('Categoria') ? 'has-error' : ''}}">
    <label for="Categoria" class="control-label">{{ 'Categoría' }}</label>
    <input class="form-control" name="Categoria" type="text" id="Categoria" value="{{ isset($registro->Categoria) ? $registro->Categoria : ''}}" >
    {!! $errors->first('Categoria', '<p class="help-block">:message</p>') !!}
</div>

{{-- CAPITÁN --}}
<div class="form-group {{ $errors->has('Capitan') ? 'has-error' : ''}}">
    <label for="Capitan" class="control-label">{{ 'Capitán' }}</label>
    <div class="radio">
    <label><input name="Capitan" type="radio" value="Si" {{ (isset($registro) && 1 == $registro->Capitan) ? 'checked' : '' }}> Si</label>
</div>
<div class="radio">
    <label><input name="Capitan" type="radio" value="No" @if (isset($registro)) {{ (0 == $registro->Capitan) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
    {!! $errors->first('Capitan', '<p class="help-block">:message</p>') !!}
</div>

{{-- NOMBRE EQUIPO --}}
<div class="form-group {{ $errors->has('NombreEquipo') ? 'has-error' : ''}}">
    <label for="NombreEquipo" class="control-label">{{ 'Nombre del equipo' }}</label>
    <input class="form-control" name="NombreEquipo" type="text" id="NombreEquipo" value="{{ isset($registro->NombreEquipo) ? $registro->NombreEquipo : ''}}" >
    {!! $errors->first('NombreEquipo', '<p class="help-block">:message</p>') !!}
</div>

{{-- CINTAS TAEKWONDO --}}
<div class="form-group {{ $errors->has('CintasTae') ? 'has-error' : ''}}">
    <label for="CintasTae" class="control-label">{{ 'Cintas' }}</label>
    <select name="CintasTae" class="form-control" id="CintasTae" >
    @foreach (json_decode('{"Seleccione_cintas":"Seleccione cinta", "BlANCASAM":"Blancas-Amarillas", "VERDESAZULES":"Verdes-Azules", "ROJASNEGRAS":"Rojas-Negras"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($registro->CintasTae) && $registro->CintasTae == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('CintasTae', '<p class="help-block">:message</p>') !!}
</div>

{{-- CARTA RESPONSIVA --}}
<div class="form-group {{ $errors->has('CartaResponsiva') ? 'has-error' : ''}}">
    <label for="CartaResponsiva" class="control-label">{{ 'Carta responsiva' }}</label>
    <div class="radio">
    <label><input name="CartaResponsiva" type="radio" value="1" {{ (isset($registro) && 1 == $registro->CartaResponsiva) ? 'checked' : '' }}> Si</label>
</div>
<div class="radio">
    <label><input name="CartaResponsiva" type="radio" value="0" @if (isset($registro)) {{ (0 == $registro->CartaResponsiva) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
    {!! $errors->first('CartaResponsiva', '<p class="help-block">:message</p>') !!}
</div>

{{-- PESO --}}
<div class="form-group {{ $errors->has('Peso') ? 'has-error' : ''}}">
    <label for="Peso" class="control-label">{{ 'Peso' }}</label>
    <input class="form-control" name="Peso" type="text" id="Peso" value="{{ isset($registro->Peso) ? $registro->Peso : ''}}" >
    {!! $errors->first('Peso', '<p class="help-block">:message</p>') !!}
</div>

{{-- ESTATURA --}}
<div class="form-group {{ $errors->has('Estatura') ? 'has-error' : ''}}">
    <label for="Estatura" class="control-label">{{ 'Estatura' }}</label>
    <input class="form-control" name="Estatura" type="text" id="Estatura" value="{{ isset($registro->Estatura) ? $registro->Estatura : ''}}" >
    {!! $errors->first('Estatura', '<p class="help-block">:message</p>') !!}
</div>

{{-- ESTADO DE SALUD --}}
<div class="form-group {{ $errors->has('EstadoDeSalud') ? 'has-error' : ''}}">
    <label for="EstadoDeSalud" class="control-label">{{ 'Estado de salud' }}</label>
    <div class="radio">
    <label><input name="EstadoDeSalud" type="radio" value="Bueno" {{ (isset($registro) && 1 == $registro->EstadoDeSalud) ? 'checked' : '' }}> Bueno</label>
</div>
<div class="radio">
    <label><input name="EstadoDeSalud" type="radio" value="Malo" @if (isset($registro)) {{ (0 == $registro->EstadoDeSalud) ? 'checked' : '' }} @else {{ 'checked' }} @endif> Malo</label>
</div>
<div class="radio">
    <label><input name="EstadoDeSalud" type="radio" value="Regular" @if (isset($registro)) {{ (0 == $registro->EstadoDeSalud) ? 'checked' : '' }} @else {{ 'checked' }} @endif> Regular</label>
</div>

    {!! $errors->first('EstadoDeSalud', '<p class="help-block">:message</p>') !!}
</div>

{{-- PADECE ENFERMEDAD --}}

<div class="form-group {{ $errors->has('PadeceEnfermedad') ? 'has-error' : ''}}">
    <label for="PadeceEnfermedad" class="control-label">{{ '¿Padece alguna enfermedad?' }}</label>
    <div class="radio">
    <label><input name="PadeceEnfermedad" type="radio" value="Si" {{ (isset($registro) && 1 == $registro->PadeceEnfermedad) ? 'checked' : '' }}> Si</label>
</div>
<div class="radio">
    <label><input name="PadeceEnfermedad" type="radio" value="No" @if (isset($registro)) {{ (0 == $registro->PadeceEnfermedad) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
    {!! $errors->first('PadeceEnfermedad', '<p class="help-block">:message</p>') !!}
</div>

{{-- QUE ENFERMEDAD PADECE --}}
{{-- <div class="form-group {{ $errors->has('QueEnfermedadPadece') ? 'has-error' : ''}}">
    <label for="QueEnfermedadPadece" class="control-label">{{ '¿Que enfermedad padece?' }}</label>
    <div class="radio">
    <label><input name="QueEnfermedadPadece" type="radio" value="1" {{ (isset($registro) && 1 == $registro->QueEnfermedadPadece) ? 'checked' : '' }}> Si</label>
</div>
<div class="radio">
    <label><input name="QueEnfermedadPadece" type="radio" value="0" @if (isset($registro)) {{ (0 == $registro->QueEnfermedadPadece) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
    {!! $errors->first('QueEnfermedadPadece', '<p class="help-block">:message</p>') !!}
</div> --}}

{{-- ESPECIFIQUE ENFERMEDAD --}}
<div class="form-group {{ $errors->has('EspecifiqueEnfermedad') ? 'has-error' : ''}}">
    <label for="EspecifiqueEnfermedad" class="control-label">{{ 'Especifique enfermedad' }}</label>
    <input class="form-control" name="EspecifiqueEnfermedad" type="text" id="EspecifiqueEnfermedad" value="{{ isset($registro->EspecifiqueEnfermedad) ? $registro->EspecifiqueEnfermedad : ''}}" >
    {!! $errors->first('EspecifiqueEnfermedad', '<p class="help-block">:message</p>') !!}
</div>

{{-- FUMA --}}

<div class="form-group {{ $errors->has('Fuma') ? 'has-error' : ''}}">
    <label for="Fuma" class="control-label">{{ '¿Fuma?' }}</label>
    <div class="radio">
    <label><input name="Fuma" type="radio" value="Si" {{ (isset($registro) && 1 == $registro->Fuma) ? 'checked' : '' }}> Si</label>
</div>
<div class="radio">
    <label><input name="Fuma" type="radio" value="No" @if (isset($registro)) {{ (0 == $registro->Fuma) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
    {!! $errors->first('Fuma', '<p class="help-block">:message</p>') !!}
</div>

{{-- CUANTOS CIGARROS FUMA AL DÍA --}}
<div class="form-group {{ $errors->has('CuantoFuma') ? 'has-error' : ''}}">
    <label for="CuantoFuma" class="control-label">{{ 'Cuantofuma' }}</label>
    <div class="radio">
    <label><input name="CuantoFuma" type="radio" value="1" {{ (isset($registro) && 1 == $registro->CuantoFuma) ? 'checked' : '' }}> Si</label>
</div>
<div class="radio">
    <label><input name="CuantoFuma" type="radio" value="0" @if (isset($registro)) {{ (0 == $registro->CuantoFuma) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
    {!! $errors->first('CuantoFuma', '<p class="help-block">:message</p>') !!}
</div>


{{-- BOTONES DE ACCIONES --}}

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Actualizar' : 'Crear' }}">
</div>
