<?php
    include '../../Models/Anuncio.php';
    
    class AnuncioController
    {

        public static function insert($cadastro)
        {
            $preco = null;
            if(isset($cadastro['preco']))
            {
                $preco = $cadastro['preco'];
            }
            $anuncio = new Anuncio($cadastro['estado'],$cadastro['ano'],$cadastro['cor'],$cadastro['numPortas'],
                    $cadastro['quilometragem'],$cadastro['cambio'],$cadastro['combustivel'],'',
                    $cadastro['carroceria'],$cadastro['dtAnuncio'],$cadastro['localizacao'],$cadastro['modelo']['id_Modelo'],
                    $cadastro['id_Usuario'],$preco);
            $anuncio->insert();
        }

        public static function select()
        {            
            $anuncio = new Anuncio();
            $array = $anuncio->select();
            $json = json_encode($array);
            echo $json;
        }
    }
    
