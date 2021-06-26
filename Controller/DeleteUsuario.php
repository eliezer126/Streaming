<?php

include_once("../Model/Conexao.php");
include_once("../Model/BancoUsuario.php");

extract($_REQUEST, EXTR_OVERWRITE);

if(deleteUsuario($conexao, $codusu)){
    echo("<p class='alert alert-primary' role='alert'>O usuário foi excluido.</p>");
}else{
    echo("<p class='alert alert-danger' role='alert'>O usuário não foi excluido.</p>");
}

