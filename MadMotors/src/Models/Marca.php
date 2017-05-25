<?php

    //include('IModelo.php');
    include('MySQL.php');

    class Marca //implements IModelo
    {

        public $id;
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
			$this->mySQL->connect();
            $deleteEndereco = $mySQL -> executeQuery("DELETE FROM Marca WHERE id = ".$id."");   
		}
		
		public function select()
        {
            $mySQL = new MySQL;
            $response = $mySQL->executeQuery("Select * from Marca");
            return $response;
        }
    }
?>
