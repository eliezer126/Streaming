<?php
include('Header.php');
include_once('../Model/Conexao.php');
include_once('../Modeel/BancoFilme.php');

$codigo = $_GET["codigo"];

$resul = visuCodigoFilme($conexao, $codigo);
$filme = mysqli_fetch_assoc($resul);
?>
<div class="container">
<form action="../Controller/AlteraFilme.php" method="post" class="row g-3">
<div class="col-md-1">
    <label for="inputcodigo" class="form-label">Código</label>
    <input type="text" readonly value="<?=$filme['nomefil']?>" name="codfil" class="form-control" id="inputcodigo">
  </div>
  <div class="col-md-8">
    <label for="inputFilme" class="form-label">Filme</label>
    <input type="text" value="<?=$filme['nomefil']?>" name="fIlme" class="form-control" id="inputFilme">
  </div>
  <div class="col-md-3">
    <label for="inputGênero" class="form-label">Gênero</label>
    <input type="text" name="genero" value="<?=$filme['generofil']?>" class="form-control" id="inputGênero">
  </div>
  <div class="col-md-2">
    <label for="inputAno" class="form-label">Ano</label>
    <input type="number" name="ano" value="<?=$filme['anofil']?>" class="form-control" id="inputAno">
  </div>
  <div class="col-md-10">
    <label for="inputCapa" class="form-label">Capa</label>
    <input type="text" name="capa" value="<?=$filme['capafil']?>" class="form-control" id="inputCapa">
  </div>
  <div class="col-12">
    <label for="inputUrl" class="form-label">Url</label>
    <input type="text" name="url" value="<?=$filme['urlfil']?>" class="form-control" id="inputUrl" placeholder="Apartment, studio, or floor">
  
  <div class="form-floating">
  <textarea class="form-control" name="sinopse" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"><?=$filme['sinopsefil']?></textarea>
  <label for="floatingTextarea2">Sinopse</label>
</div>
 
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Alterar</button>
  </div>
</form>
</div>
<?php
include('Footer.php');
?>