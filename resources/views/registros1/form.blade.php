{{-- inicia código esconder y mostrar --}}

 {{-- <div class="form-group {{ $errors->has('Deporte') ? 'has-error' : ''}}">
    <label for="cambiar" class="control-label">Selecciona un Deporte</label>
    <select  class="form-control" id="cambiar" name="cambiar" value="{{ isset($registros1->Deporte) ? $registros1->Deporte : ''}}">
       <option value="">Selecciona una opción</option>
        <option value="ajedrez">Ajedrez</option>
        <option value="atletismo">Atletismo</option>
        <option value="Futbol5x5">Futbol 5x5</option>
        <option value="Taekwondo">Taekwondo</option>
        <option value="Voleibol">Voleibol</option>
   
    </select>
   </div>


 <div class="form-group {{ $errors->has('Modalidad') ? 'has-error' : ''}}" id="Ajedrez_" style="display:none" >
    <label for="Modalidad" class="control-label">{{ 'Modalidad:' }}</label>
     <select class="cambiar form-control" name="cambiar" id="Modalidad">
     <option value="Individual">Individual</option>
     <option value="Mixto">Mixto</option>
   </select>
 </div>

 <div class="form-group {{ $errors->has('Modalidad') ? 'has-error' : ''}}" id="Atletismo_" style="display:none">    
    <label for="Modalidad" class="control-label">{{ 'Modalidad:' }}</label>
   <select class="cambiar form-control" name="cambiar" id="Modalidad">
     <option value="Velocidad">Velocidad</option>
     <option value="Salto sin impulso">Salto sin impulso</option>
     <option value="Relevo mixto">Relevo mixto</option>
   </select>
 </div>

 <div class="form-group {{ $errors->has('Modalidad') ? 'has-error' : ''}}" id="futbol5x5_" style="display:none">    
    <label for="Modalidad" class="control-label">{{ 'Modalidad:' }}</label>
   <select class="cambiar form-control" name="cambiar" id="Modalidad">
     <option value="Femenil">Femenil</option>
     <option value="Varonil">Varonil</option>
     <option value="Equipo mixto">Equipo mixto</option>
   </select>
 </div> 

 <div class="form-group {{ $errors->has('Modalidad') ? 'has-error' : ''}}" id="taekwondo_" style="display:none">
    <label for="Modalidad" class="control-label">{{ 'Selecciona cintas:' }}</label>
   <select class="cambiar form-control" name="cambiar" id="Modalidad">
     <option value="Blancas-Amarillas">Blancas-Amarillas</option>
     <option value="Verdes-Azules">Verdes-Azules</option>
     <option value="Rojas-Negras">Rojas-Negras</option>
   </select>
 </div>

 <div class="form-group {{ $errors->has('Modalidad') ? 'has-error' : ''}}" id="voleibol_" style="display:none">
    <label for="Modalidad" class="control-label">{{ 'Modalidad:' }}</label>
   <select class="cambiar form-control" name="cambiar" id="Modalidad">
     <option value="Femenil">Femenil</option>
     <option value="Varonil">Varonil</option>
     <option value="Equipo mixto">Equipo mixto</option>
   </select>
 </div>  --}}
{{-- termina mostrar y esconder --}}

 
{{-- inicia código original --}}


