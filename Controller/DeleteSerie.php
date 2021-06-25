<?php
include_once("../View/Header.php");
include_once("../Model/Conexao.php");
include_once("../Model/BancoSerie.php");

extract($_REQUEST, EXTR_OVERWRITE);

if(deleteSerie($conexao, $codserie)){
    echo("<p class='alert alert-primary' role='alert'>O episódio foi excluido.</p>");
}else{
    echo("<p class='alert alert-danger' role='alert'>O episódio não foi excluido.</p>");
}

include_once("../View/Footer.php");