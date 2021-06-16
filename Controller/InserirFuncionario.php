<?php
require_once("../Model/BancoFuncionario.php");
require_once("../Model/Conexao.php");

extract($_REQUEST,EXTR_OVERWRITE);
if(insereFilme($conexao, $codusuFK, $nomefun,$funcaofun,)){
    session_destroy();
    echo("Funcionario cadastrado com sucesso");
}else{
    echo("O funcionario não foi para o banco de dados");
};