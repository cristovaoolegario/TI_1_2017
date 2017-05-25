<?php
    include '../../Models/Anuncio.php';
    
    class AnuncioController
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
            $array = Anuncio::select();
            $json = json_encode($array);
            echo $json;
        }
    }
    
