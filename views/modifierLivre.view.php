<?php 
ob_start(); 
?>


<form method="POST" action="index.php?page=livres/mv" enctype="multipart/form-data">
    <div class="form-group">
        <label for="titre">Titre : </label>
        <input type="text" class="form-control" id="titre" name="titre" value="<?= $livre->getTitre()?>">
    </div>
<br>
    <div class="form-group">
        <label for="nbPages">Nombre de pages : </label>
        <input type="number" class="form-control" id="nbPages" name="nbPages" value="<?= $livre->getNbPages()?>" >
    </div>
<br>
<h3>Image : </h3>
<img id="imgmod" src="<?= URL ?>public/images/<?= $livre->getImage()?>">
   <div class="form-group">
        <label for="image">Changer l'image : </label>
        <input type="file" class="form-control-file" id="image" name="image">
   </div>
    <br>
    <input type="hidden" name="identifiant" value="<?= $livre->getId()?>">
    <button type="submit" class="btn btn-primary">Valider</button>
    <br>
</form>


<?php
$content = ob_get_clean();
$titre = "Modification du livre : ".$livre->getId();
require "template.php";
?>