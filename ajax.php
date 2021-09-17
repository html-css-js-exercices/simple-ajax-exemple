<?php
/**
 * Exemples de json
 * @link https://support.oneskyapp.com/hc/en-us/articles/208047697-JSON-sample-files
 */


/**
 * Récuperer le contenu du fichier json en local
 * On peut tres bien aussi faire une requete sur une url ;)
 */
$contenu_du_fichier = file_get_contents('flux.json');

/**
 * préciser que le retour est au format json
 * @link https://stackoverflow.com/questions/4064444/returning-json-from-a-php-script
 */
header('Content-Type: application/json; charset=utf-8');

// envoyer
echo $contenu_du_fichier;

// pour éviter d'avoir un zero en fin du echo
die;
