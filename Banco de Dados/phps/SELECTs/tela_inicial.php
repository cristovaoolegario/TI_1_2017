<?php

/*Objetos da tela*/
$marca
$modelos
$preco
$ano
$btnLogin
$btnCadastro
$btnPesquisar


 /*Marca selecionada no select de marcas*/
 $marcaSelecionada 
 /*Modelo selecionado no select de modelos*/
 $modeloSelecionado
 /*Intervalo de preço selecionado no slider de modelo*/
 $intervaloPreco
 /*Intervalo de anos selecionado no slider de anos*/
 $intervaloAno
 
 
 /*Nova conexão MySQL*/
 $mySQL = new MySQL;

 /*Retorna todas as marcas, para o select de marcas*/
 $marca = $mySQL -> executaQuery("SELECT ma.nome
				  FROM Marca ma;");

 /*Retorna os modelos de veículos para o select de modelos, de acordo com a marca selecionada*/
 $modelos = $mySQL -> executaQuery("SELECT mo.nome
				     FROM Modelo mo INNER JOIN Marca ma
					ON mo.idMarca = ma.idMarca
				     WHERE(ma.nome = ".$marcaSelecionada.");");

 /*Retorna os veículos que se encaixam na pesquisa */
 $veiculosResult = $mySQL -> executaQuery("Select *
					   FROM Anuncio an LEFT JOIN Modelo mo
						ON an.id_Modelo = mo.id
					   WHERE((an.preço BETWEEN ".$intervaloPreco[0]." AND ".$intervaloPreco[1].") AND (an.ano BETWEEN 						   ".$intervaloAno[0]." AND ".$intervaloAno[1]."));";
 



?>
