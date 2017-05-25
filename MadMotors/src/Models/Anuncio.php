<?php

    include('IModelo.php');
    include('MySQL.php');

    class Anuncio implements IModelo
    {

        public $id;
        public $estado;
        public $ano;
        public $cor;
        public $numPortas;
        public $quilometragem;
        public $cambio;
        public $combustivel;
        public $finalPlaca;
        public $carroceria;
        public $dtAnuncio;
        public $id_Endereco;
        public $id_Modelo;
        public $id_Usuario;
        public $preco;
        
        private static $mySQL;

        public function __construct()
        {
                       
        }

        public static function insert()
        {
            $mySQL = new MySQL;
            $mySQL->connect();
            $insereAnuncio = $mySQL->executeQuery("INSERT INTO anuncio  (`estadoVeiculo`,`ano`,`cor`,`numeroPortas`,`quilometragem`,`cambio`,`combustivel`,`finalPlaca`,`tipoCarroceria`,`dataAnuncio`,`id_Endereco`,`id_Modelo`,`id_Usuario`,`preco`) VALUES ('".$estado."',".$ano.",'".$cor."',".$numPortas.",".$quilometragem.",'".$cambio."','".$combustivel."','".$finalPlaca."','".$carroceria."',".$dtAnuncio.",".$id_Endereco.",".$id_Modelo.",".$id_Usuario.",".$preco.");");
        }

        public static function update()
        {
            $mySQL = new MySQL;
            $mySQL->connect();
            $updateAnuncio = $mySQL->executeQuery("UPDATE Anuncio SET estadoVeiculo = '".$estado."', ano = ".$ano.", cor = '".$cor."', numeroPortas = ".$numPortas.", quilometragem = ".$quilometragem.", cambio = '".$cambio."', combustivel = '".$combustivel."', finalPlaca = '".$finalPlaca."', tipoCarroceria = '".$carroceria."', dataAnuncio = ".$dtAnuncio." WHERE id = ".$id."");
        }

        public static function delete()
        {
            $mySQL = new MySQL;
            $mySQL->connect();
            $deleteAnuncio = $mySQL->executeQuery("DELETE FROM Anuncio WHERE id = ".$id."");
        }

        public static function select()
        {
            $mySQL = new MySQL;
            $selectAnuncio = "Select * from anuncio A Join usuario U 
                ON(A.id_Usuario = U.id) Join endereco E 
                ON(A.id_Endereco = E.id) Join modelo Mo
                ON(A.id_Modelo = Mo.id) JOIN marca Ma
                ON(Mo.id_Marca = Ma.id) ";

            $mySQL->connect();

            if (!empty($id))
            {
                $selectAnuncio .= "WHERE id = ".$id." ";
            }

            $result = $mySQL->executeQuery($selectAnuncio);
            return($result);
        }
    }

?>
