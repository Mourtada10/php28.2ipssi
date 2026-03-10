<?php
$projets = ["site vitrine"];
$projets[] = "intranet";
$projets[] = "application mobile";

for($i = 0; $i < 3; $i++){
    echo $projets[$i] ."<br>";
}

$j = 0;
while($j < 3){
    echo $projets[$j] . "<br>";
    $j++;
}

foreach($projets as $projet){
    echo $projet . "<br>";
}
?>