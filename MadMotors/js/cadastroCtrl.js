angular.module("madmotors", []);
angular.module("madmotors").controller("cadastroCtrl", function($scope, $http)
{  
	
	$scope.marcas = [];

	$scope.cambios = [
	{nome: "MANUAL"},
	{nome: "AUTOMATICO"},
	{nome: "SEMI AUTOMATICO"},
	{nome: "CVT"}
	];

	$scope.carrocerias = [
	{nome: "SEDAN"},
	{nome: "HATCH"},
	{nome: "PERUA"},
	{nome: "MPV"},
	{nome: "COUPÉ"},
	{nome: "SUV"},
	{nome: "JIPE"},
	{nome: "CROSSOVER"},
	{nome: "PICAPE"},
	{nome: "CAMINHONETE"}
	];

	$scope.Anuncios = [];

    
    $scope.carregarMarcas = function ()
    {
        var req = {// variavel para que se faça a requisição ao backend
            method: 'GET',
            url: './src/Views/Marca/select.php',
            headers: {
                'Content-Type': 'application/json'
            }
        };

        $http(req).then(function success(response)
        {
            $scope.marcas = response.data;
        });
    };
    
    
	$scope.cadastrarAnuncio = function(cadastro) {

		//console.log(cadastro);
		delete $scope.cadastro;
		$scope.cadastroForm.$setPristine();
		
	}
    
    $scope.carregarMarcas();
    
});