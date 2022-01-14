<link rel="stylesheet" href="style.css">
<?php
include "functions.php"


?>
<p>Nombre d'articles : <?php $nb=nbarticle(); echo $nb ?></p>

<p>Nombre d'article par utilisateurs : </p><br>
<?php ArtUser(); ?>

<p>Utilisateur qui a fait le plus d'articles</p>

<?php mostArticle(); ?>

<a href="index.php">retour au site</a>