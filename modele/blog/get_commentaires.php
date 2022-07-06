<?php
function get_commentaires($idBillet)
{
    global $bdd;
    $data = [];
    $idBillet = (int) $idBillet;
    $req = $bdd->prepare('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh%imin%ss\') AS date_creation FROM billets WHERE id = :id');
    $req->bindParam(':id', $idBillet, PDO::PARAM_INT);
    $req->execute();
    $billet = $req->fetch();
    $data['billet'] = $billet;

    $res = $bdd->prepare("SELECT id, auteur, commentaire, DATE_FORMAT(date_commentaire, '%d/%m/%Y à %Hh%imin%ss') AS
date_commentaire FROM commentaires where id_billet = :idBillet ORDER BY date_commentaire DESC");
    $res->bindParam(':idBillet', $idBillet, PDO::PARAM_INT);
    $res->execute();
    $commentaires = $res->fetchAll();
    $data['commentaires'] = $commentaires;

    return $data;
}
