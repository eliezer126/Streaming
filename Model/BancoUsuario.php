<?php
session_start();
function insereUsuario($conexao,$email,$senha,$pin){

    $option = ['cost'=>8];

    $senhacryp = password_hash($senha,PASSWORD_BCRYPT,$option);

    $query = "insert into tbusuario(loginusu,senhausu,pinusu)values('{$email}','{$senhacryp}','{$pin}')";
    $resul = mysqli_query($conexao,$query);
    
    return $resul;
}

function buscarUsuario($conexao,$email){
   
    $query = "select * from tbusuario where loginusu= '{$email}'";

    $resul = mysqli_query($conexao,$query);
    $infoemail = mysqli_fetch_assoc($resul);
    
    $_SESSION["emailusubusca"] = $infoemail["loginusu"];
    $_SESSION["codusubusca"] = $infoemail["codusu"];
    
    return $resul;
}
function buscarAcesso($conexao,$email,$senha){

    $query = "select * from tbusuario where loginusu= '{$email}'";

    $resul = mysqli_query($conexao,$query);

    $resul = mysqli_fetch_assoc($conexao,$query);

    if(mysqli_num_rows($resul) > 0){
        $linha = mysqli_fetch_assoc($resul);
        if(password_verify($senha,$linha["senhausu"])){
           $_SESSION["email"] = $linha["loginusu"];
           $_SESSION["codusu"] = $linha["codusu"];

           $_SESSION["funcionario"] = buscarNomeUsuario($conexao,$linha["codusu"]);

           return $linha["loginusu"];
        }else{
            return "Senha não confere";
        }
    }
    return "Email não cadastrado";
}

function trocarSenhausuario($conexao, $email, $novasenha, $pin){
    //Verificar se o email e o pin estão correto
    $query = "select * from tbusuario where loginusu= '{$email}' and pinusu='{$pin}'";
    $retorno = mysqli_query($conexao,$query);

    if(mysqli_num_rows($retorno)>0){
    $retornoArray = mysqli_fetch_assoc($retorno);
    $codusu = $retornoArray["codusu"];
   
    $option = ['cost'=>8];

    $senha = password_hash($senha,PASSWORD_BCRYPT,$option);
    
    $query = "update tbusuario set senhausu='{$senha}' whare codusu = '{$codusu}'";
    $resultado= mysqli_query($conexao,$query);
    
    return $resultado;
}
}
function logout(){
    session_destroy();
}
function liberaAcesso(){
    $email = isset($_SESSION["email"]);

    if(!$email){
        $_SESSION["msg"] = "<div class='alert alert-success' role='alert'>Faça login para ter acesso ao sistema.</div>";
        header("Location: ../View/AcessoFun.php");
        die();
    }
}
function buscarNomeUsuario($conexao,$codusu){
    $query = "Selet * from tbfuncionario where codusuFK = '{$codusu}'";
    $resul = mysqli_query($conexao,$query);

    $resulArray = mysqli_fetch_assoc($resul);
$nome = $resulArray["nomefun"];

return $nome;
}