<form  id="Alumnosedit">
    <div class="form-group">
       <input type="hidden" name="idalumnos"value="{{$alumnos->idalumnos}}">
      <label for="email">Identificacion:</label>
      <input type="text" class="form-control" id="Identificacion" placeholder="Enter Identificacion" name="Identificacion" value="{{$alumnos->IdentIfIcacIon}}">
    </div>
    <div class="form-group">
      <label for="pwd">nombre:</label>
      <input type="text" class="form-control" id="nombre" placeholder="Enter nombre" name="nombre" value="{{$alumnos->nombre}}">
    </div>
   
    <div class="form-group">
      <label for="pwd">apellido:</label>
      <input type="text" class="form-control" id="apellido" placeholder="Enter apellido" name="apellido"value="{{$alumnos->apellido}}">
    </div>
     <div class="form-group">
      <label for="pwd">direccion:</label>
      <input type="text" class="form-control" id="direccion" placeholder="Enter direccion" name="direccion"value="{{$alumnos->direccion}}">
    </div>
  <div class="form-group">
      <label for="pwd">fechanacimiento:</label>
      <input type="text" class="form-control" id="fechanacimiento2" placeholder="Enter fechanacimiento"name="fechanacimiento"value="{{$alumnos->fechanacimiento}}">
    </div>


<div class="form-group">
      <label for="pwd">Genero:</label>
      <select name="Genero" class="form-control">
      @if($alumnos->genero=='M')
       <option value="M">Masculino</option>
       <option value="F">Femenino</option>   
      @endif

      @if($alumnos->genero=='F')
       <option value="F">Femenino</option>
       <option value="M">Masculino</option>   
      @endif
      </select>

      </div>

       
  </form>
