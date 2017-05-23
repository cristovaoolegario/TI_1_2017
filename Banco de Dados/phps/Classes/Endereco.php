<?php
include('IModelo.php');

class Endereco implements IModelo
{
/*Serão cadastrados em endereço*/
	$cep
	$rua
	$bairro
	$numero
	$cidade
	$estado
	$pais

	public function __construct()
	{
		/*Nova conexão MySQL*/
		 $mySQL = new MySQL;
	}

	public function insert()
	{
		/*Insere no banco o endereço fornecido*/
		 $insereEndereco = $mySQL -> executaQuery("INSERT INTO `endereco` (`cep`,`rua`,`bairro`,`numero`,`cidade`,`estado`,`pais`) VALUES (".$cep.",".$rua.",".$bairro.",".$numero.",".$cidade.",".$estado.",".$pais.");");
	}
	public function update();
	public function delete();
	public function select();
}
?>
