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
           $count = func_num_args();
           
		   if ($count != 2) 
		   {				
				echo "Número de parâmetros Incorreto";
		   }		   
		   if ($count == 2) 
		   {

				list($id_Marca, $nome_Marca) = func_get_args();

				$this->id_Marca = $id_Marca;
				$this->nome_Marca = $nome_Marca;			
		   }
        }       

        public function insert()
        {
            $mySQL = new MySQL;
            $mySQL->connect();
            $insertMarca = $mySQL->executeQuery("INSERT INTO Marca(nomeMarca) VALUES('".$nome_Marca."')");
        }

        public function update()
        {
			$count = func_num_args();
           
		   if ($count == 1) 
		   {
			$novo_nome_Marca = func_get_arg(0);
			$mySQL = new MySQL;
            $mySQL->connect();
            $updateMarca = $mySQL->executeQuery("UPDATE Marca SET nomeMarca = ".$novo_nome_Marca." WHERE id_Marca = ".$id_Marca."");				
		   }            
        }

        public function delete()
        {
            $mySQL = new MySQL;
            $mySQL->connect();
            $deleteMarca = $mySQL->executeQuery("DELETE FROM Marca WHERE id_Marca = ".$id_Marca."");
        }

        public function select()
        {
            $selectMarca = "SELECT * FROM Marca";
            $mySQL = new MySQL;
            $mySQL->connect();

            if (!empty($id_Marca))
            {
                $selectMarca .= "WHERE id = ".$id_Marca." ";
            }

            $result = $mySQL -> executeQuery($selectMarca);
            return($result);
        }

    }

?>
