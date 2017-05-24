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
        console.log("data");

        var req = {// variavel para que se faça a requisição ao backend
            method: 'GET',
            url: './src/Views/Marca/select.php',
            headers: {
                'Content-Type': 'application/json'
            }
        };

        $http(req).then(function success(response)
        {
            console.log(response.data);
            $scope.marcas = data;


        });
    };

    var carregarModelos = function ()
    {
        $http.get("").success(function (data)
        {

            $scope.modelos = data;

        }).error(function (data, status)
        {

            $scope.message = "Aconteceu um problema: " + data;

        });

    };

    var cadastrarAnuncio = function (cadastro)
    {
        $http.post("", cadastro).success(function (data)
        {
            delete $scope.cadastro;

        }).error(function (data, status)
        {
            $scope.message = "Aconteceu um problema: " + data;
        });

    };

    carregarMarcas();

});
