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

        public function __construct()
        {
            /* Nova conexão MySQL */
            $mySQL = new MySQL;
        }

        public function insert()
        {
            /* Insere no banco o endereço fornecido */
            $insereEndereco = $mySQL->executaQuery("INSERT INTO `endereco` (`cep`,`rua`,`bairro`,`numero`,`cidade`,`estado`,`pais`) VALUES (" . $cep . "," . $rua . "," . $bairro . "," . $numero . "," . $cidade . "," . $estado . "," . $pais . ");");
        }

        public function update();

        public function delete();

        public function select();
    }

?>
