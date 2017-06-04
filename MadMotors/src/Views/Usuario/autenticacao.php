<?php 
    include_once '../../Controllers/UsuarioController.php';
    header('Content-Type: application/json');
    
    if(isset($_POST))
    {
        $usuario = $_POST;
        UsuarioController::autenticacao($usuario);
    }
?>