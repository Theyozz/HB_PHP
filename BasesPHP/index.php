<?php
$maVariable = "Bonjour"; // String
$age = 25; // Int
$OtherVariable = 'Bonjour l\'équipe'; 
$OtherVariable2 = 'Bonjour l\'équipe j\'ai' . $age . ' ans'; 
$OtherVariable2 = "Bonjour l'équipe j'ai $age ans"; 
echo $OtherVariable2;
?>
<br>
<?php
echo $maVariable;



$majeur = true; // Boolean
$priceHT = 23.46; // Float
$hobbies = ["Reading", "Eating", "Sleeping"]; // Array
var_dump($hobbies);
echo $hobbies[2];