<?php

    include('IModelo.php');
    include('MySQL.php');

    class Marca implements IModelo
    {

        public $id_Marca;
        public $nome_Marca;
        private static $mySQL;

        public function __construct()
        {
            
        }

        public static function insert()
        {
            $mySQL = new MySQL;
            $mySQL->connect();
            $insertMarca = $mySQL->executeQuery("INSERT INTO Marca(nomeMarca) VALUES('".$nome_Marca."')");
        }

        public static function update()
        {
            $mySQL = new MySQL;
            $mySQL->connect();
            $updateMarca = $mySQL->executeQuery("UPDATE Marca SET nomeMarca = ".$nome_Marca." WHERE id_Marca = ".$id_Marca."");
        }

        public static function delete()
        {
            $mySQL = new MySQL;
            $mySQL->connect();
            $deleteMarca = $mySQL->executeQuery("DELETE FROM Marca WHERE id_Marca = ".$id_Marca."");
        }

        public static function select()
        {
            $selectMarca = "SELECT * FROM Marca";
            $mySQL = new MySQL;
            $mySQL->connect();
/*
            if (!empty($id_Marca))
            {
                $selectMarca .= "WHERE id = ".$id_Marca." ";
            }*/

            $result = $mySQL -> executeQuery($selectMarca);
            return($result);
        }

    }

?>
