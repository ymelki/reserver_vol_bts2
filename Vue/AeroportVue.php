<form method="POST"  action="index.php?uc=aeroport&action=recherche">
  <div class="mb-3">
    <label for="ville" class="form-label">Ville</label>
    <input name="aeroport" type="text" class="form-control" id="ville" >
  </div> 
  <button type="submit" class="btn btn-primary">Rechercher</button>
</form>
<?php 
var_dump($_POST);
?>



<div class="row">
<?php

foreach($aeroport as $unAeroport){
    ?>
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?=$unAeroport['Name'] ?></h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <?php 
}
?>
</div>