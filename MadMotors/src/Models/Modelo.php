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

        public function insert()
        {
			$this->mySQL->connect();
            $insereModelo = $mySQL->executeQuery("INSERT INTO modelo(id_Marca,nome) VALUES(" . $id_Marca . "," . $nome . ");");
        }

        public function update()
        {
			$this->mySQL->connect();
			$updateModelo = $mySQL->executeQuery("UPDATE modelo SET id_Marca = ".$id_Marca.", nome = '".$nome."'");
		}

        public function delete()
        {
			$this->mySQL->connect();
            $deleteModelo = $mySQL -> executeQuery("DELETE FROM Modelo WHERE id = ".$id."");   
		}

        public function select()
        {
			$this->mySQL->connect();
			$selectModelo = $mySQL->executeQuery("SELECT * FROM Modelo WHERE id_Marca = ".$id_Marca." AND nome = '".$nome."'");
			return($selectModelo);
		}
    }

?>
