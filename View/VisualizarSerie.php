<?php
include_once("../Model/BancoUsuario.php");
liberaAcesso();
include_once("Header.php");
include_once("../Model/BancoSerie.php");
include_once("../Model/Conexao.php");
?>
<div class="container">
<form action="" method="post" class="row g-3">
    <div class="col-12">
        <label class="form-label"> Digite o nome da Série</label>
        <input type="text" required class="form-control" name="serie">
    </br>
    <div class="col-12">
        <label class="form-label"> Escolha o gênero do filme</label>
        <input type="text" required class="form-control" name="serie">
    </br>
    <div class="col-12">
        <label class="form-label"> Digite o ano da serie</label>
        <input type="number" min="1900" max="2050" required class="form-control" name="serie">
    </br>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Localizar</button>
    </div>
    </div>
</form>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Série</th>
      <th scope="col">Temporada</th>
      <th scope="col">Episódio</th>
      <th scope="col">Gênero</th>
      <th scope="col">Capa</th>
      <th scope="col">Alterar</th>
      <th scope="col">Deletar</th>
    </tr>
  </thead>
  <tbody>
  <?php
    $serie = isset($_POST["serie"])? $_POST["serie"]:"";
    $dado = visuNomeSerie($conexao, $serie);
    foreach($dado as $dados) :
  ?>
    <tr>
      <th scope="row"><?=$dados["codserie"]?></th>
      <td><?=$dados["nomeserie"]?></td>
      <td><?=$dados["temporadaserie"]?></td>
      <td><?=$dados["episodioserie"]?></td>
      <td><?=$dados["generoserie"]?></td>
      <td><img src="<?=$dados['capaserie']?>" width="50"></td>
      <td>
        <a class="btn btn-primary" href="AlterarSerie.php?codigo=<?=$dados["codserie"]?>">Alterar</a>
        </td>
        <td>
        <form action="../Controller/DeleteSerie.php" method="post">
            <input type="hidden" name="codserie" value="<?=$dados["codserie"]?>">
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