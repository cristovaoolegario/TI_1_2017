<?php
    include '../../Models/Endereco.php';

    class EnderecoController
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
            
            $array = Endereco::select();
            $json = json_encode($array);
            echo $json;
        }
    }
    
