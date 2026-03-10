<?php
$membres = ["Maxime"];
$membres[] = "Alice";
$membres[] = "Bob";

$codeSecret = "Tyrolium26";

function verifierAcces($prenom, $motDePasse){
    if($prenom == "Maxime" && $motDePasse == "Tyrolium26"){
        echo "Acces Administrateur accordé a Maxime" . "<br>";
    }elseif($prenom == "Alice" || $prenom == "Bob"){
        echo "Acces utilisateur standard pour $prenom" . "<br>";
    } else{
        echo "Acces refusé pour $prenom" . "<br>";
    }
}

for($i = 0; $i < 3; $i++){
    verifierAcces($membres[$i], $codeSecret);
    echo "..........<br>";
}

foreach($membres as $membre){
    verifierAcces($membre, $codeSecret);
     echo "_-_-_-_-_-_<br>";
}