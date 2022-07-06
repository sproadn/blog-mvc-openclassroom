<?php

// On demande les 5 derniers comm$commentaire (mod�le)
include_once('modele/blog/get_commentaires.php');
$data = get_commentaires($idBillet);
$billet = $data['billet'];
$commentaires = $data['commentaires'];

if (!empty($billet)) {
    
}
// On effectue du traitement sur les donn�es (contr�leur)
// Ici, on doit surtout s�curiser l'affichage
foreach ($commentaires as $cle => $commentaire) {
    $commentaires[$cle]['auteur'] = htmlspecialchars($commentaire['auteur']);
    $commentaires[$cle]['commentaire'] = nl2br(htmlspecialchars($commentaire['commentaire']));
}

// On affiche la page (vue)

include_once('vue/blog/commentaires.php');
