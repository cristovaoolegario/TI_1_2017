<?php

    include('IModelo.php');
    include('MySQL.php');

    class Modelo implements IModelo
    {

        public $id_Marca;
        public $nome;
        private $mySQL;

        public function __construct()
        {
            $mySQL = new MySQL;
        }

        public static function insert()
        {
            $this->mySQL->connect();
            $insereModelo = $mySQL->executeQuery("INSERT INTO modelo(id_Marca,nome) VALUES(".$id_Marca.",'".$nome."');");
        }

        public static function update()
        {
            $this->mySQL->connect();
            $updateModelo = $mySQL->executeQuery("UPDATE modelo SET id_Marca = ".$id_Marca.", nome = '".$nome."'");
        }

        public static function delete()
        {
            $this->mySQL->connect();
            $deleteModelo = $mySQL->executeQuery("DELETE FROM Modelo WHERE id = ".$id."");
        }

        public static function select()
        {
            $selectModelo = "SELECT * FROM Modelo ";

            $this->mySQL->connect();

            if (!empty($id))
            {
                $selectModelo .= "WHERE id = ".$id." ";
            }

            $result = $mySQL->executeQuery($selectModelo);
            return($result);
        }

    }

?>
