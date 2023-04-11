<?php 
ob_start(); 
?>

<table id="tablelis" class="table text-center">
    <tr class="table-dark">
        <th>Image</th>
        <th>Titre</th>
        <th>Nombre de pages</th>
        <th colspan="2">Actions</th>
    </tr>
    <?php 
    for($i=0; $i < count($livres);$i++) : 
    ?>
    <tr>
        <td class="align-middle"><img src="public/images/<?= $livres[$i]->getImage(); ?>" width="60px;"></td>
        <td class="align-middle"><a href="index.php?page=livres/l/<?= $livres[$i]->getId();?>"><?= $livres[$i]->getTitre(); ?></a></td>
        <td class="align-middle"><?= $livres[$i]->getNbPages(); ?></td>
        <td class="align-middle"><a href="index.php?page=livres/m/<?= $livres[$i]->getId();?>" class="btn" id="buttmod">Modifier</a></td>
        <td class="align-middle">
            <form method="POST" action="index.php?page=livres/s/<?= $livres[$i]->getId();?>" onSubmit="return confirm('Voulez-vous vraiment supprimer le livre?');">
            <button class="btn btn-danger" type="submit">Supprimer</button>
        </form>
        </td>
    </tr>
    <?php endfor; ?>
</table>
<a href="index.php?page=livres/a" id="buttli" class="btn btn-success d-block">Ajouter</a>

<?php
$content = ob_get_clean();
$titre = "Les livres de la bibliothèque";
require "template.php";
?>