<?php
session_start();
function insereFilme($conexao, $codusuFK, $nomefun,$funcaofun,){
   
    $query = "insert into tbfuncionario(codusuFK,nomefun,uncaofun) value'{$codusuFK}','{$nomefun}','{$fonefun}','{$funcaofun}')");
    $resultado = mysqli_query($conexao,$query);
    return $resultado
};
function limpaCadastroFun(){
    session_destroy();
};