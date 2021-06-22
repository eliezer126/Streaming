<?php
include_once("../View/Header.php");
require_once("../Model/BancoFilme.php");
require_once("../Model/Conexao.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(insereFilme($conexao, $filme, $genero, $sinopse, $ano, $capa, $url)){
    echo("Filme cadastrado com sucesso!");
}else{
    echo("O filme não foi cadastrado");
}

include_once("../View/Footer.php");