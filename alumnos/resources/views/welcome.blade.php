<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>

     <script src="{{ asset('js/app.js') }}"></script>
   <script src="{{ asset('js/angular.min.js') }}"></script>
   <script src="{{ asset('js/index.js') }}"></script>
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
     <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    </head>
    <body ng-app="myApp" ng-controller="myCtrl">
     <div class="container">   
     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Agregar  alumnos
</button>
     <table class="table">
     <thead>
      <tr>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Identificacion</th>
      <th>Direccion</th>
      <th>Genero</th>
      <th>Edad</th>
      <th>Fechanacimiento</th>  
      <th>Editar</th>  
      <th>Eliminar</th>  
      </tr>   
     </thead>    
   <tbody>
<tr ng-repeat="x in alumnos">
<td><%x.nombre%></td>
<td><%x.apellido%></td>
<td><%x.identificacion%></td>
<td><%x.direccion%></td>
<td><%x.genero%></td>
<td><%x.edad%></td>
<td><%x.fechanacimiento%></td>
<td><button class=" btn btn-warning" ng-click=editar(x.idalumnos)>Editar</button> </td>
<td><button class=" btn btn-danger" ng-click=eliminar(x.idalumnos)>ELiminar</button> </td>
   </tr>
</tbody>

     </table>   

</div>


<div class="container">
  <!-- Button to Open the Modal -->

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Ingresar Alumnos</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         
  <form  id="Alumnosregistro">
    <div class="form-group">
      <label for="email">Identificacion:</label>
      <input type="text" class="form-control" id="Identificacion" placeholder="Enter Identificacion" name="Identificacion">
    </div>
    <div class="form-group">
      <label for="pwd">nombre:</label>
      <input type="text" class="form-control" id="nombre" placeholder="Enter nombre" name="nombre">
    </div>
    
    <div class="form-group">
      <label for="pwd">apellido:</label>
      <input type="text" class="form-control" id="apellido" placeholder="Enter apellido" name="apellido">
    </div>
     <div class="form-group">
      <label for="pwd">direccion:</label>
      <input type="text" class="form-control" id="direccion" placeholder="Enter direccion" name="direccion">
    </div>
  <div class="form-group">
      <label for="pwd">fechanacimiento:</label>
      <input type="text" class="form-control" id="fechanacimiento" placeholder="Enter fechanacimiento"name="fechanacimiento">
    </div>


<div class="form-group">
      <label for="pwd">Genero:</label>
      <select name="Genero" class="form-control">
       <option value="">seleccione</option>   
       <option value="M">Masculino</option>
       <option value="F">Femenino</option>   
      
      </select>

      </div>

       <button type="button" class="btn btn-primary" ng-click="GuardarAlumnos()">Guardar</button>
  </form>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
                </div>
        
      </div>
    </div>
  </div>
  
</div>







<div class="container">
  <!-- Button to Open the Modal -->

  <!-- The Modal -->
  <div class="modal fade" id="myModal2">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Ingresar Alumnos</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         
      <div class="contenido"></div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
                <button type="button" class="btn btn-primary" ng-click="Guardarcambios()">Guardar</button>
                </div>
        
      </div>
    </div>
  </div>
  
</div>
    </body>
</html>
