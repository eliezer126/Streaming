<?php
include_once("../Model/Conexao.php");
include_once("../Model/BancoUsuario.php");

$email = $_POST["email"];
$senha = $_POST["senha"];
$acesso = buscarAcesso($conexao,$email,$senha); 

if($acesso === $email){
   
  header("Location: ../View/AreaFuncionario.php");

}else{

    $_SESSION["msg"] = "<div class='alert alert-danger' role='alert'>Os dados não conferem...tente novamente</div>";
    header("Location: ../View/AcessoFun.php");
    
}
die();
?>