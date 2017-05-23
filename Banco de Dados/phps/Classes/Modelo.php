<?php
include('IModelo.php');

class Modelo implements IModelo
{	
	$id_Marca;
	$nome;

	public function __construct()
	{
		 $mySQL = new MySQL;
	}

	public function insert()
	{
		

		 $insereModelo = $mySQL -> executaQuery("INSERT INTO modelo(id_Marca,nome) VALUES(".$id_Marca.",".$nome.");");
	}
	public function update();
	public function delete();
	public function select();
}
?>
