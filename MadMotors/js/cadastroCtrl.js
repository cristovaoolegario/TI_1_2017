angular.module("madmotors", []);
angular.module("madmotors").controller("cadastroCtrl", function ($scope, $http)
{

    //s$scope.cadastro;
    $scope.marcas = [];
    $scope.modelos = [];
    
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
    
    $scope.carregarModelos = function (marca)
    {
        var req = {// variavel para que se faça a requisição ao backend
            method: 'GET',
            url: './src/Views/modelo/select.php',
            headers: {
                'Content-Type': 'application/json'
            }
        };

        $http(req).then(function success(response)
        {
            $scope.modelos = response.data;
        });/*
        console.log(marca);
        $.ajax({
            type: 'POST',
            data: marca,
            url: './src/Views/Modelo/select.php',
            success: function(data) 
            {
                console.log(data);
                $scope.modelos = data;
            }
        });*/
    };

    $scope.cadastrar = function (cadastro) {
        var date = new Date();
        $scope.cadastro.dtAnuncio = date.getFullYear()+"-"+(date.getMonth()+1)+"-"+date.getDate();
        delete $scope.cadastro;
        $.ajax({
            type: 'POST',
            data: cadastro,
            url: './src/Views/Anuncio/insert.php',
            success: function(data) 
            {
                
            }
        });
        alert("Sucesso");
    }

    $scope.carregarMarcas();

});