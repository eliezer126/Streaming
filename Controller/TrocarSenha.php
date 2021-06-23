<?php
session_start();
include_once("../Model/Conexao.php");
include_once("../Model/BancoUsuario.php");

$email = $_POST["email"];
$pin = $_POST["pin"];
$novasenha = $_POST["novasenha"];
$info = trocarSenhausuario($conexao,$email,$novasenha,$pin);
var_dump($info);
if($info === "erro"){
    $_SESSION["msg"] ="<div class='alert alert-success' role='alert'>Os dados não conferem...tente novamente</div>";
    header("Location: ../View/FormEsqueciSenha.php");
}else{
    $_SESSION["msg"] ="<div class='alert alert-success' role='alert'>Sua senha foi alterada com sucesso</div>";

    header("Location: ../View/AreaFuncionario.php");
}