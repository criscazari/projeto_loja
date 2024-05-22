<?php 

$localhost = "localhost";
$user = "root";
$pass = "";
$banco = "loja";

//Conexão estrutural
$conecta = mysqli_connect($localhost, $user , $pass, $banco);

$sql = mysqli_query($conecta, "SELECT * FROM usuarios");

echo "Existem " .mysqli_num_rows($sql). " registros";
?>