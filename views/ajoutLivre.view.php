<?php 
ob_start(); 
?>

<form method="POST" action="index.php?page=livres/av" enctype="multipart/form-data">
    <div class="form-group">
        <label for="titre">Titre : </label>
        <input type="text" class="form-control" id="titre" name="titre">
    </div>
<br>
    <div class="form-group">
        <label for="nbPages">Nombre de pages : </label>
        <input type="number" class="form-control" id="nbPages" name="nbPages">
    </div>
<br>
   <div class="form-group">
        <label for="image">Image : </label>
        <input type="file" class="form-control-file" id="image" name="image">
   </div>
    <br>
    <button type="submit" class="btn btn-primary">Valider</button>
    <br>
</form>

<?php
$content = ob_get_clean();
$titre = "Ajouter un livre";
require "template.php";
?>