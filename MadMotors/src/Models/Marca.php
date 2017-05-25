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
            $mySQL = new MySQL;
        }

        public static function insert()
        {
            $this->mySQL->connect();
            $insertMarca = $mySQL -> executeQuery("INSERT INTO Marca(nome) VALUES('".$nome."')");        
        }

        public static function update()
        {
            $this->mySQL->connect();
            $updateMarca = $mySQL -> executeQuery("UPDATE Marca SET nome = ".$nome." WHERE id = ".$id."");
        }

        public static function delete()
        {
			$this->mySQL->connect();
            $deleteMarca = $mySQL -> executeQuery("DELETE FROM Marca WHERE id = ".$id."");   
		}
		
		public function select()
        {
            $selectMarca  = "SELECT * FROM Marca ";
			
			$this->mySQL->connect();
			
			if(!empty($id))
			{
				$selectMarca  .= "WHERE id = ".$id." ";				
			}
			
			$mySQL -> executeQuery($selectMarca);
			return($mySQL);
        }
    }
?>
