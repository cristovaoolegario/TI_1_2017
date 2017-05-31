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
            $endereco = new Endereco();
            $array = $endereco->select();
            $json = json_encode($array);
            echo $json;
        }
    }
    
