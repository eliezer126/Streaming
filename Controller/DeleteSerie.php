<?php
include_once("../View/Header.php");
include_once("../Model/Conexao.php");
include_once("../Model/BancoSerie.php");

extract($_REQUEST, EXTR_OVERWRITE);

if(deleteSerie($conexao, $codserie)){
    echo("<p class='alert alert-primary' role='alert'>A série foi excluido.</p>");
}else{
    echo("<p class='alert alert-danger' role='alert'>A série não foi excluido.</p>");
}

include_once("../View/Footer.php");