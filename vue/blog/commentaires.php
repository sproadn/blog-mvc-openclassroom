<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="vue/blog/style.css" rel="stylesheet" type="text/css" />
    <title>commentaires</title>
</head>

<body>
    <a href="blog.php">Retour à la liste des billets</a>
    <?php if (!empty($billet)) { ?>
        <div class="news_container">
            <h3><?php echo $billet['titre'] ?> <em><?php echo ' le ' . $billet['date_creation'] ?></em></h3>
            <div class="news">
                <p><?php echo $billet['contenu'] ?></p>
            </div>
        </div>
        <strong>Commentaires</strong>
        <br><br>
        <hr>
        <?php foreach ($commentaires as $commentaire) : ?>
            <div>
                <strong><?php echo $commentaire['auteur'] ?></strong> <?php echo ' le ' . $commentaire['date_commentaire'] ?>
                <div>
                    <p><?php echo $commentaire['commentaire'] ?></p>
                </div>
            </div>
            <hr>
        <?php endforeach; ?>
    <?php } else {
    ?>
        <p>Aucun billet ne correspond à ce critère</p>
    <?php }
    ?>
</body>

</html>