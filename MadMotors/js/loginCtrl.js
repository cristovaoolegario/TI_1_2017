angular.module("madmotors", []);
angular.module("madmotors").controller("loginCtrl", function($scope, $http)
{
        $scope.iniciarSessao = function (usuario){
            $.ajax({
                type: 'POST',
                data: usuario,
                url: './src/Views/Usuario/autenticacao.php',
                success: function(data) 
                {
                    
                }
            });
            window.location.href = "./index.html";
        };
});