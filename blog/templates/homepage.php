<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Le blog de l'AVBN</title>
    <link href="style.css" rel="stylesheet" />
</head>

<body>
    <?php $title = "Le blog de l'AVBN"; ?>

    <?php ob_start(); ?>

    <h1>Le super blog de l'AVBN !</h1>
    <p>Derniers billets du blog :</p>

    <?php $content = ob_get_clean(); ?>
    <?php require('layout.php') ?>
</body>

</html>