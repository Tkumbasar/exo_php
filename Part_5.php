<?php 
// exo 1 part 5
// $mois=["janvier","février","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","décembre"];
//exo 2 part 5
// $mois=["janvier","février","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","décembre"];
// echo $mois[2]
//exo 3 part 5
// $mois=["janvier","février","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","décembre"];
//  echo $mois[5]
//exo 4 part 5
// $mois=["janvier","février","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","décembre"];
// $mois[7]="août";
// var_dump($mois);
//exo 5 part 5
$departements=[

'Aisne' => 02,
'Nord' => 59,
'Oise'=> 60,
'Pas-de-Calais'=>62,
'Somme'=> 80,

];

// var_dump($departement);

// //exo 6 part 5


// //echo $departement['Nord'];

// // exo 7 part 5

// $departement=['Reims'=> 51,];
// var_dump($departement);

//exo 8 part 5

// foreach ($mois as $moi) {
//     echo $moi." ";
// }

// exo 9 part 5

// foreach ($departements as  $departement) {
//     echo $departement;
// }

// exo 10 part 5 
foreach ($departements as $key => $departement) {
    echo "<p>Le département " . $departement . " a le numéro " . $key . "</p>";

}

?>