
var app = angular.module("myApp",[],function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    });
app.controller("myCtrl", function($scope,$http) {

$("#fechanacimiento").datepicker({
  format: "yyyy-mm-dd"});

$("#fechanacimiento2").datepicker({
  format: "yyyy-mm-dd"});
$scope.mostrarAlumnos=function(){
var url="http://localhost/alumnos/public/show"
$http.get(url)
  .then(function(response) {
    $scope.alumnos =response.data;
  });

}

$scope.mostrarAlumnos();

$scope.GuardarAlumnos=function(){

var  parametros=$("#Alumnosregistro").serialize();
var url="http://localhost/alumnos/public/registrar";

//registrar
$http({
  method  : 'POST',
  url     : url,
  data    : parametros, //this.formData,  // pass in data as strings
  headers : { 'Content-Type': 'application/x-www-form-urlencoded' } 
  
   // set the headers so angular passing info as form data (not request payload)
 }).success(function(response){
 
 alert(response);
 $scope.mostrarAlumnos();          
})

}


$scope.editar=function(xidalumnos){

var  parametros=$.param({'idalumnos':xidalumnos});
var url="http://localhost/alumnos/public/editar";


$http({
  method  : 'POST',
  url     : url,
  data    : parametros, //this.formData,  // pass in data as strings
  headers : { 'Content-Type': 'application/x-www-form-urlencoded' } 
  
   // set the headers so angular passing info as form data (not request payload)
 }).success(function(response){
 
 $("#myModal2").modal();
 $(".contenido").html(response);          
})

}


$scope.Guardarcambios=function(){

var  parametros=$("#Alumnosedit").serialize();
var url="http://localhost/alumnos/public/update";

//registrar
$http({
  method  : 'POST',
  url     : url,
  data    : parametros, //this.formData,  // pass in data as strings
  headers : { 'Content-Type': 'application/x-www-form-urlencoded' } 
  
   // set the headers so angular passing info as form data (not request payload)
 }).success(function(response){
 
 alert(response);
 $scope.mostrarAlumnos();          
})


}
})