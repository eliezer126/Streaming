<?php
include_once("../Model/Conexao.php");
include_once("../Model/BancoUsuario.php");

$login = $_POST["email"];
$senha = $_POST["senha"];

if(buscarAcesso($conexao,$email,$senha)){

    header("Location: ../View/AreaFuncionario.php");
}else{

    header("Location: ../View/AcessoFun.php");
}
die();
?>