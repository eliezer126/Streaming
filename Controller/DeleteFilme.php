<?php
include_once("../View/header.php");
include_once("../Model/BancoFilme.php");
include_once("../Model/Conexao.php");

extract($_POST,EXTR_OVERWRITE);

if(deleteFilme($conexao, $codfil)){
    echo("<script> Alert('O filme foi excluido.')</script>");
}else{
    echo("<p>Ofilme não foi excluido.</p>");
}

include_once("../View/Footer.php");
?>