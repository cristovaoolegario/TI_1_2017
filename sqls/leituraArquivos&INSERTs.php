<?php
//ABRE O ARQUIVO DE MARCAS
$arquivo = fopen ("marcas.csv","r");

//LÊ O ARQUIVO ATÉ CHEGAR AO FIM
while (!feof($arquivo))
{
  //LÊ UMA LINHA DO ARQUIVO
  $linha = fgets($arquivo,1024);
  //SEPARA OS DADOS DO ARQUIVO
  list ($idMarca, $nomeMarca) = split (';', $linha);
  //CRIA O INSERT PARA O BANCO DE DADOS
  $insertMarcas = "INSERT INTO Marca VALUES (".$idMarca.",'".$nomeMarca."');";
  //FALTA MANDAR O $insert INSERIR NO BANCO
}//FECHA WHILE

//FECHA O PONTEIRO DO ARQUIVO
fclose ($arquivo);

//---------------------------------------------------------------------------------------

//ABRE O ARQUIVO DE MODELOS
$arquivo = fopen ("modelos.csv","r");

//LÊ O ARQUIVO ATÉ CHEGAR AO FIM
while (!feof($arquivo))
{
  //LÊ UMA LINHA DO ARQUIVO
  $linha = fgets($arquivo,1024);
  //SEPARA OS DADOS DO ARQUIVO
  list ($idModelo, $idMarca, $nomeModelo) = split (';', $linha);
  //CRIA O INSERT PARA O BANCO DE DADOS
  $insertModelo = "INSERT INTO Modelo VALUES (".$idModelo.",".$idMarca.",'".$nomeModelo."');";
  //FALTA MANDAR O $insert INSERIR NO BANCO
}//FECHA WHILE

//FECHA O PONTEIRO DO ARQUIVO
fclose ($arquivo);
?> 
