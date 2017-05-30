<?php
    class EnderecoTest extends PHPUnit_Extensions_Database_TestCase
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
			return $this->createMySQLXMLDataSet("tests/EnderecoTest.xml");
		}
		
		public function testselect()
		{			
			 $conn = $this->getConnection()->getConnection();
			 $query = $conn->query('SELECT * FROM Endereco');
			 $results = $query->fetchAll(PDO::FETCH_ASSOC);	 
			 
			 $this->assertEquals(1, $results[0]['id_Endereco']);
			 
		}
		
		public function testinsert()
		{
			$conn = $this->getConnection()->getConnection();
			$query = $conn->query('INSERT INTO Endereco (cep,rua,bairro,numero,cidade,estado,pais) VALUES (10000,"Rua Pernalonga","Donald",23,"TomorrowLand","WW","DOOMSLAND")');
			$query = $conn->query('SELECT * FROM Endereco WHERE estado = "WW"'); 
			$results = $query->fetchAll(PDO::FETCH_ASSOC);
			
			$this->assertEquals('DOOMSLAND', $results[0]['pais']); 
		}
		
		public function testupdate()
		{
			$conn = $this->getConnection()->getConnection();
			$query = $conn->query('INSERT INTO Endereco (cep,rua,bairro,numero,cidade,estado,pais) VALUES (10000,"Rua Pernalonga","Donald",23,"TomorrowLand","WW","DOOMSLAND")');
			$query = $conn->query('UPDATE Endereco SET numero = 1377 WHERE estado = "WW"'); 
			$query = $conn->query('SELECT * FROM Endereco WHERE estado = "WW"'); 
			$results = $query->fetchAll(PDO::FETCH_ASSOC); 
			
			$this->assertEquals('1377', $results[0]['numero']); 
		}
		
		public function testdelete()
		{
					
		}		
	}
	
?>
