<?php

?>

<div class="row">
<?php

foreach($compagnies as $uneCompagnie){
    ?>
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?=$uneCompagnie['Nom_compagnie'] ?></h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <?php 
}
?>
</div>