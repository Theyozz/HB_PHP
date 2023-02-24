<?php

$clients = ["Max","Steph","Bob","Sarah"];
$nbClient = count($clients);

// for
echo "<h2>For Loop</h2>";
for ($i = 0; $i < $nbClient ; $i++){
    $userDesandingOrder = array_reverse($clients);
    echo $userDesandingOrder[$i] . "<br />";
}

echo "<h2>Do while Loop</h2>";
$i = 0; 
do {
    $clientReverse = array_reverse($clients);
    echo $clientReverse[$i]. "<br />";
    $i++;
} while($i < $nbClient);