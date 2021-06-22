<?php

include_once("../Model/Conexao.php");
include_once("../Model/BancoUsuario.php");

$email = $_POST["email"];
$pin = $_POST["pin"];
$novasenha = $_POST["novasenha"];

if(trocarSenhausuario($conexao, $email, $novasenha,$pin)){
    
}