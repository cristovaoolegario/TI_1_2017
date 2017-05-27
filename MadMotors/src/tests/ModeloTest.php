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
			 $query = $conn->query('SELECT * FROM Modelo');
			 $results = $query->fetchAll(PDO::FETCH_ASSOC);	 
			 
		}
		
	}
	
?>
