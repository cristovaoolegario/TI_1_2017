<?php

    include('IModelo.php');
    include('Usuario.php');
    include('MySQL.php');

    class Revendedora implements IModelo
    {
		public $id;
        public $cnpj;
        public $telefone1;
        public $telefone2;
        public $razaoSocial;
        public $email;
        public $banner;
        public $id_Usuario;
        public $id_Endereco;
        private $mySQL;

        public function __construct()
        {
            /* Nova conexão MySQL */
            $mySQL = new MySQL;
        }

        public function insert()
        {
            /* Insere no banco a revendedora fornecida */
            $this->mySQL->connect();
            $insereRevendedora = $mySQL->executaQuery("INSERT INTO `revendedora` (`cnpj`,`telefone1`,`telefone2`,`razaoSocial`,`email`,`banner`,`id_Usuario`,`id_Endereco`) VALUES (" . $cnpj . "," . $telefone1 . "," . $telefone2 . "," . $razaoSocial . "," . $email . "," . $banner . "," . $id_Usuario . "," . $id_Endereco . ");");
        }

        public function update()
        {
			$this->mySQL->connect();
			//Deu preguiça de terminar esse daqui:
			//$updateRevendedora = $mySQL->executeQuery();
		}

        public function delete()
        {
			$this->mySQL->connect();
            $deleteRevendedora = $mySQL -> executeQuery("DELETE FROM Revendedora WHERE id = ".$id."");   
		}

        public function select()
        {
			$selectRevendedora  = "SELECT * FROM Revendedora ";
			
			$this->mySQL->connect();
			
			if(!empty($id))
			{
				$selectRevendedora  .= "WHERE id = ".$id." ";
				
			}
			
			$mySQL -> executeQuery($selectRevendedora);
			
		}
    }

?>
