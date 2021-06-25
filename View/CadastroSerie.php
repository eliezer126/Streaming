<?php
include('Header.php');
include_once("../Model/BancoUsuario.php");
liberaAcesso();
?>
<div class="container">
<form action="../Controller/InserirSerie.php" method="get" class="row g-3">
  <div class="col-md-8">
    <label for="inputserie" class="form-label">Séries</label>
    <input type="text" name="serie" class="form-control" id="inputFilme">
  </div>
  <div class="col-md-4">
    <label for="inputgenero" class="form-label">Gênero</label>
    <input type="text" name="genero" class="form-control" id="inputgenero">
  </div>
  <div class="col-md-8">
    <label for="inputtemporada" class="form-label">Temporada</label>
    <input type="text" name="temporada" class="form-control" id="inputtemporada">
  </div>
  <div class="col-md-4">
    <label for="inputepisodio" class="form-label">Episódio</label>
    <input type="text" name="episodio" class="form-control" id="inputepisodio">
  </div>
  <div class="col-md-12">
    <label for="inputcapa" class="form-label">Capa</label>
    <input type="text" name="capa" class="form-control" id="inputcapa">
  </div>
  <div class="col-12">
    <label for="inputurl" class="form-label">Url</label>
    <input type="text" name="url" class="form-control" id="inputurl" placeholder="Apartment, studio, or floor">
  </div>
  
  <a href="#"><button type="submit" class="btn btn-primary">Cadastro</button></a>

</form>
</div>
<?php
include('Footer.php');
?>