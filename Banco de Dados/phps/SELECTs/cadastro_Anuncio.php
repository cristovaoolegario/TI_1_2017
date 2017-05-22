<?php
$idUsuarioAtual /*---> id do usuario logado na sessão*/

/*Objetos da tela*/
/*Serão cadastrados em Anuncio*/

/*Selects*/
$marca
$modelos

/*Texts*/
$estado
$ano
$cor
$numPortas
$quilometragem
$cambio
$combustivel
$finalPlaca
$carroceria
$dtAnuncio
$preco

/*Armazenam o valor selecionado nos selects*/
$marcaSelecionada
$modeloSelecionado

	/*Serão pesquisados no BD antes de cadastrar*/
	$id_Endereco
	$id_modelo
	$id_Usuario = $idUsuarioAtual;
	


/*Botões*/
$btnCancelar
$btnCadastrarAnuncio


/*Deveria ter(segundo as telas V2 ---> 
$comentariosAdicionais
$opcionais
*/




/*Nova conexão MySQL*/
 $mySQL = new MySQL;

/*Retorna todas as marcas, para o select de marcas*/
 $marca = $mySQL -> executaQuery("SELECT ma.nome
				  FROM Marca ma;");

 /*Retorna os modelos de veículos para o select de modelos, de acordo com a marca selecionada*/
 $modelos = $mySQL -> executaQuery("SELECT mo.nome
				     FROM Modelo mo LEFT JOIN Marca ma
					ON mo.idMarca = ma.idMarca
				     WHERE(ma.nome = ".$marcaSelecionada.");");

 /*Retorna o id do endereço do usuário*/
 $id_Endereco = $mySQL -> executaQuery("SELECT id 
					FROM endereco end INNER JOIN usuario us
					 ON end.id = us.id_Endereco
					WHERE us.id = ".$idUsuarioAtual.";");
 /*Retorna o id do Modelo selecionado*/
 $id_Modelo = $mySQL -> executaQuery("SELECT mo.id
				     FROM Modelo mo
				     WHERE(mo.nome = ".$modeloSelecionado.");")
 
 /*Insere no banco o anuncio fornecido*/
 $insereAnuncio = $mySQL -> executaQuery("INSERT INTO `anuncio` (`estadoVeiculo`,`ano`,`cor`,`numeroPortas`,`quilometragem`,`cambio`,`combustivel`,`finalPlaca`,`tipoCarroceria`,`dataAnuncio`,`id_Endereco`,`id_Modelo`,`id_Usuario`,`preco`) VALUES (".$estado.",".$ano.",".$cor",".$numPortas.",".$quilometragem",".$cambio.",".$combustivel.",".$finalPlaca.",".$carroceria.",".$dtAnuncio.",".$id_Endereco.",".$id_Modelo.",".$id_Usuario.",".$preco.");");
?>
