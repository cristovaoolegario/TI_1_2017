<?php

    include('IModelo.php');
    include('MySQL.php');

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
        private $mySQL;

        public function __construct()
        {
            /* Nova conexão MySQL */
            $mySQL = new MySQL;
        }

        public static function insert()
        {
            /* Insere no banco o endereço fornecido */
            $this->mySQL->connect();
            $insereEndereco = $mySQL->executaQuery("INSERT INTO `endereco` (`cep`,`rua`,`bairro`,`numero`,`cidade`,`estado`,`pais`) VALUES ('".$cep."','".$rua."','".$bairro."',".$numero.",'".$cidade."','".$estado."','".$pais."');");
        }

        public static function update()
        {
            $this->mySQL->connect();
            $insereEndereco = $mySQL->executaQuery("UPDATE Endereco SET cep = ".$cep.", rua = '".$rua."', bairro = '".$bairro."', numero = ".$numero.", cidade = '".$cidade."', estado = '".$estado."', pais = '".$pais."' WHERE id = ".$id."");
        }

        public static function delete()
        {
            $this->mySQL->connect();
            $deleteEndereco = $mySQL->executeQuery("DELETE FROM Endereco WHERE id = ".$id."");
        }

        public static function select()
        {
            $selectEndereco = "SELECT * FROM Endereco ";

            $this->mySQL->connect();

            if (!empty($id))
            {
                $selectEndereco .= "WHERE id = ".$id." ";
            }

            $result = $mySQL->executeQuery($selectEndereco);
            return($result);
        }

    }

?>
