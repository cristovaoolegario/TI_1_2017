<?php

    //include('IModelo.php');
    include('MySQL.php');

    class Marca //implements IModelo
    {
        public $nome;
        private static $mySQL;

        public function __construct()
        {
            $mySQL = new MySQL;
        }

        public static function insert()
        {
            
        }

        public static function update()
        {
            
        }

        public static function delete()
        {
            
        }

        public static function select()
        {
            $mySQL = new MySQL;
            $response = $mySQL->executeQuery("Select * from Marca");
            return $response;
        }
    }
?>