<div class="form-group {{ $errors->has('Foto') ? 'has-error' : ''}}">
    <label for="Foto" class="control-label">{{ 'Foto' }}</label>
    <input class="form-control" name="Foto" type="file" id="Foto" value="{{ isset($registros1->Foto) ? $registros1->Foto : ''}}" >
    {!! $errors->first('Foto', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Nombre') ? 'has-error' : ''}}">
    <label for="Nombre" class="control-label">{{ 'Nombre' }}</label>
    <input class="form-control" name="Nombre" type="text" id="Nombre" value="{{ isset($registros1->Nombre) ? $registros1->Nombre : ''}}" >
    {!! $errors->first('Nombre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('ApellidoPaterno') ? 'has-error' : ''}}">
    <label for="ApellidoPaterno" class="control-label">{{ 'Apellidopaterno' }}</label>
    <input class="form-control" name="ApellidoPaterno" type="text" id="ApellidoPaterno" value="{{ isset($registros1->ApellidoPaterno) ? $registros1->ApellidoPaterno : ''}}" >
    {!! $errors->first('ApellidoPaterno', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('ApellidoMaterno') ? 'has-error' : ''}}">
    <label for="ApellidoMaterno" class="control-label">{{ 'Apellidomaterno' }}</label>
    <input class="form-control" name="ApellidoMaterno" type="text" id="ApellidoMaterno" value="{{ isset($registros1->ApellidoMaterno) ? $registros1->ApellidoMaterno : ''}}" >
    {!! $errors->first('ApellidoMaterno', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Sexo') ? 'has-error' : ''}}">
    <label for="Sexo" class="control-label">{{ 'Sexo' }}</label>
    <select name="Sexo" class="form-control" id="Sexo" >
    @foreach (json_decode('{"hombre":"Hombre", "mujer": "Mujer"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($registros1->Sexo) && $registros1->Sexo == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('Sexo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Telefono') ? 'has-error' : ''}}">
    <label for="Telefono" class="control-label">{{ 'Telefono' }}</label>
    <input class="form-control" name="Telefono" type="number" id="Telefono" value="{{ isset($registros1->Telefono) ? $registros1->Telefono : ''}}" >
    {!! $errors->first('Telefono', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Correo') ? 'has-error' : ''}}">
    <label for="Correo" class="control-label">{{ 'Correo' }}</label>
    <input class="form-control" name="Correo" type="email" id="Correo" value="{{ isset($registros1->Correo) ? $registros1->Correo : ''}}" >
    {!! $errors->first('Correo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('FechaNacimiento') ? 'has-error' : ''}}">
    <label for="FechaNacimiento" class="control-label">{{ 'Fechanacimiento' }}</label>
    <input class="form-control" name="FechaNacimiento" type="date" id="FechaNacimiento" value="{{ isset($registros1->FechaNacimiento) ? $registros1->FechaNacimiento : ''}}" >
    {!! $errors->first('FechaNacimiento', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Edad') ? 'has-error' : ''}}">
    <label for="Edad" class="control-label">{{ 'Edad' }}</label>
    <input class="form-control" name="Edad" type="number" id="Edad" value="{{ isset($registros1->Edad) ? $registros1->Edad : ''}}" >
    {!! $errors->first('Edad', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Identificacion') ? 'has-error' : ''}}">
    <label for="Identificacion" class="control-label">{{ 'Identificacion' }}</label>
    <input class="form-control" name="Identificacion" type="file" id="Identificacion" value="{{ isset($registros1->Identificacion) ? $registros1->Identificacion : ''}}" >
    {!! $errors->first('Identificacion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('ServicioMedico') ? 'has-error' : ''}}">
    <label for="ServicioMedico" class="control-label">{{ 'Serviciomedico' }}</label>
    <div class="radio">
    <label><input name="ServicioMedico" type="radio" value="1" {{ (isset($registros1) && 1 == $registros1->ServicioMedico) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="ServicioMedico" type="radio" value="0" @if (isset($registros1)) {{ (0 == $registros1->ServicioMedico) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
    {!! $errors->first('ServicioMedico', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Institucion') ? 'has-error' : ''}}">
    <label for="Institucion" class="control-label">{{ 'Institucion' }}</label>
    <select name="Institucion" class="form-control" id="Institucion" >
    @foreach (json_decode('{"imss":"IMSS", "issste":"ISSSTE"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($registros1->Institucion) && $registros1->Institucion == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('Institucion', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Especifique') ? 'has-error' : ''}}">
    <label for="Especifique" class="control-label">{{ 'Especifique' }}</label>
    <input class="form-control" name="Especifique" type="text" id="Especifique" value="{{ isset($registros1->Especifique) ? $registros1->Especifique : ''}}" >
    {!! $errors->first('Especifique', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Imss') ? 'has-error' : ''}}">
    <label for="Imss" class="control-label">{{ 'Imss' }}</label>
    <input class="form-control" name="Imss" type="text" id="Imss" value="{{ isset($registros1->Imss) ? $registros1->Imss : ''}}" >
    {!! $errors->first('Imss', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Issste') ? 'has-error' : ''}}">
    <label for="Issste" class="control-label">{{ 'Issste' }}</label>
    <input class="form-control" name="Issste" type="text" id="Issste" value="{{ isset($registros1->Issste) ? $registros1->Issste : ''}}" >
    {!! $errors->first('Issste', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Alcaldia') ? 'has-error' : ''}}">
    <label for="Alcaldia" class="control-label">{{ 'Alcaldia' }}</label>
    <input class="form-control" name="Alcaldia" type="text" id="Alcaldia" value="{{ isset($registros1->Alcaldia) ? $registros1->Alcaldia : ''}}" >
    {!! $errors->first('Alcaldia', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Calle') ? 'has-error' : ''}}">
    <label for="Calle" class="control-label">{{ 'Calle' }}</label>
    <input class="form-control" name="Calle" type="text" id="Calle" value="{{ isset($registros1->Calle) ? $registros1->Calle : ''}}" >
    {!! $errors->first('Calle', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Numero') ? 'has-error' : ''}}">
    <label for="Numero" class="control-label">{{ 'Numero' }}</label>
    <input class="form-control" name="Numero" type="number" id="Numero" value="{{ isset($registros1->Numero) ? $registros1->Numero : ''}}" >
    {!! $errors->first('Numero', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('NumeroInterior') ? 'has-error' : ''}}">
    <label for="NumeroInterior" class="control-label">{{ 'Numerointerior' }}</label>
    <input class="form-control" name="NumeroInterior" type="number" id="NumeroInterior" value="{{ isset($registros1->NumeroInterior) ? $registros1->NumeroInterior : ''}}" >
    {!! $errors->first('NumeroInterior', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Colonia') ? 'has-error' : ''}}">
    <label for="Colonia" class="control-label">{{ 'Colonia' }}</label>
    <input class="form-control" name="Colonia" type="text" id="Colonia" value="{{ isset($registros1->Colonia) ? $registros1->Colonia : ''}}" >
    {!! $errors->first('Colonia', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Cp') ? 'has-error' : ''}}">
    <label for="Cp" class="control-label">{{ 'Cp' }}</label>
    <input class="form-control" name="Cp" type="number" id="Cp" value="{{ isset($registros1->Cp) ? $registros1->Cp : ''}}" >
    {!! $errors->first('Cp', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('ComprobanteDomicilio') ? 'has-error' : ''}}">
    <label for="ComprobanteDomicilio" class="control-label">{{ 'Comprobantedomicilio' }}</label>
    <input class="form-control" name="ComprobanteDomicilio" type="file" id="ComprobanteDomicilio" value="{{ isset($registros1->ComprobanteDomicilio) ? $registros1->ComprobanteDomicilio : ''}}" >
    {!! $errors->first('ComprobanteDomicilio', '<p class="help-block">:message</p>') !!}
</div>
{{-- <div class="form-group {{ $errors->has('Deporte') ? 'has-error' : ''}}">
    <label for="Deporte" class="control-label">{{ 'Deporte' }}</label>
    <select name="Deporte" class="form-control" id="Deporte" >
    @foreach (json_decode('{"SELECCIONE":"Seleccione_Deporte", "AJEDREZ":"Ajedrez", "ATLETISMO":"Atletismo", "BALONCESTO":"Baloncesto", "BALONCESTO3x3":"Baloncesto3x3","BEISBOL":"Beisbol", "BOXEO":"Boxeo", "CICLISMO":"Ciclismo", "FUTBOL5x5":"Futbol5x5", "FUTBOLASOCIACION":"Futbol_Asociacion", "SOFTBOL":"Softbol", "TAEKWONDO":"Taekwondo","VOLEIBOL":"Voleibol"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($registros1->Deporte) && $registros1->Deporte == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('Deporte', '<p class="help-block">:message</p>') !!}
</div> --}}
<div class="form-group {{ $errors->has('Rama') ? 'has-error' : ''}}">
    <label for="Rama" class="control-label">{{ 'Rama' }}</label>
    <select name="Rama" class="form-control" id="Rama" >
    @foreach (json_decode('{"femenil":"Femenil", "varonil":"Varonil", "mixto": "Mixto"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($registros1->Rama) && $registros1->Rama == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('Rama', '<p class="help-block">:message</p>') !!}
</div>
{{-- <div class="form-group {{ $errors->has('Modalidad') ? 'has-error' : ''}}">
    <label for="Modalidad" class="control-label">{{ 'Modalidad' }}</label>
    <select name="Modalidad" class="form-control" id="Modalidad" >
    @foreach (json_decode('{"MIXTO":"Mixto", "RELEVOS":"Relevos"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($registros1->Modalidad) && $registros1->Modalidad == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('Modalidad', '<p class="help-block">:message</p>') !!}
</div> --}}
<div class="form-group {{ $errors->has('Categoria') ? 'has-error' : ''}}">
    <label for="Categoria" class="control-label">{{ 'Categoria' }}</label>
    <input class="form-control" name="Categoria" type="text" id="Categoria" value="{{ isset($registros1->Categoria) ? $registros1->Categoria : ''}}" >
    {!! $errors->first('Categoria', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Capitan') ? 'has-error' : ''}}">
    <label for="Capitan" class="control-label">{{ 'Capitan' }}</label>
    <div class="radio">
    <label><input name="Capitan" type="radio" value="1" {{ (isset($registros1) && 1 == $registros1->Capitan) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="Capitan" type="radio" value="0" @if (isset($registros1)) {{ (0 == $registros1->Capitan) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
    {!! $errors->first('Capitan', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('NombreEquipo') ? 'has-error' : ''}}">
    <label for="NombreEquipo" class="control-label">{{ 'Nombreequipo' }}</label>
    <input class="form-control" name="NombreEquipo" type="text" id="NombreEquipo" value="{{ isset($registros1->NombreEquipo) ? $registros1->NombreEquipo : ''}}" >
    {!! $errors->first('NombreEquipo', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('CintasTae') ? 'has-error' : ''}}">
    <label for="CintasTae" class="control-label">{{ 'Cintastae' }}</label>
    <select name="CintasTae" class="form-control" id="CintasTae" >
    @foreach (json_decode('{"BlANCASAM":"Blancas_Amarillas", "VERDESAZULES":"Verdes_Azules", "ROJASNEGRAS":"Rojas_Negras"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($registros1->CintasTae) && $registros1->CintasTae == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('CintasTae', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('CartaResponsiva') ? 'has-error' : ''}}">
    <label for="CartaResponsiva" class="control-label">{{ 'Cartaresponsiva' }}</label>
    <div class="radio">
    <label><input name="CartaResponsiva" type="radio" value="1" {{ (isset($registros1) && 1 == $registros1->CartaResponsiva) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="CartaResponsiva" type="radio" value="0" @if (isset($registros1)) {{ (0 == $registros1->CartaResponsiva) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
    {!! $errors->first('CartaResponsiva', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Peso') ? 'has-error' : ''}}">
    <label for="Peso" class="control-label">{{ 'Peso' }}</label>
    <input class="form-control" name="Peso" type="text" id="Peso" value="{{ isset($registros1->Peso) ? $registros1->Peso : ''}}" >
    {!! $errors->first('Peso', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Estatura') ? 'has-error' : ''}}">
    <label for="Estatura" class="control-label">{{ 'Estatura' }}</label>
    <input class="form-control" name="Estatura" type="text" id="Estatura" value="{{ isset($registros1->Estatura) ? $registros1->Estatura : ''}}" >
    {!! $errors->first('Estatura', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('EstadoDeSalud') ? 'has-error' : ''}}">
    <label for="EstadoDeSalud" class="control-label">{{ 'Estadodesalud' }}</label>
    <div class="radio">
    <label><input name="EstadoDeSalud" type="radio" value="1" {{ (isset($registros1) && 1 == $registros1->EstadoDeSalud) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="EstadoDeSalud" type="radio" value="0" @if (isset($registros1)) {{ (0 == $registros1->EstadoDeSalud) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
    {!! $errors->first('EstadoDeSalud', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('PadeceEnfermedad') ? 'has-error' : ''}}">
    <label for="PadeceEnfermedad" class="control-label">{{ 'Padeceenfermedad' }}</label>
    <div class="radio">
    <label><input name="PadeceEnfermedad" type="radio" value="1" {{ (isset($registros1) && 1 == $registros1->PadeceEnfermedad) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="PadeceEnfermedad" type="radio" value="0" @if (isset($registros1)) {{ (0 == $registros1->PadeceEnfermedad) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
    {!! $errors->first('PadeceEnfermedad', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('QueEnfermedadPadece') ? 'has-error' : ''}}">
    <label for="QueEnfermedadPadece" class="control-label">{{ 'Queenfermedadpadece' }}</label>
    <div class="radio">
    <label><input name="QueEnfermedadPadece" type="radio" value="1" {{ (isset($registros1) && 1 == $registros1->QueEnfermedadPadece) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="QueEnfermedadPadece" type="radio" value="0" @if (isset($registros1)) {{ (0 == $registros1->QueEnfermedadPadece) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
    {!! $errors->first('QueEnfermedadPadece', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('EspecifiqueEnfermedad') ? 'has-error' : ''}}">
    <label for="EspecifiqueEnfermedad" class="control-label">{{ 'Especifiqueenfermedad' }}</label>
    <input class="form-control" name="EspecifiqueEnfermedad" type="text" id="EspecifiqueEnfermedad" value="{{ isset($registros1->EspecifiqueEnfermedad) ? $registros1->EspecifiqueEnfermedad : ''}}" >
    {!! $errors->first('EspecifiqueEnfermedad', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Fuma') ? 'has-error' : ''}}">
    <label for="Fuma" class="control-label">{{ 'Fuma' }}</label>
    <div class="radio">
    <label><input name="Fuma" type="radio" value="1" {{ (isset($registros1) && 1 == $registros1->Fuma) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="Fuma" type="radio" value="0" @if (isset($registros1)) {{ (0 == $registros1->Fuma) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
    {!! $errors->first('Fuma', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('CuantoFuma') ? 'has-error' : ''}}">
    <label for="CuantoFuma" class="control-label">{{ 'Cuantofuma' }}</label>
    <div class="radio">
    <label><input name="CuantoFuma" type="radio" value="1" {{ (isset($registros1) && 1 == $registros1->CuantoFuma) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="CuantoFuma" type="radio" value="0" @if (isset($registros1)) {{ (0 == $registros1->CuantoFuma) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
    {!! $errors->first('CuantoFuma', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
