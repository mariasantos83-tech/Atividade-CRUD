<?php

session_start();
if(!isset($_SESSION["usuario"])){
    header("Location: ../index.php");
    exit();
}

include("../infra/db/connect.php");

$id = $_GET["id"];

$sql = " DELETE FROM usuarios WHERE id = $id ";

if($conn->query($sql) === TRUE){
    header("Location: home.php");
    exit();
}

?>
query($sql); if ($resultado->num_rows > 0){ $_SESSION["usuario"] = $usuario; header("Location: public/home.php"); exit(); }else{ $erro = "Usuário ou senha inválidos!"; } } ?>