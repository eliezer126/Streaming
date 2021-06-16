<?php
include_once("../Model/BancoFilme.php");
include_once("../Model/Conexao.php");

$filme = isset($_POST["filme"])?$_POST["filme"]: "";

if(visuNomeFilme($conexao, $filme)){
  
    header("Location: ../View/VisualizarFilme.php");
}else{
    echo("Não deu certo");
};