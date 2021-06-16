<?php
include_once("../Model/BancoUsuario.php");
include_once("../Model/conexao.php");

$login = isset($_POST["login"])?strtolower($_POST["login"]):"";
$senha = $_POST["senha"];

if(insereUsuario($conexao,$login,$senha)){
    haeder("Location: ../View/AreaFuncionario.php");
}else{
    header("Location: ../View/AreaFuncionario.php");
}
