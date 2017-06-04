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
        
        public static function autenticacao($usuario)
        {
            $login = $usuario['login'];
            $senha = $usuario['senha'];
                       
            // session_start inicia a sessão
            session_start();
                 
            $cliente = new Usuario();
            
            $cliente->nome = $login;
                        
            $result = $cliente->select_by_name($cliente->nome);
          
            if(!empty($result))
            {
                $_SESSION['login'] = $login;
                $_SESSION['senha'] = $senha;
            }
            else
            {
                unset ($_SESSION['login']);
                unset ($_SESSION['senha']);
            }
        }
    }