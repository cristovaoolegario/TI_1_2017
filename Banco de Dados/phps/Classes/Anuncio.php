<?php
include('IModelo.php');

class Anuncio implements IModelo
{
	$estado;
	$ano;
	$cor;
	$numPortas;
	$quilometragem;
	$cambio;
	$combustivel;
	$finalPlaca;
	$carroceria;
	$dtAnuncio;
	$id_Endereco;
	$id_Modelo;
	$id_Usuario;
	$preco;

	public function __construct()
	{
		/*Nova conexão MySQL*/
		 $mySQL = new MySQL;
	}

	public function insert()
	{
		/*Insere no banco o anuncio fornecido*/
		 $insereAnuncio = $mySQL -> executaQuery("INSERT INTO `anuncio`  (`estadoVeiculo`,`ano`,`cor`,`numeroPortas`,`quilometragem`,`cambio`,`combustivel`,`finalPlaca`,`tipoCarroceria`,`dataAnuncio`,`id_Endereco`,`id_Modelo`,`id_Usuario`,`preco`) VALUES (".$estado.",".$ano.",".$cor",".$numPortas.",".$quilometragem",".$cambio.",".$combustivel.",".$finalPlaca.",".$carroceria.",".$dtAnuncio.",".$id_Endereco.",".$id_Modelo.",".$id_Usuario.",".$preco.");");
	}
	public function update();
	public function delete();
	public function select();
}
?>
