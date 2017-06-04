angular.module("madmotors", []);
angular.module("madmotors").controller("loginCtrl", function($scope, $http)
{
	$scope.iniciarSessao = function (usuario)
	{
            console.log(usuario.login);
            
            var req = {// variavel para que se faça a requisição ao backend
                method: 'POST',
                'login':usuario.login, 'senha':usuario.senha, 
                url: './src/Views/Usuario/autenticacao.php',
                usuario = [{login:usuario.login, senha:usuario.senha}],            
                headers: {
                    'Content-Type': 'application/json'
            }
        };

        $http(req).then(function success(response)
        {
            window.location.assign("http://localhost/TI_Testes/MadMotors/cadastro.php");
        });
	};
});