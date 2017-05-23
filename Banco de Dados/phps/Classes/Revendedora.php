<?php
include('IModelo.php');
include('Usuario.php');

class Revendedora implements IModelo
{
	$cnpj;
	$telefone1;
	$telefone2;
	$razaoSocial;
	$email;
	$banner;
	$id_Usuario;
	$id_Endereco;

	public function __construct()
	{
		/*Nova conexão MySQL*/
		 $mySQL = new MySQL;
	}
	
	public function insert()
	{
		 /*Insere no banco a revendedora fornecida*/
		 $insereRevendedora = $mySQL -> executaQuery("INSERT INTO `revendedora` (`cnpj`,`telefone1`,`telefone2`,`razaoSocial`,`email`,`banner`,`id_Usuario`,`id_Endereco`) VALUES (".$cnpj.",".$telefone1.",".$telefone2.",".$razaoSocial.",".$email.",".$banner.",".$id_Usuario.",".$id_Endereco.");");
	}


	public function update();
	public function delete();
	public function select();

}
?>
