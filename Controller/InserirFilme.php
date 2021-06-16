<?php
require_once("../Model/BancoFilme.php");
require_once("../Model/Conexao.php");

extract($_REQUEST,EXTR_OVERWRITE);
if(insereFilme($conexao, $filme, $sinopse,$ano, $capa, $url)){
    echo("Filme cadastrado com sucesso");
}else{
    echo("O filme não ");
}