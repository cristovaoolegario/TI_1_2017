<?php

/*Objetos da tela*/
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
$idEndereco  /*<-------- vincular com o retorno da inserção do endereço*/

/*Serão cadastrados em endereço*/
$cep
$rua
$bairro
$numero
$cidade
$estado
$pais

/*Nova conexão MySQL*/
 $mySQL = new MySQL;

 /*Insere no banco o endereço fornecido*/
 $insereEndereco = $mySQL -> executaQuery("INSERT INTO `endereco` (`cep`,`rua`,`bairro`,`numero`,`cidade`,`estado`,`pais`) VALUES (".$cep.",".$rua.",".$bairro.",".$numero.",".$cidade.",".$estado.",".$pais.");");

 /*Recupera o id do endereco cadastrado*/
  $idEndereco /*------> temos que recuperar essa variável depois da inserção do endereço para que possamos inserir o usuário*/


 /*Insere no banco o usuario fornecido*/
 $insereUsuario = $mySQL -> executaQuery("INSERT INTO `usuario` (`nome`,`sexo`,`dtNascimento`,`rg`,`nacionalidade`,`naturalidade`,`email`,`foto`,`telefone1`,`telefone2`,`id_Endereco`) VALUES (".$nome.",".$sexo.",".$dtNascimento.",".$rg.",".$nacionalidade.","$naturalidade",".$email.","1",".$telefone1.",".$telefone2.",".$idEndereco.");");


 



?>
