<?php
session_stat()
function insereFilme($conexao, $filme, $sinopse,$ano, $capa, $url){
    $query = "insert into tbfilme(nomefil,generofil,sinopsefil,anofil,capafil,urlfil value('{$filme}','{$sinopse}','{$ano}', '{$capa}', '{$url}')");
    $resultado = mysqli_query($conexao,$query);
    return $resultado;
}
function visuFilme(($conexao, $filme){
    $query = "selet * from tbfilme where nomefil like '%{$filme}%'";
    $resultado = mysqli_query($conexao,$query);
   // $infoFilme = mysqli_fetch_assoc($resultado);

    
    return $resultado;
}
function visuCodigoFilme($conexao, $codigo){
    $query = "select * from tbFilme where codfil={$codigo}";
    $resultado = mysqli_query($conexao,$query);
    return $resultado;
}

function alterFilme($conexao, $codfil, $filme, $sinopse,$ano, $capa, $url){
    $query = "update tbfilme set nomefil = '{$filme}', generofil='{$sinopse}', anofil='{$ano}', capafil='{$capa}', urlfil='{$url}'where codfil='{$codfil}'";

    $resultado = mysqli_query($conexao,$query);
    return $resultado;

}

function deleteFilme($conexao, $codfil){

    $query = "delete from tbfilme where codfil='{$codfil}'";
    $resultado = mysqli_query($conexao,$query);
    return $resultado;


}

