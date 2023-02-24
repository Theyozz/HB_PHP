<?php
$users = ["Bob","Anna","John"];
$admin = ["Max","Steph","Billy"];
$nbUsers = count($users);
var_dump($nbUsers);

$client = [$users ,$admin];
var_dump($client);

$sortedUsers = sort($users);
var_dump($sortedUsers);
var_dump($users);

$userDesandingOrder = array_reverse($users);
var_dump($userDesandingOrder, $users);
