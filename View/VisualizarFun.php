<?php
include_once("../Model/BancoUsuario.php");
liberaAcesso();
include_once("Header.php");
include_once("../Model/BancoFuncionario.php");
include_once("../Model/Conexao.php");
?>
<div class="container">
<form action="" method="post" class="row g-3">
    <div class="col-12">
        <label class="form-label"> Digite o nome do funcionário</label>
        <input type="text" required class="form-control" name="funcionario">
    </br>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Localizar</button>
    </div>
    </div>
</form>

<table class="table table-success table-striped" id="tabela">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Funcionario</th>
      <th scope="col">Telefone</th>
      <th scope="col">Função</th>
      <th scope="col">Apagar</th>
    </tr>
  </thead>
  <tbody>
  <?php
    $funcionario = isset($_POST["funcionario"]) ? $_POST["funcionario"]:"";
    $dado = visuNomeFuncionario($conexao, $funcionario);
    foreach($dado as $dados) :
  ?>
    <tr>
      <th scope="row"><?=$dados["codfun"]?></th>
      <td><?=$dados["nomefun"]?></td>
      <td><?=$dados["fonefun"]?></td>
      <td><?=$dados["funcaofun"]?></td>
        <td>
        <form action="../Controller/DeleteFuncionario.php" method="post">
            <input type="hidden" name="codfun" value="<?=$dados["codfun"]?>">
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