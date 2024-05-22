<?php 

session_start();

$localhost = "localhost";
$user = "root";
$passw = "";
$banco = "loja";

global $pdo;  

try{
    //Conexão orientada a objeto com pdo(biblioteca), onde permite conectar em varios sistemas
    $pdo = new PDO ("mysql:dbname=".$banco."; host=".$localhost, $user, $passw);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo "ERROR: " .$e->getMessage();
    exit; 
}



//==============================================
//Testar conexão com o banco de dados
//$sql = $pdo->query("SELECT * FROM usuarios");
//$sql->execute();
//echo $sql->rowCount(); 
//==============================================

?>