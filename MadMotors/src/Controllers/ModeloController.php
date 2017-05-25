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
            $array = Modelo::select();
            $json = json_encode($array);
            echo $json;
        }
    }
    
