<?php
session_start();
include('Header.php');
?>

<?php

$email = isset($_SESSION["emailusubusca"])?$_SESSION["emailusubusca"]:"";
$codusu = isset($_SESSION["codusubusca"])?$_SESSION["codusubusca"] : "";

if($email){
$aparenciaForm2 = "visible";
$aparenciaForm1 = "invisible";
}else{
$aparenciaForm2 = "invisible";
$aparenciaForm1 = "visible";  
}
?>
<div class="container">
<form action="../Contriller/BuscaEmailUsuario.php" method="POST" class="row g-3"<?=$aparenciaForm1?>>

<div class="col-12">
<label class="form-label"> Digite um e-mail de usuário valido <label>
<input type="e-mail" class="form-control" name="email">
</div>

<div class="col-12">
<button type="submit" class="btn btn-primary">Localizar</button>
</div>
</form>

<div class="container">
<form action="../Controller/InserirFuncionario.php" method="POST" class="row g-3" <?=$aparenciaForm2?>>

<input type="hidden" name="codusuFK" value="<?=$codusu?>">

<div class="col-12">
<label class="form-label"> Digite um e-mail de usuário valido <label>
<input type="e-mail" value="<?=$email?>" class="form-control" name="email">
</div>

<div class="col-md-12">
    <label for="inputnome" class="form-label">Nome</label>
    <input type="text" name="nome" class="form-control" id="inputnome">
  </div>
  <div class="col-md-12">
    <label for="inputfone" class="form-label">Fone</label>
    <input type="text" name="fone" class="form-control" id="inputfone">
  </div>
  <div class="col-md-12">
  <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
  <option value="" selected>Escolha a fução</option>
  <option value="1">Gerente</option>
  <option value="2">Operador</option>
</select>
  </div>
  <div class="col-12">
  <button type="submit" class="btn btn-primary">Salvar</button>
  </div>
</form>
</div>
<?php
include('Footer.php');

?>