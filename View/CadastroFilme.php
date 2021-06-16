<?php
include('Header.php');
?>
<form action="../Controller/InserirFilme.php" class="row g-3">
  <div class="col-md-8">
    <label for="inputFilme" class="form-label">Filme</label>
    <input type="text" name="fIlme" class="form-control" id="inputFilme">
  </div>
  <div class="col-md-4">
    <label for="inputGênero" class="form-label">Gênero</label>
    <input type="text" name="genero" class="form-control" id="inputGênero">
  </div>
  <div class="col-md-2">
    <label for="inputAno" class="form-label">Ano</label>
    <input type="number" name="ano" class="form-control" id="inputAno">
  </div>
  <div class="col-md-10">
    <label for="inputCapa" class="form-label">Capa</label>
    <input type="text" name="capa" class="form-control" id="inputCapa">
  </div>
  <div class="col-12">
    <label for="inputUrl" class="form-label">Url</label>
    <input type="text" name="url" class="form-control" id="inputUrl" placeholder="Apartment, studio, or floor">
  
  <div class="form-floating">
  <textarea class="form-control" name="sinopse" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
  <label for="floatingTextarea2">Sinopse</label>
</div>
 
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastro</button>
  </div>
</form>
<?php
include('Footer.php');
?>