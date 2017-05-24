<?php
include('IModelo.php');
include('MySQL.php');

class Marca implements IModelo
{	
	$nome

	public function __construct()
	{
		 $mySQL = new MySQL;
	}

	public function insert()
	{
		$insereMarca = $mySQL -> executaQuery("INSERT INTO marca(nome) VALUES(".$nome.");");
	}
	public function update();
	public function delete();
	public function select();
}
?>
