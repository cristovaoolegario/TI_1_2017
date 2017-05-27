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
		
		public function testinsert()
		{
			
		}
		
		public function testupdate()
		{
			
		}
		
		public function testdelete()
		{
					
		}
		
		public function testselect()
		{			
			 $conn = $this->getConnection()->getConnection();
			 $query = $conn->query('SELECT * FROM Anuncio');
			 $results = $query->fetchAll(PDO::FETCH_ASSOC);
			 
			 $this->assertEquals('1', $results[0]['id_Anuncio']);
			 $this->assertEquals('Novo', $results[0]['estadoVeiculo']);
			 $this->assertEquals('1985-06-06', $results[0]['ano']);
			 $this->assertEquals('verde', $results[0]['cor']);
			 
			 //Lendo anuncios
			/* $query = $conn->query('SELECT count(*) as totalAnuncios FROM Anuncio');
		     $results = $query->fetchAll(PDO::FETCH_ASSOC);
			 $this->assertEquals(1, $results[0]['totalAnuncios']);*/
		}
		
	}
?>
