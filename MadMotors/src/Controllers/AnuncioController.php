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
            $anuncio = new Anuncio();
            $array = $anuncio->select();
            $json = json_encode($array);
            echo $json;
        }
    }
    
