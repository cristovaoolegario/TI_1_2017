<?php

    class MySQL
    {

        private $host = "pucsi.mysql.database.azure.com";
        private $user = "pucsi@pucsi";
        private $password = "Sistemas123";
        private $database = "ti_testes";
        private $conn;
        private $result;

        function MySQL()
        {
            
        }

        function connect()
        {
            $this->conn = new mysqli($this->host, $this->user, $this->password, $this->database);
            if ($this->conn->connect_error)
            {
                 die("Connection failed: " . $conn->connect_error);
            }
        }

        function disconnect()
        {
            return mysqli_close($this->conn);
        }

        function executeQuery($query)
        {
            $this->connect();
            $result = $this->conn->query($query);
            if ($result)
            {
                $obj = mysqli_fetch_all($result, MYSQLI_ASSOC);

                //$obj = mysqli_fetch_array($result);
                $this->disconnect();
                /* Retorna um vetor com os dados */
                return ($obj);
            }
            else
            {
                echo "Ocorreu um erro na execução da SQL";
                echo "Erro: " . mysql_error();
                echo "SQL: " . $query;
                die();
                disconnect();
            }
        }
    }
?>
