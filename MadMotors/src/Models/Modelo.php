<?php

    include_once('IModelo.php');
    include_once('MySQL.php');

    class Modelo implements IModelo
    {

        public $id_Modelo;
        public $id_Marca;
        public $nomeModelo;
        private static $mySQL;

        public function __construct()
        {
            $count = func_num_args();

            if ($count == 0)
            {
                
            }
            else if ($count != 2)
            {
                echo "Número de parâmetros Incorreto";
            }
            else if ($count == 2)
            {
                list($id__Marca, $nomeModelo) = func_get_args();

                $this->id_Marca = $id_Marca;
                $this->nomeModelo = $nomeModelo;
            }
        }

        public function insert()
        {
            $mySQL = new MySQL;
            $mySQL->connect();
            $insereModelo = $mySQL->executeQuery("INSERT INTO modelo(id_Marca,nomeModelo) VALUES(".$id_Marca.",'".$nomeModelo."');");
        }

        public function update()
        {
            $count = func_num_args();

            if ($count == 1)
            {
                $novonomeModelo = func_get_arg(0);
                $mySQL = new MySQL;
                $mySQL->connect();
                $updateModelo = $mySQL->executeQuery("UPDATE modelo SET nomeModelo = '".$novonomeModelo."' WHERE nomeModelo = '".$nomeModelo."'");
            }
        }

        public function delete()
        {
            $mySQL = new MySQL;
            $mySQL->connect();
            $deleteModelo = $mySQL->executeQuery("DELETE FROM Modelo WHERE id = ".$id_Modelo."");
        }

        public function select()
        {
            $mySQL = new MySQL;
            $selectModelo = "SELECT * FROM Modelo ";

            $mySQL->connect();

            $result = $mySQL->executeQuery($selectModelo);
            return($result);
        }

        public function selectByMarca($id_Marca, $nomeMarca)
        {
            $mySQL = new MySQL;
            $selectModelo = "SELECT * FROM Modelo ";

            $mySQL->connect();

            if($id_Marca > 0)
            {
                $selectModelo .= "WHERE id_Marca = ".$id_Marca." ";
            }
            else if(!isEmpty($nomeMarca))
            {
                $selectModelo .= "WHERE nomeMarca = '".$nomeMarca."' ";
            }
            
            $result = $mySQL->executeQuery($selectModelo);
            return($result);
        }      
    }

?>
