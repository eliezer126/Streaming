<?php
include_once("../Model/BancoUsuario.php");
include_once("../Model/conexao.php");

$login = isset($_POST["e-mail"])?strtolower($_POST["e-mail"]):"";
$senha = $_POST["senha"];

if(insereUsuario($conexao,$login,$senha)){
    header("Location: ../View/AreaFuncionario.php");
}else{
    header("Location: ../View/AreaFuncionario.php");
}
