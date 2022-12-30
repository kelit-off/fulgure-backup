<?php
// Récupération du terme de recherche
$search = urlencode($_GET['search']);

// Interrogation de Google
$google = file_get_contents("https://www.google.com/search?q=$search");

// Interrogation de Bing
$bing = file_get_contents("https://www.bing.com/search?q=$search");

// Interrogation de Yahoo
$yahoo = file_get_contents("https://www.yahoo.com/search?q=$search");

// Traitement des résultats (par exemple, extraction des titres et des liens)
// et affichage des résultats
?>
