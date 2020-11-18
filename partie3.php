<?php

//------------------- EXERCICE 1 ---------------------

$mois = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aoùt', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];




//------------------- EXERCICE 2 ---------------------

// echo $mois[5];




//------------------- EXERCICE 3 ---------------------

// foreach($mois as $unMois)
// {
//     echo $unMois . "<br>";
// }


//------------------- EXERCICE 3 ---------------------

$departements = [
    "02" => "Aisne",
    "59" => "Nord",
    "60" => "Oise",
    "62" => "Pas de calais",
    "80" => "Somme"
];

// foreach($departements as $unDepart)
// {
//     echo $unDepart . "<br>";
// }



//------------------- EXERCICE 4 ---------------------


foreach($departements as $key => $value)
{
    echo "Le département " . $value . " a le numéro " . $key . "<br>";
}



?>