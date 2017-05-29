<?php

    include('IModelo.php');
    include('Endereco.php');
    include ('Anuncio.php');
    include('MySQL.php');

    class Usuario implements IModelo
    {
        /* Serão cadastrados em Usuário */

        public $nome;
        public $sexo;
        public $dtNascimento;
        public $rg;
        public $nacionalidade;
        public $naturalidade;
        public $email;
        public $foto;
        public $telefone1;
        public $telefone2;
        public $idEndereco;
        private $mySQL;

        public function __construct()
        {
            
        }
        
        /*public function __construct( $nome, $sexo, $dtNascimento, $rg, $nacionalidade, $naturalidade, $email, $telefone1, $telefone2, $idEndereco)
        {
			$mySQL = new MySQL;
			$this -> nome  = $nome;
			$this -> sexo = $sexo;
			$this -> dtNascimento = $dtNascimento;
			$this -> rg = $rg;
			$this -> nacionalidade = $nacionalidade;
			$this -> naturalidade = $naturalidade;
			$this -> email = $email;
			$this -> telefone1 = $telefone1;
			$this -> telefone2 = $telefone2;
			$this -> idEndereco = $idEndereco;
		}*/

        public static function insert()
        {
			$mySQL = new MySQL;
            $mySQL->connect();
            $insereUsuario = $mySQL->executeQuery("INSERT INTO 'Usuario'('nome','sexo','dtNascimento','rg','nacionalidade','naturalidade','email','foto','telefone1','telefone2','id_Endereco') VALUES ('" . $nome . "','" . $sexo . "'," . $dtNascimento . ",'" . $rg . "','" . $nacionalidade . "','" . $naturalidade . "','" . $email . "',1," . $telefone1 . "," . $telefone2 . "," . $idEndereco . ");");
        }
        public static function update()
        {
			$mySQL = new MySQL;
            $mySQL->connect();
			$updateModelo = $mySQL->executeQuery("UPDATE Usuario SET  nome =  '".$nome."', sexo = '".$sexo."', dtNascimento = ".$dtNascimento.", rg = '".$rg."', nacionalidade = '".$nacionalidade."', naturalidade = '".$naturalidade."', email = '".$email."', foto = ".$foto.", telefone1 = ".$telefone1.", telefone2 = ".$telefone2.", id_Endereco = ".$id_Endereco." WHERE id = ".$id."");
		}

        public static function delete()
        {
			$mySQL = new MySQL;
            $mySQL->connect();
			$deleteModelo = $mySQL->executeQuery("DELETE FROM Usuario WHERE id = ".$id."");
		}

        public static function select()
        {			
			$selectUsuario = "SELECT * FROM Usuario ";
			
			$mySQL = new MySQL;
            $mySQL->connect();
			
			if(!empty($id))
			{
				$selectUsuario .= "WHERE id = ".$id." ";				
			}
			
			$result = $mySQL -> executeQuery($selectUsuario);
			return($result);			
		}
		
		public function creatAnuncio()
        {
			//Anuncio::insert();
		}
    }

?>
