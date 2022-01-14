<!-- requetes sql utilisés
pour ajouter un utilisateur dans la base de donnée de puis phpmyadmin
INSERT INTO `user`(`nom`, `mail`, `pswd`) VALUES ('admin','admin@admin.com','admin'); -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>tp</title>
</head>
<body>

    <?php
include ("functions.php");
$users = userlist();
$articles = articleList();

?>

<a href="espaceAdmin.php">espace admin</a>
<hr><p>Les utilisateurs : </p><hr>



<?php foreach ($users as $user) :?>

<div>
    <div class="name">Nom : <?= $user['nom'] ?></div>
    <div class="mail">Email : <?= $user['mail'] ?></div>
</div>
<?php endforeach ?>

<hr><p>Les articles</p><hr>
<?php foreach ($articles as $article) : ?>

<div>
    <div class="name">TITRE : <?= $article['titre'] ?></div>
    <div class="mail">DESCRIPTION : <?= $article['contenu']?></div>
</div>

<?php endforeach ?>
</body>
</html>


