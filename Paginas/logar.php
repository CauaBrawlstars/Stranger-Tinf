<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset ($_POST['id']) && !empty($_POST['id']) && isset ($_POST['senha']) && !empty($_POST['senha'])) {

    require 'conexao.php';
    require 'UsuarioClass.php';

    $u = new Usuario();

    $id = addslashes($_POST['id']);
    $senha = addslashes($_POST['senha']);

    if ($u->login($id, $senha) == true){
        if(isset($_SESSION['idUser'])){
            header("Location: relatorio.php");
        }else{
            header("Location: login.html");
        }

    }else{
        header("Location: login.html");
    }





}else{
    header("Location: login.html");
}
