<?php
include_once("../View/Header.php");
include_once("../Model/BancoFilme.php");
include_once("../Model/Conexao.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(deleteFilme($conexao, $codfil)){
    echo("<p class='alert alert-primary' role='alert'>O filme foi excluido.</p>");
}else{
    echo("<p class='alert alert-danger' role='alert'>O filme não foi excluido.</p>");
}

include_once("../View/Footer.php");
?>