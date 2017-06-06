<?php
    class UsuarioTest extends PHPUnit_Extensions_Database_TestCase
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
			return $this->createMySQLXMLDataSet("tests/UsuarioTest.xml");
		}
		
		public function testselect()
		{			
			 $conn = $this->getConnection()->getConnection();
			 $query = $conn->query('SELECT * FROM Usuario');
			 $results = $query->fetchAll(PDO::FETCH_ASSOC);
			 
			 $this->assertEquals(1,$results[0]['id_Usuario']);			 
		}	
		
		public function testinsert()
		{
			$conn = $this->getConnection()->getConnection();
			$query = $conn->query('INSERT INTO Usuario(nomeUsuario,sexo,dtNascimento,rg,nacionalidade,naturalidade,email,foto,telefone1,telefone2,id_Endereco) VALUES ("T800","M",1980-01-01,00000,"desconhecida","SKYNET","T800rules@gmail.com",1,0000000,0000000,1)');
			$query = $conn->query('SELECT * FROM Usuario WHERE nomeUsuario = "T800"'); 
			/*Erros
			 * $query = $conn->query('INSERT INTO Usuario(nomeUsuario,sexo,dtNascimento,rg,nacionalidade,naturalidade,email,foto,telefone1,telefone2,id_Endereco) VALUES ("T800","M",1980-01-01,00000,"desconhecida","SKYNET","T800rules@gmail.com",1,0000000,0000000,1000)');
			 $query = $conn->query('SELECT * FROM Usuario WHERE nomeUsuario = "T800"');
			 * */
			 
			$results = $query->fetchAll(PDO::FETCH_ASSOC);
			
			$this->assertEquals('T800', $results[0]['nomeUsuario']); 
		}
		
		public function testupdate()
		{
			$conn = $this->getConnection()->getConnection();			
			$query = $conn->query('UPDATE Usuario SET nomeUsuario = "Batata" WHERE id_Usuario = 1'); 
			$query = $conn->query('SELECT * FROM Usuario WHERE id_Usuario = 1'); 
			$results = $query->fetchAll(PDO::FETCH_ASSOC); 
			
			$this->assertEquals('Batata', $results[0]['nomeUsuario']); 
		}
		
		public function testdelete()
		{
			$conn = $this->getConnection()->getConnection();
			/* ERROS
			 * $query = $conn->query('DELETE FROM Usuario WHERE id_Usuario = 1500');
			$query = $conn->query('SELECT * FROM Usuario WHERE id_Usuario = 1500');						
			 * */			
			$query = $conn->query('DELETE FROM Usuario WHERE id_Usuario = 1');
			$query = $conn->query('SELECT * FROM Usuario WHERE id_Usuario = 1');
			$results = $query->fetchAll(PDO::FETCH_ASSOC); 
			
			$this->assertEmpty($results);			
		}
		
		public function testselect_by_name()
		{
			$conn = $this->getConnection()->getConnection();
			/*Erros
			 * $query = $conn->query('SELECT * FROM Usuario WHERE nomeUsuario = "Jackei Boy"');
			 * */
			$query = $conn->query('SELECT * FROM Usuario WHERE nomeUsuario = "Dylan Ward"');
			$results = $query->fetchAll(PDO::FETCH_ASSOC);
			 
			$this->assertEquals('Dylan Ward',$results[0]['nomeUsuario']);
		}
	}
	
?>
