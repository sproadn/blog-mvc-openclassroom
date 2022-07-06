<?php

// Connexion � la base de donn�es
try {
    $bdd = new PDO('mysql:host=localhost;dbname=tp_blog_php', 'sproadn', '1996MeSum05');
} catch (\Exception $e) {
    die("Error: " . $e->getMessage());
}
