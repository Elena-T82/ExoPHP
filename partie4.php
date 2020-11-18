<?php

//------------------- EXERCICE 1 ---------------------

// $parametre = "Coucou c'est moi.";

// function exo1($test)
// {
//     return $test;
// }

// echo exo1($parametre);




//------------------- EXERCICE 2 ---------------------

// $intro = "Coucou c'est moi";
// $name = "Eléna Tasquier";

// function exo2($intro, $name)
// {
//     return $intro . ", " . $name;
// }

// echo exo2($intro, $name);





//------------------- EXERCICE 3 ---------------------

// $nombre1 = 1;
// $nombre2 = 2;


// function exo3($nb1, $nb2)
// {
//    if($nb1 > $nb2)
//    $resultat = "Le premier nombre est plus grand.";
//    else if($nb1 < $nb2)
//    $resultat = "Le premier nombre est plus petit.";
//    else if($nb1 == $nb2)
//    $resultat = "Les deux nombres sont identiques.";

//    return $resultat;
// }

// echo exo3($nombre1, $nombre2);



//------------------- EXERCICE 4 ---------------------

// $nom = "Tasquier";
// $prenom = "Eléna";
// $age = 21;

// function exo4($nom, $prenom, $age)
// {
//     $resultat = "Bonjour " . $prenom . " " . $nom . ", tu as " . $age . " ans.";

//     return $resultat;
// }

// echo exo4($nom, $prenom, $age);




//------------------- EXERCICE 5 ---------------------

// $i = 1;

// while($i <= 299){

//     echo $i . "<br>";
//     $i += 2;

// }



//------------------- EXERCICE 6 ---------------------

$i = 1;

while($i <= 100)
{
    if($i % 3 == 0 && $i % 5 == 0)
    {
        $resultat = "FizzBuzz";
    }
    else if($i % 3 == 0)
    {
        $resultat = "Fizz";
    }
    else if($i % 5 == 0)
    {
        $resultat = "Buzz";
    }
    else
    {
        $resultat = $i;
    }

    echo $resultat . "<br>";

    $i++;
}

?>