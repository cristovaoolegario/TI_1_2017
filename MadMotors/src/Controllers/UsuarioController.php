<?php
    include '../../Models/Usuario.php';

    class UsuarioController
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
            $array = Usuario::select();
            $json = json_encode($array);
            echo $json;
        }
    }
    
