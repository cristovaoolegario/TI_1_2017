<?php
    include '../../Models/Revendedora.php';

    class RevendedoraController
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
            $array = Revendedora::select();
            $json = json_encode($array);
            echo $json;
        }
    }
    
