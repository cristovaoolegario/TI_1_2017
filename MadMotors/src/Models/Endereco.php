<?php

    include_once "IModelo.php";
    include_once "MySQL.php";

    class Endereco implements IModelo
    {
        /* Serão cadastrados em endereço */

        public $cep;
        public $rua;
        public $bairro;
        public $numero;
        public $cidade;
        public $estado;
        public $pais;
        private static $mySQL;

        public function __construct()
        {
            $count = func_num_args();

            if ($count == 0)
            {
                
            }
            else if ($count != 7)
            {
                
            }
            else
            {
                list($cep, $rua, $bairro, $numero, $cidade, $estado, $pais) = func_get_args();

                $this->cep = $cep;
                $this->rua = $rua;
                $this->bairro = $bairro;
                $this->numero = $numero;
                $this->cidade = $cidade;
                $this->estado = $estado;
                $this->pais = $pais;
            }
        }

        public function insert()
        {
            $mySQL = new MySQL;
            $mySQL->connect();
            $insereEndereco = $mySQL->executaQuery("INSERT INTO `endereco` (`cep`,`rua`,`bairro`,`numero`,`cidade`,`estado`,`pais`) VALUES ('".$cep."','".$rua."','".$bairro."',".$numero.",'".$cidade."','".$estado."','".$pais."');");
        }

        public function update()
        {
            $mySQL = new MySQL;
            $mySQL->connect();
            $insereEndereco = $mySQL->executaQuery("UPDATE Endereco SET cep = ".$cep.", rua = '".$rua."', bairro = '".$bairro."', numero = ".$numero.", cidade = '".$cidade."', estado = '".$estado."', pais = '".$pais."' WHERE id_Endereco = ".$id."");
        }

        public function delete()
        {
            $mySQL = new MySQL;
            $mySQL->connect();
            $deleteEndereco = $mySQL->executeQuery("DELETE FROM Endereco WHERE id_Endereco = ".$id."");
        }

        public function select()
        {
            $mySQL = new MySQL;
            $selectEndereco = "SELECT * FROM Endereco ";

            $mySQL->connect();

            if (!empty($id))
            {
                $selectEndereco .= "WHERE id_Endereco = ".$id." ";
            }

            $result = $mySQL->executeQuery($selectEndereco);
            return($result);
        }

    }

?>
