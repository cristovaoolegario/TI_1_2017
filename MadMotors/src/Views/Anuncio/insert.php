<?php
    include_once '../../Controllers/AnuncioController.php';
    header('Content-Type: application/json');
    
    if(isset($_POST))
    {
        //echo 'Sucesso';
        $cadastro = $_POST;
       // print_r($cadastro);
         AnuncioController::insert($cadastro);
    }
?>