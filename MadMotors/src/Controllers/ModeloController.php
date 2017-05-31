<?php
    include '../../Models/Modelo.php';

    class ModeloController
    {

        public function insert()
        {
            
        }

        public function update()
        {
            
        }

        public function delete()
        {
            
        }

        public static function select()
        {   
            $modelo = new Modelo();
            $array = $modelo->select();
            $json = json_encode($array);
            echo $json;
        }
    }
    
