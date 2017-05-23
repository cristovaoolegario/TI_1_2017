<?php
include('IModelo.php');
include('Endereco.php');
include('MySQL.php');

class Usuario
{
/*Serão cadastrados em Usuário*/
	$nome
	$sexo
	$dtNascimento
	$rg
	$nacionalidade
	$naturalidade
	$email
	$foto
	$telefone1
	$telefone2
	$idEndereco

	public function __construct()
	{
		$mySQL = new MySQL;
	}

	public function insert()
	{
		/*Insere no banco o usuario fornecido*/
		 $insereUsuario = $mySQL -> executaQuery("INSERT INTO `usuario` (`nome`,`sexo`,`dtNascimento`,`rg`,`nacionalidade`,`naturalidade`,`email`,`foto`,`telefone1`,`telefone2`,`id_Endereco`) VALUES (".$nome.",".$sexo.",".$dtNascimento.",".$rg.",".$nacionalidade.","$naturalidade",".$email.","1",".$telefone1.",".$telefone2.",".$idEndereco.");");
	}

	public function update();
	public function delete();
	public function select();
}
?>
