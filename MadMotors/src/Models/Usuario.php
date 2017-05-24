<?php

    include('IModelo.php');
    include('Endereco.php');
    include('MySQL.php');

    class Usuario
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

        public function __construct()
        {
            
        }

        public function insert()
        {
            $mySQL = new MySQL();
            /* Insere no banco o usuario fornecido */
            $insereUsuario = $mySQL->executaQuery("INSERT INTO 'usuario'('nome','sexo','dtNascimento','rg','nacionalidade','naturalidade','email','foto','telefone1','telefone2','id_Endereco') VALUES (" . $nome . "," . $sexo . "," . $dtNascimento . "," . $rg . "," . $nacionalidade . "," . $naturalidade . "," . $email . ",1," . $telefone1 . "," . $telefone2 . "," . $idEndereco . ");");
        }

        public function update();

        public function delete();

        public function select();
    }

?>
