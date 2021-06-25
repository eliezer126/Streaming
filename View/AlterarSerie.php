<?php
include('Header.php');
include_once('../Model/Conexao.php');
include_once('../Model/BancoSerie.php');
include_once('../Model/BancoUsuario.php');
liberaAcesso();
$codigo = $_GET['codigo'];

$resul = visuCodigoSerie($conexao, $codigo);
$serie = mysqli_fetch_assoc($resul);
?>
<div class="container">
<form action="../Controller/AlteraSerie.php" method="post" class="row g-3">
<div class="col-md-1">
    <label for="inputcodigo" class="form-label">Código</label>
    <input type="text" readonly value="<?=$serie['codserie']?>" name="codserie" class="form-control" id="inputcodigo">
  </div>
  <div class="col-md-8">
    <label for="inputserie" class="form-label">Série</label>
    <input type="text" value="<?=$serie['nomeserie']?>" name="serie" class="form-control" id="inputserie">
  </div>
  <div class="col-md-3">
    <label for="inputtemporada" class="form-label">Temporada</label>
    <input type="text" name="temporada" value="<?=$serie['Temporadaserie']?>" class="form-control" id="inputtemporada">
  </div>
  <div class="col-md-2">
    <label for="inputepisodio" class="form-label">Episódio</label>
    <input type="number" name="episodio" value="<?=$serie['episodioserie']?>" class="form-control" id="inputepisodio">
  </div>
  <div class="col-md-4">
    <label for="inputgenero" class="form-label">Gênero</label>
    <input type="number" name="genero" value="<?=$serie['generoserie']?>" class="form-control" id="inputgenero">
  </div>
  <div class="col-md-10">
    <label for="inputCapa" class="form-label">Capa</label>
    <input type="text" name="capa" value="<?=$sereie['capaserie']?>" class="form-control" id="inputCapa">
  </div>
  <div class="col-12">
    <label for="inputUrl" class="form-label">Url</label>
    <input type="text" name="url" value="<?=$serie['urlserie']?>" class="form-control" id="inputUrl" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Alterar</button>
  </div>
</form>
</div>
<?php
include('Footer.php');
?>