<?php
    include '../../Models/Usuario.php';

    class UsuarioController
    {

        public static function insert($nome,$sexo,$dtNascimento,$rg,$nacionalidade,$naturalidade,$email,$foto,$telefone1,$telefone2,$idEndereco)
        {
            $usuario = new Usuario($nome, $sexo, $dtNascimento, $rg, $nacionalidade, $naturalidade, $email, $foto,$telefone1, $telefone2, $idEndereco);       
            $array = $usuario->insert();
            $json = json_encode($array);
            echo $json;
        }

        public static function update($nome, $sexo, $dtNascimento, $rg, $nacionalidade, $naturalidade, $email, $foto,$telefone1, $telefone2, $idEndereco)
        {
            $usuario = new Usuario($nome, $sexo, $dtNascimento, $rg, $nacionalidade, $naturalidade, $email, $foto,$telefone1, $telefone2, $idEndereco);       
            $array = $usuario->update();
            $json = json_encode($array);
            echo $json;
        }

        public static function delete($nome, $sexo, $dtNascimento, $rg, $nacionalidade, $naturalidade, $email, $foto,$telefone1, $telefone2, $idEndereco)
        {
            $usuario = new Usuario($nome, $sexo, $dtNascimento, $rg, $nacionalidade, $naturalidade, $email, $foto,$telefone1, $telefone2, $idEndereco);       
            $array = $usuario->delete();
            $json = json_encode($array);
            echo $json;
        }

        public static function select()
        {     
            $usuario = new Usuario();       
            $array = $usuario->select();
            $json = json_encode($array);
            echo $json;
        }
        
        public static function autenticacao()
        {
            $data = json_decode(file_get_contents("php://input"));
            $login = $data->login;
            $senha = $data->senha;
                       
            // session_start inicia a sessão
            session_start();
                        
            $result = Usuario::select_by_name($login);
          
            if(mysql_num_rows ($result) > 0 )
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
