<?php
	class AnuncioTest extends PHPUnit_Extensions_Database_TestCase
	{		
		private $conn = null;
		
		public function getConnection()
		{
			if(!$this->conn) 
			{
				$db = new PDO(
					"mysql:host=pucsi.mysql.database.azure.com;dbname=ti_testes",
					"pucsi@pucsi", "Sistemas123");
	 
				$this->conn = parent::createDefaultDBConnection($db, "ti_testes");
			}
 
			return $this->conn;
		}
		
		public function getDataSet()
		{
			return $this->createMySQLXMLDataSet("tests/AnuncioTest.xml");
		}
		
		public function testselect()
		{			
			 $conn = $this->getConnection()->getConnection();
			 $query = $conn->query('SELECT * FROM Anuncio');
			 $results = $query->fetchAll(PDO::FETCH_ASSOC);
			 
			 $this->assertEquals('1', $results[0]['id_Anuncio']);			
		}
		
		public function testinsert()
		{
			$conn = $this->getConnection()->getConnection();
			$query = $conn->query('INSERT INTO Anuncio  (estadoVeiculo,ano,cor,numeroPortas,quilometragem,cambio,combustivel,finalPlaca,tipoCarroceria,dataAnuncio,id_Endereco,id_Modelo,id_Usuario,preco) VALUES ("Novo",2018-01-01,"vermelho",3,80000,"automatico","eletrico",8000,"Seda",2017-01-01,1,1,1,666)');
			$query = $conn->query('SELECT * FROM Anuncio WHERE numeroPortas = 3'); 
			$results = $query->fetchAll(PDO::FETCH_ASSOC);
			
			//$this->assertEquals('eletrico', $results[0]['combustivel']);
			$this->assertEquals(3, $results[0]['numeroPortas']); 
			
		}
		
		public function testupdate()
		{
			$conn = $this->getConnection()->getConnection();
			$query = $conn->query('UPDATE Anuncio SET numeroPortas = 5 WHERE id_Anuncio = 1'); 
			$query = $conn->query('SELECT * FROM Anuncio WHERE id_Anuncio = 1'); 
			$results = $query->fetchAll(PDO::FETCH_ASSOC); 
			
			$this->assertEquals('5', $results[0]['numeroPortas']); 
		}
		
		public function testdelete()
		{
			$conn = $this->getConnection()->getConnection();
			$query = $conn->query('DELETE FROM Anuncio WHERE id_Anuncio = 2');
			$query = $conn->query('SELECT * FROM Anuncio WHERE id_Anuncio = 2'); 
			$results = $query->fetchAll(PDO::FETCH_ASSOC); 
			
			$this->assertEmpty($results);			
		}		
	}
?>
