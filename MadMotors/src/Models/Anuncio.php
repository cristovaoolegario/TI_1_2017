<?php

    include('IModelo.php');
    include('MySQL.php');

    class Anuncio implements IModelo
    {

        public $id
        public $estado;
        public $ano;
        public $cor;
        public $numPortas;
        public $quilometragem;
        public $cambio;
        public $combustivel;
        public $finalPlaca;
        public $carroceria;
        public $dtAnuncio;
        public $id_Endereco;
        public $id_Modelo;
        public $id_Usuario;
        public $preco;
        private $mySQL;

        public function __construct()
        {
            /* Nova conexão MySQL */
            $mySQL = new MySQL;
        }

        public function insert()
        {
            $this->mySQL->connect();
            $insereAnuncio = $mySQL -> executeQuery("INSERT INTO anuncio  (`estadoVeiculo`,`ano`,`cor`,`numeroPortas`,`quilometragem`,`cambio`,`combustivel`,`finalPlaca`,`tipoCarroceria`,`dataAnuncio`,`id_Endereco`,`id_Modelo`,`id_Usuario`,`preco`) VALUES ('".$estado."',".$ano.",'".$cor"',".$numPortas.",".$quilometragem",'".$cambio."','".$combustivel."','".$finalPlaca."','".$carroceria."',".$dtAnuncio.",".$id_Endereco.",".$id_Modelo.",".$id_Usuario.",".$preco.");");
        }

        public function update()
        {
			$this->mySQL->connect();
            $updateAnuncio = $mySQL -> executeQuery("UPDATE Anuncio SET estadoVeiculo = ".$estado.", ano = ".$ano.", cor = ".$cor", numeroPortas = ".$numPortas.", quilometragem = ".$quilometragem.", cambio = ".$cambio.", combustivel = ".$combustivel.", finalPlaca = ".$finalPlaca.", tipoCarroceria = ".$carroceria.", dataAnuncio = ".$dtAnuncio." WHERE id = ".$id."");
        }

        public function delete()
        {
            $this->mySQL->connect();
            $deleteAnuncio = $mySQL -> executeQuery("DELETE FROM Anuncio WHERE id = ".$id."");   
        }

        public function select()
        {
            $this->mySQL->connect();
            $selectAnuncio = $mySQL -> executeQuery("SELECT * FROM Anuncio");
        }
    }

?>
