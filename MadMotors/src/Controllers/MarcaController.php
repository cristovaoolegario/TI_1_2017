<?php

    include '../../Models/Marca.php';

    class MarcaController
    {

        public static function insert()
        {
            
        }

        public static function update()
        {
            
        }

        public static function delete()
        {
            
        }

        public static function select()
        {
            $array = Marca::select();
            $json = json_encode($array);
            echo $json;
        }

    }

?>