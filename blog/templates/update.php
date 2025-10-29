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

    <p><a href="index.php">Retour à la liste des billets</a></p>

    <h2>Modifier un commentaire</h2>

    <form action="index.php?action=updateComment&id=<?= $comment->id ?>&postID=<?= $post->identifier ?>" method="post">
        <input type="hidden" name="id" value="<?= $comment->id ?>">
        <p><strong><?= htmlspecialchars($comment->author) ?> </strong>
            le <?= $comment->frenchCreationDate ?> </p>
        <p><?= nl2br(htmlspecialchars($comment->comment)) ?> </p>
        <div>
            <label for="comment">Commentaire</label><br>
            <textarea name="comment" required><?php echo $comment->comment ?></textarea>
        </div>
        <button type="submit">Modifier</button>
    </form>

    <?php $content = ob_get_clean(); ?>
    <?php require('layout.php') ?>
</body>

</html>