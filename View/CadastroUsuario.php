<?php
include('Header.php');
?>
<div class="container">

<form action="../Controller/InserirUsuario.php" method="POST" class="row g-3">
<div class="col-md-12">
    <label for="inputlogin" class="form-label">E-mail</label>
    <input type="e-mail" name="e-mail" class="form-control" id="inputlogin">
  </div>
  <div class="col-md-6">
    <label for="inputsenha" class="form-label">Senha</label>
    <input type="password" name="senha" class="form-control" id="inputsenha">
  </div>
  <div class="col-md-6">
    <label for="inputpin" class="form-label">PIN(Número com 5 digitos)</label>
    <input type="number" min="00001" max="99999" name="pin" class="form-control" id="inputpin">
  </div>
<div class="col-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
</div>
</form>
</div>

<?php
include('Footer.php');
?>