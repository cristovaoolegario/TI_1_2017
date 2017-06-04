<?php
include '../../Controllers/ModeloController.php';
header('Content-Type: application/json');

if(isset($_POST['id_Marca'])||isset($_POST['nomeMarca']))
{
    $id_Marca = $_POST['id_Marca'];
    $nomeMarca = $_POST['nomeMarca'];
    $json = ModeloController::selectByMarca($id_Marca, $nomeMarca);
    echo ' '.$json;
}
else
{
    ModeloController::select();
}
?>
