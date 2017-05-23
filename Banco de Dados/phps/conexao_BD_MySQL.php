<?php
class MySQL
{
 var $host = "pucsi.mysql.database.azure.com";
 var $user = "usuario_rale";
 var $password = "Sistemas123";
 var $database = "ti_testes";
 
 var $query;
 var $link;
 var $result;

 function MySQL()
 {

 }

 function connect()
 {
  $this -> link = mysql_connect($this -> host,$this -> user,$this -> password);
  if(!$this -> link)
  {
   echo "Falha na conexao com o Banco de Dados!<br/>";
   echo "Erro: " .mysql_error();
   die();
  }
  elseif(!mysql_select_db($this -> database, $this -> link))
  {
   echo "O Banco de Dados solicitado não pode ser aberto!<br/>";   
   echo "Erro: " .mysql_error();
   die();
  }
 }

 function disconnect()
 {
  return mysql_close($this->link);
 }

 function executaQuery($query)
 {
   $this->connect();
   $this->query=$query;
   if($this -> result = mysql_query($this->query))
   {
    $this -> disconnect(); 
    /*Retorna um vetor com os dados*/
    return (mysql_fetch_object($this -> result));
   }
   else
   {
    echo "Ocorreu um erro na execução da SQL";
    echo "Erro: " .mysql_error();
    echo "SQL: " .$query;
    die();
    disconnect();
   }
 }
}
/*
 Forma de uso da Classe MySQL:

 include("class.MySQL.php");

 $mySQL = new MySQL;
 $usuarios = $mySQL -> executaQuery("SELECT * FROM Usuario;");
 $usuarios_totalRows = mysql_num_rows($usuarios);
 $mySQL->disconnect;
 
while ($row_usuarios = mysql_fetch_array($usuarios))
{
  echo $row_usuarios["nome"];
}

*/
?>
