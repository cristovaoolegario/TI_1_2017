<?php

    include('IModelo.php');
    include('MySQL.php');

    class Modelo implements IModelo
    {
		public $id_Modelo;
        public $id_Marca;
        public $nomeModelo;
        
        private static $mySQL;

        public function __construct()
        {
           $count = func_num_args();
           
		   if($count != 2) 
		   {				
			   echo "Número de parâmetros Incorreto";			   
		   }		   
		   if ($count == 2) 
		   {
				list($id__Marca, $nomeModelo) = func_get_args();

				$this->id_Marca = $id_Marca;
				$this->nomeModelo = $nomeModelo;			
		   }
        }

        public function insert()
        {
            $mySQL = new MySQL;
            $mySQL->connect();
            $insereModelo = $mySQL->executeQuery("INSERT INTO modelo(id_Marca,nomeModelo) VALUES(".$id_Marca.",'".$nomeModelo."');");
        }

        public function update()
        {			
		   $count = func_num_args();
           
			if ($count == 1)
			{
				$novonomeModelo = func_get_arg(0);
				$mySQL = new MySQL;
				$mySQL->connect();
				$updateModelo = $mySQL->executeQuery("UPDATE modelo SET nomeModelo = '".$novonomeModelo."' WHERE nomeModelo = '".$nomeModelo."'");
			}
        }

        public function delete()
        {
            $mySQL = new MySQL;
            $mySQL->connect();
            $deleteModelo = $mySQL->executeQuery("DELETE FROM Modelo WHERE id = ".$id_Modelo."");
        }

        public function select()
        {
            $mySQL = new MySQL;
            $selectModelo = "SELECT * FROM Modelo ";

            $mySQL->connect();

            if (!empty($id_Modelo))
            {
                $selectModelo .= "WHERE id = ".$id_Modelo." ";
            }

            $result = $mySQL->executeQuery($selectModelo);
            return($result);
        }

    }

?>
