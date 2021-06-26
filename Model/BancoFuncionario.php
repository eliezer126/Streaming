<?php
//session_start();
function inserefun($conexao, $codusuFK, $nomefun,$fonefun,$funcaofun){
   
    $query = "insert into tbfuncionario(codusuFK,nomefun,fonefun,funcaofun) values('{$codusuFK}','{$nomefun}','{$fonefun}','{$funcaofun}')";
    $resultado = mysqli_query($conexao,$query);
    return $resultado;
}
function visuNomeFuncionario($conexao, $funcionario){
    $query = "select * from tbfuncionario where nomefun like '%{$funcionario}%'";
    $resultado = mysqli_query($conexao,$query);
   // $infoFilme = mysqli_fetch_assoc($resultado);

    
    return $resultado;
}
function deleteFuncionario($conexao, $codfun){
    $query = "delete from tbfuncionario where codfun='{$codfun}'";
    $resultado = mysqli_query($conexao,$query);
    return $resultado;


}
function limpaCadastroFun(){
    session_destroy();
}