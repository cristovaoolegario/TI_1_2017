<?php

    include('Usuario.php');
    include('IModelo.php');
    include('MySQL.php');

    class Revendedora implements IModelo
    {

        public $id;
        public $cnpj;
        public $telefone1;
        public $telefone2;
        public $razaoSocial;
        public $email;
        public $banner;
        public $id_Usuario;
        public $id_Endereco;
        private static $mySQL;

        public function __construct()
        {
            
        }
        
        public static function insert()
        {
            /* Insere no banco a revendedora fornecida */
            $mySQL = new MySQL;
            $mySQL->connect();
            $insereRevendedora = $mySQL->executaQuery("INSERT INTO `revendedora` (`cnpj`,`telefone1`,`telefone2`,`razaoSocial`,`email`,`banner`,`id_Usuario`,`id_Endereco`) VALUES ('".$cnpj."',".$telefone1.",".$telefone2.",'".$razaoSocial."','".$email."','".$banner."',".$id_Usuario.",".$id_Endereco.");");
        }

        public static function update()
        {
            $mySQL = new MySQL;
            $mySQL->connect();
            $updateRevendedora = $mySQL->executeQuery("UPDATE Revendedora SET cnpj = '".$cnpj."', telefone1 = ".$telefone1.", telefone2 = ".$telefone2.", razaoSocial = '".$razaoSocial."', email = '".$email."', banner = '".$banner."' WHERE id = ".$id."");
        }

        public static function delete()
        {
            $mySQL = new MySQL;
            $mySQL->connect();
            $deleteRevendedora = $mySQL->executeQuery("DELETE FROM Revendedora WHERE id = ".$id."");
        }

        public static function select()
        {
            $selectRevendedora = "SELECT * FROM Revendedora ";

            $mySQL = new MySQL;
            $mySQL->connect();

            if (!empty($id))
            {
                $selectRevendedora .= "WHERE id = ".$id." ";
            }

            $result = $mySQL->executeQuery($selectRevendedora);

            return $result;
        }

    }

?>
