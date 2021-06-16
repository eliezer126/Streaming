<?php
function insereFilme($conexao, $filme, $sinopse,$ano, $capa, $url){
    $query = "insert into tbfilme(nomefil,generofil,sinopsefil,anofil,capafil,urlfil value'{$filme}','{$sinopse}','{$ano}', '{$capa}', '{$url}'");
    $resultado = mysqli_query($conexao,$query);
    return $resultado
}