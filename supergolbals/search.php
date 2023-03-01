<?php 
// Recherche utilisateur par son nom
// https://localhost2334/search?q=mick
if (!isset($_GET['q'])) {
    echo 'Recherche incorrecte';
}

// Récupération des données
require_once 'data/users.php';

// Récupération du paramètre d'URL
['q'=> $search] = $_GET; 

// Je recherche les résultats de la recherche
$results = array_filter($users, fn ($user) => str_contains($user['name'], $search ));

var_dump($results);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats de la recherche</title>
</head>
<body>
    <h1>Résultats de la Recherche <?php echo $search ?></h1>

    <h2> <?php echo count($results) ?> </h2>

</body>
</html>