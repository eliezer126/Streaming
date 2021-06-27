<?php
include_once("../Model/BancoUsuario.php");
liberaAcesso();
include_once("Header.php");
include_once("../Model/BancoFilme.php");
include_once("../Model/Conexao.php");
?>
<div class="container">
<form action="" method="post" class="row g-3">
    <div class="col-12">
        <label class="form-label"> Digite o nome do filme</label>
        <input type="text" required class="form-control" name="filme">
    </br>
    <div class="col-12">
        <label class="form-label"> Escolha o gênero do filme</label>
        <input type="text" required class="form-control" name="filme">
    </br>
    <div class="col-12">
        <label class="form-label"> Digite o ano do filme</label>
        <input type="number" min="1900" max="2050" required class="form-control" name="filme">
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
      <th scope="col">Filme</th>
      <th scope="col">Gênero</th>
      <th scope="col">Ano</th>
      <th scope="col">Capa</th>
      <th scope="col">Alterar</th>
      <th scope="col">Deletar</th>
    </tr>
  </thead>
  <tbody>
  <?php
    $filme = isset($_POST["filme"]) ? $_POST["filme"]:"";
    $dado = visuNomeFilme($conexao, $filme);
    foreach($dado as $dados) :
  ?>
    <tr>
      <th scope="row"><?=$dados["codfil"]?></th>
      <td><?=$dados["nomefil"]?></td>
      <td><?=$dados["generofil"]?></td>
      <td><?=$dados["anofil"]?></td>
      <td><img src="<?=$dados['capafil']?>" width="50"></td>
      <td>
        <a class="btn btn-primary" href="AlterarFilme.php?codigo=<?=$dados["codfil"]?>">Alterar</a>
        </td>
        <td>
        <form action="../Controller/DeleteFilme.php" method="post">
            <input type="hidden" name="codfil" value="<?=$dados["codfil"]?>">
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