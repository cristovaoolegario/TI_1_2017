<?php

$idUsuarioAtual /*---> id do usuario logado na sessão*/

/*Objetos da tela*/
/*Serão cadastrados em Revendedora*/
$cnpj
$telefone1
$telefone2
$razaoSocial
$email
$banner

	/*Serão pesquisados no BD antes de cadastrar*/
	$id_Usuario = $idUsuarioAtual;
	$id_Endereco

/*Nova conexão MySQL*/
 $mySQL = new MySQL;

/*Retorna o id do endereço do usuário*/
 $id_Endereco = $mySQL -> executaQuery("SELECT end.id 
					FROM endereco end INNER JOIN usuario us
					 ON end.id = us.id_Endereco
					WHERE us.id = ".$idUsuarioAtual.";");

 /*Insere no banco a revendedora fornecida*/
 $insereRevendedora = $mySQL -> executaQuery("INSERT INTO `revendedora` (`cnpj`,`telefone1`,`telefone2`,`razaoSocial`,`email`,`banner`,`id_Usuario`,`id_Endereco`) VALUES (".$cnpj.",".$telefone1.",".$telefone2.",".$razaoSocial.",".$email.",".$banner.",".$id_Usuario.",".$id_Endereco.");");



?>
