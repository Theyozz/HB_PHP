<?php
$clients = ["Max","Steph","Bob","Sarah"];
$nbClient = count($clients);

// for
echo "<h2>For Loop</h2>";
for ($i = 0 /*, $j = 4 */ ; $i < $nbClient ; $i++){
    echo $clients[$i] . "<br />";
}


// while
echo "<h2>While Loop</h2>";
$i = 0; //  instruction d'initialisation
while ($i < $nbClient ){
    echo $clients[$i]. "<br />";
    $i++; //instruction de pas 
};


// do ...while
echo "<h2>Do while Loop</h2>";
$i = 0; //  instruction d'initialisation
do {
    echo $clients[$i]. "<br />";
    $i++; //instruction de pas
} while($i < $nbClient);


//foreach
echo "<h2>Foreach Loop</h2>";
$clients = ["Bob","Anna","John","vip" => "JCVD"];
foreach ($clients as $index => $client) {
    echo "Index : $index, valeur : $client  <br />";
};