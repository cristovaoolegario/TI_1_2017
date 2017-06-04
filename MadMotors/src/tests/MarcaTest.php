<?php
    class MarcaTest extends PHPUnit_Extensions_Database_TestCase
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
			return $this->createMySQLXMLDataSet("tests/MarcaTest.xml");
		}
		
		public function testselect()
		{			
			 $conn = $this->getConnection()->getConnection();
			 $query = $conn->query('SELECT * FROM Marca');
			 $results = $query->fetchAll(PDO::FETCH_ASSOC);
			 
			 $this->assertEquals('1', $results[0]['id_Marca']);						 
		}
		
		public function testinsert()
		{
			$conn = $this->getConnection()->getConnection();
			$query = $conn->query('INSERT INTO Marca(nomeMarca) VALUES("MAD")');
			$query = $conn->query('SELECT * FROM Marca WHERE nomeMarca = "MAD"'); 
			$results = $query->fetchAll(PDO::FETCH_ASSOC);
			
			$this->assertEquals('MAD', $results[0]['nomeMarca']); 

		}
		
		public function testupdate()
		{
			$conn = $this->getConnection()->getConnection();
			$query = $conn->query('INSERT INTO Marca(nomeMarca) VALUES("MAD")');
			$query = $conn->query('UPDATE Marca SET nomeMarca = "MADMOTORS" WHERE nomeMarca = "MAD"');
			$query = $conn->query('SELECT * FROM Marca WHERE nomeMarca = "MADMOTORS"'); 
			$results = $query->fetchAll(PDO::FETCH_ASSOC);
			
			$this->assertEquals('MADMOTORS', $results[0]['nomeMarca']);
		}
		
		public function testdelete()
		{
			$conn = $this->getConnection()->getConnection();
			$query = $conn->query('DELETE FROM Marca WHERE id_Marca = 534');
			$query = $conn->query('SELECT * FROM Marca WHERE id_Marca = 534'); 
			$results = $query->fetchAll(PDO::FETCH_ASSOC); 
			
			$this->assertEmpty($results);			
		}		
	}
	
?>
