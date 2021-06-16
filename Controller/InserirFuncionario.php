<?php
require_once("../Model/BancoFuncionario.php");
require_once("../Model/Conexao.php");

extract($_REQUEST,EXTR_OVERWRITE);
if(inserefun($conexao, $codusuFK, $nomefun,$fonefun,$funcaofun)){
    session_destroy();
    echo("Funcionario cadastrado com sucesso");
}else{
    echo("O funcionario não foi para o banco de dados");
};