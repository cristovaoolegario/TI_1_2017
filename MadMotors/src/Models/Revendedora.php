<?php

    include('IModelo.php');
    include('Usuario.php');
    include('MySQL.php');

    class Revendedora implements IModelo
    {

        public $cnpj;
        public $telefone1;
        public $telefone2;
        public $razaoSocial;
        public $email;
        public $banner;
        public $id_Usuario;
        public $id_Endereco;

        public function __construct()
        {
            /* Nova conexão MySQL */
            $mySQL = new MySQL;
        }

        public function insert()
        {
            /* Insere no banco a revendedora fornecida */
            $insereRevendedora = $mySQL->executaQuery("INSERT INTO `revendedora` (`cnpj`,`telefone1`,`telefone2`,`razaoSocial`,`email`,`banner`,`id_Usuario`,`id_Endereco`) VALUES (" . $cnpj . "," . $telefone1 . "," . $telefone2 . "," . $razaoSocial . "," . $email . "," . $banner . "," . $id_Usuario . "," . $id_Endereco . ");");
        }

        public function update();

        public function delete();

        public function select();
    }

?>
