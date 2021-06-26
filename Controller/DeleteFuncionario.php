<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="fundo">
<?php
include_once("../Model/Conexao.php");
include_once("../Model/BancoFuncionario.php");

extract($_REQUEST, EXTR_OVERWRITE);

if(deleteFuncionario($conexao, $codfun)){
    echo("<p class='alert alert-primary' role='alert'>O funcionário foi excluido.</p>");
}else{
    echo("<p class='alert alert-danger' role='alert'>O funcionário não foi excluido.</p>");
}
?>
</div>
</body>
</html>