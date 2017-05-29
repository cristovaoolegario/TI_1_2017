<?php
    class ModeloTest extends PHPUnit_Extensions_Database_TestCase
	{	
		private $conn = null;
		
		final public function getConnection()
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
			return $this->createMySQLXMLDataSet("tests/ModeloTest.xml");
		}
		
		public function testselect()
		{			
			 $conn = $this->getConnection()->getConnection();
			 $query = $conn->query('SELECT * FROM Modelo');
			 $results = $query->fetchAll(PDO::FETCH_ASSOC);	 
			 
			 $this->assertEquals(1, $results[0]['id_Modelo']);		 
		}
				
		public function testinsert()
		{
			$conn = $this->getConnection()->getConnection();
			$query = $conn->query('INSERT INTO Modelo(nomeModelo, id_Marca) VALUES("MAD CIVIC",3) ');
			$query = $conn->query('SELECT * FROM Modelo WHERE nomeModelo = "MAD CIVIC"'); 
			$results = $query->fetchAll(PDO::FETCH_ASSOC);
			
			$this->assertEquals('MAD CIVIC', $results[0]['nomeModelo']);
		}
		
		public function testupdate()
		{
			$conn = $this->getConnection()->getConnection();
			$query = $conn->query('UPDATE Modelo SET nomeModelo = "HAPPY CIVIC" WHERE nomeModelo = "MAD CIVIC"'); 
			$query = $conn->query('SELECT * FROM Modelo WHERE nomeModelo = "HAPPY CIVIC"'); 
			$results = $query->fetchAll(PDO::FETCH_ASSOC); 
			
			$this->assertEquals('HAPPY CIVIC', $results[0]['nomeModelo']); 
		}
		
		public function testdelete()
		{
					
		}
		
		
		
	}
	
?>
