<?php
include_once("../Model/BancoUsuario.php");
include_once("../Model/Conexao.php");

$email = isset($_POST["email"])?$_POST["email"]:"";

if(buscarUsuario($conexao,$email)){

    header("location:../View/CadastroFuncionario.php")
}else{
    echo("não deu certo")
}