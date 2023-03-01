<?php 
// Recherche utilisateur par son nom
// https://localhost2334/search?q=mick

// Récupération des données
require_once 'data/users.php';

// Récupération du paramètre d'URL
['q'=> $search] = $_GET; 