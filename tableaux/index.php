<?php
// Initialisation d'un tableau avec un élement
$products = [];
// Ajout d'un élement
$products[] = "télévision";
$products[] = "écran";

var_dump($products);

echo $products[1];

// clés personnalisées
$user['name'] =  'John';
$user['age']=26;
var_dump($user);

$admin['name']= "Stéphanie";
$admin['age']=26;
var_dump($admin);

$users = [$user, $admin];
var_dump($users);

$user[]= ['name' => 'Lucie' ,'age' => 20];
var_dump($user);

$users = $admin + $clients;
var_dump($users);




