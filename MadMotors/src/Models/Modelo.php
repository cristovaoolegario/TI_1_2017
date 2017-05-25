<?php

    include('IModelo.php');
    include('MySQL.php');

    class Modelo implements IModelo
    {

        public $id_Marca;
        public $nome;
        
        private static $mySQL;

        public function __construct()
        {
            
        }

        public static function insert()
        {
            $mySQL = new MySQL;
            $mySQL->connect();
            $insereModelo = $mySQL->executeQuery("INSERT INTO modelo(id_Marca,nome) VALUES(".$id_Marca.",'".$nome."');");
        }

        public static function update()
        {
            $mySQL = new MySQL;
            $mySQL->connect();
            $updateModelo = $mySQL->executeQuery("UPDATE modelo SET id_Marca = ".$id_Marca.", nome = '".$nome."'");
        }

        public static function delete()
        {
            $mySQL = new MySQL;
            $mySQL->connect();
            $deleteModelo = $mySQL->executeQuery("DELETE FROM Modelo WHERE id = ".$id."");
        }

        public static function select()
        {
            $mySQL = new MySQL;
            $selectModelo = "SELECT * FROM Modelo ";

            $mySQL->connect();

            if (!empty($id))
            {
                $selectModelo .= "WHERE id = ".$id." ";
            }

            $result = $mySQL->executeQuery($selectModelo);
            return($result);
        }

    }

?>
