angular.module("madmotors", []);
angular.module("madmotors").controller("homeCtrl", function ($scope, $http)
{
	/*$scope.marcas = [
		{id: "1", nome:"Toyota"},
		{id: "2", nome:"GM"},
		{id: "3", nome:"Fiat"}
	];*/

  $scope.marcas = [];
  $scope.modelos = [];
  
  var carregarMarcas = function ()
  {
	$http.get("").success(function(data)
	{
		
		$scope.marcas = data;
		
	}).error(function (data, status)
	{
		
		$scope.message = "Aconteceu um problema: " + data;
		
	});
	
  };
  
    var carregarModelos = function ()
  {
	$http.get("").success(function(data)
	{
		
		$scope.modelos = data;
		
	}).error(function (data, status)
	{
		
		$scope.message = "Aconteceu um problema: " + data;
		
	});
	
  };
  
  var cadastrarAnuncio = function (cadastro)
  {
	$http.post("", cadastro).success(function(data)
	{
		delete $scope.cadastro;
		
	}).error(function (data, status)
	{
		$scope.message = "Aconteceu um problema: " + data;
	});
	
  };

  carregarMarcas();
  carregarModelos();
  
});
