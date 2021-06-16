<?php
include('Header.php');
?>
<div class="container">

<form action="../Controller/InserirUsuario.php" method="POST" class="row g-3">
<div class="col-md-12">
    <label for="inputlogin" class="form-label">E-mail</label>
    <input type="e-mail" name="fIlme" class="form-control" id="inputlogin">
  </div>
  <div class="col-md-12">
    <label for="inputsenha" class="form-label">Senha</label>
    <input type="password" name="genero" class="form-control" id="inputsenha">
  </div>
<div class="col-12">
    <botton type="submit" class="btn btn-primary">Salvar</button>
</div>
</form>
</div>

<?php
include('Footer.php');
?>