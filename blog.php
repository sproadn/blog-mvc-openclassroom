<?php

include_once('modele/connexion_sql.php');

if (!isset($_GET['section']) OR $_GET['section'] == 'index')
{
    include_once('controleur/blog/index.php');
}
// https://getcomposer.org/download/2.3.8/composer.phar
