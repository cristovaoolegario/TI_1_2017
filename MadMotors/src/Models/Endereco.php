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
        
        private static $mySQL;

        public function __construct()
        {
            
        }

        public static function insert()
        {
            $mySQL = new MySQL;
            $mySQL->connect();
            $insereEndereco = $mySQL->executaQuery("INSERT INTO `endereco` (`cep`,`rua`,`bairro`,`numero`,`cidade`,`estado`,`pais`) VALUES ('".$cep."','".$rua."','".$bairro."',".$numero.",'".$cidade."','".$estado."','".$pais."');");
        }

        public static function update()
        {
            $mySQL = new MySQL;
            $mySQL->connect();
            $insereEndereco = $mySQL->executaQuery("UPDATE Endereco SET cep = ".$cep.", rua = '".$rua."', bairro = '".$bairro."', numero = ".$numero.", cidade = '".$cidade."', estado = '".$estado."', pais = '".$pais."' WHERE id = ".$id."");
        }

        public static function delete()
        {
            $mySQL = new MySQL;
            $mySQL->connect();
            $deleteEndereco = $mySQL->executeQuery("DELETE FROM Endereco WHERE id = ".$id."");
        }

        public static function select()
        {
            $mySQL = new MySQL;
            $selectEndereco = "SELECT * FROM Endereco ";

            $mySQL->connect();

            if (!empty($id))
            {
                $selectEndereco .= "WHERE id = ".$id." ";
            }

            $result = $mySQL->executeQuery($selectEndereco);
            return($result);
        }

    }

?>
