<?php

    include_once "IModelo.php";
    include_once "Endereco.php";
    include_once "Anuncio.php";
    include_once "MySQL.php";

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
            $count = func_num_args();
            
            if ($count == 0)
            {
                
            }
            else if ($count != 11)
            {
                echo "Número de parâmetros Incorreto";
            }
            else
            {
                list($nome, $sexo, $dtNascimento, $rg, $nacionalidade, $naturalidade, $email, $foto, $telefone1, $telefone2, $idEndereco) = func_get_args();
                $this->nome = $nome;
                $this->sexo = $sexo;
                $this->dtNascimento = $dtNascimento;
                $this->rg = $rg;
                $this->nacionalidade = $nacionalidade;
                $this->naturalidade = $naturalidade;
                $this->email = $email;
                $this->foto = $foto;
                $this->telefone1 = $telefone1;
                $this->telefone2 = $telefone2;
                $this->idEndereco = $idEndereco;
            }
        }

        public function insert()
        {
            $mySQL = new MySQL;
            $mySQL->connect();
            $insereUsuario = $mySQL->executeQuery("INSERT INTO 'Usuario'('nome','sexo','dtNascimento','rg','nacionalidade','naturalidade','email','foto','telefone1','telefone2','id_Endereco') VALUES ('".$nome."','".$sexo."',".$dtNascimento.",'".$rg."','".$nacionalidade."','".$naturalidade."','".$email."',1,".$telefone1.",".$telefone2.",".$idEndereco.");");
        }

        public function update()
        {
            $mySQL = new MySQL;
            $mySQL->connect();
            $updateModelo = $mySQL->executeQuery("UPDATE Usuario SET  nome =  '".$nome."', sexo = '".$sexo."', dtNascimento = ".$dtNascimento.", rg = '".$rg."', nacionalidade = '".$nacionalidade."', naturalidade = '".$naturalidade."', email = '".$email."', foto = ".$foto.", telefone1 = ".$telefone1.", telefone2 = ".$telefone2.", id_Endereco = ".$id_Endereco." WHERE id = ".$id."");
        }

        public function delete()
        {
            $mySQL = new MySQL;
            $mySQL->connect();
            $deleteModelo = $mySQL->executeQuery("DELETE FROM Usuario WHERE id = ".$id."");
        }

        public function select()
        {
            $selectUsuario = "SELECT * FROM Usuario ";

            $mySQL = new MySQL;
            $mySQL->connect();

            if (!empty($id))
            {
                $selectUsuario .= "WHERE id = ".$id." ";
            }

            $result = $mySQL->executeQuery($selectUsuario);
            return($result);
        }
              
        public static function select_by_name($name)
        {
            $selectUsuario = "SELECT * FROM Usuario WHERE nomeUsuario = '".$name."'";
            
            $mySQL = new MySQL;
            $mySQL->connect();
                        
            $result = $mySQL->executeQuery($selectUsuario);
            return($result);
        }

        public function creatAnuncio()
        {
            //Anuncio::insert();
        }

    }
?>
