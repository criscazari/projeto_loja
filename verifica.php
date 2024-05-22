<?php

require 'conexao2.php';

if(isset($_SESSION['idUser'])&&($_SESSION['idUser'])){

    require_once 'Usuario.class.php';
    $u = new Usuario();
    $listLogged = $u->logged($_SESSION['idUser']);
    $nomeUser = $listLogged['nome'];

}else{

    header("Location: login.php");

}

?>