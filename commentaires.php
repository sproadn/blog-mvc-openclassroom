<?php

include_once('modele/connexion_sql.php');

if (!empty($_GET['billet'])) {
    $idBillet = (int) $_GET['billet'];
    include_once('controleur/blog/commentaires.php');
}