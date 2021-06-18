<?php
include_once("../View/header.php");
include_once("../Model/Conexao.php");
include_once("../Model/BancoFilme.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(alterFilme($conexao, $codfil, $filme, $sinopse,$ano, $capa, $url)){
    echo("<p class='alert alert-primary' role='alert'O filme foi alterado com sucesso.</p>");
}else{
    echo("<p class='alert alert-danger' role='alert' O filme não foi alterado.</p>");
}

include_once("../View/Footer.php");
?>