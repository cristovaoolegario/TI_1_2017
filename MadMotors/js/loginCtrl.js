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
            window.location.href = "http://localhost/TI_1_2017/MadMotors/index.html";
        };
});