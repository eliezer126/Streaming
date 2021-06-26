<?php
include_once("../Model/BancoUsuario.php");
liberaAcesso();
include_once("Header.php");
//include_once("../Model/BancoUsuario.php");
include_once("../Model/Conexao.php");
?>
<div class="container">
<form action="" method="post" class="row g-3">
    <div class="col-12">
        <label class="form-label"> Digite o email do usuario</label>
        <input type="text" required class="form-control" name="usuario">
    </br>
    <div class="col-12">
        <label class="form-label">Digite o pin do usuário</label>
        <input type="text" required class="form-control" name="usuario">
    </br>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Localizar</button>
    </div>
    </div>
</form>

<table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Email</th>
      <th scope="col">Pin</th>
      <th scope="col">Deletar</th>
    </tr>
  </thead>
  <tbody>
  <?php
    $codusu = isset($_POST["usuario"])? $_POST["usuario"]:"";
    $dado = visuNomeUsuario($conexao,$codusu);
    foreach($dado as $dados) :
  ?>
    <tr>
      <th scope="row"><?=$dados["codusu"]?></th>
      <td><?=$dados["loginusu"]?></td>
      <td><?=$dados["pinusu"]?></td>
        <td>
        <form action="../Controller/DeleteUsuario.php" method="post">
            <input type="hidden" name="codusu" value="<?=$dados["codusu"]?>">
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>
    <?php
    endforeach;
    ?>
   
  </tbody>
</table>

<?php
include_once("Footer.php");
?>