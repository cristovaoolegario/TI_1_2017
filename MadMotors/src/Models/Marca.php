<?php

    include('IModelo.php');
    include('MySQL.php');

    class Marca implements IModelo
    {

        public $id;
        public $nome;
        private static $mySQL;

        public function __construct()
        {
            
        }

        public static function insert()
        {
            $mySQL = new MySQL;
            $mySQL->connect();
            $insertMarca = $mySQL->executeQuery("INSERT INTO Marca(nome) VALUES('".$nome."')");
        }

        public static function update()
        {
            $mySQL = new MySQL;
            $mySQL->connect();
            $updateMarca = $mySQL->executeQuery("UPDATE Marca SET nome = ".$nome." WHERE id = ".$id."");
        }

        public static function delete()
        {
            $mySQL = new MySQL;
            $mySQL->connect();
            $deleteMarca = $mySQL->executeQuery("DELETE FROM Marca WHERE id = ".$id."");
        }

        public static function select()
        {
            $selectMarca = "SELECT * FROM Marca";
            $mySQL = new MySQL;
            $mySQL->connect();
/*
            if (!empty($id))
            {
                $selectMarca .= "WHERE id = ".$id." ";
            }*/

            $result = $mySQL -> executeQuery($selectMarca);
            return($result);
        }

    }

?>
