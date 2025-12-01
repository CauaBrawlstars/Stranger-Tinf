<?php
    class Usuario{

        public function login($id, $senha){
            global $pdo;

            $sql = "SELECT  * FROM usuarios WHERE idusuario = :id AND senha = :senha";
            $sql = $pdo->prepare($sql);
            $sql->bindValue("id", $id);
            $sql->bindValue("senha", $senha);
            $sql->execute();

            if($sql->rowCount() > 0){
                $dado = $sql -> fetch();

                $_SESSION['idUser'] = $dado['idusuario'];
                return true;
            }else{
                return false;
            }
        }
    }
?>