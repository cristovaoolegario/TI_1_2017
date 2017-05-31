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
			$usuario = new Usuario();       
            $array = $usuario->select();
            $json = json_encode($array);
            echo $json;
        }
    }
    
