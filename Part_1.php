

<?php  // la balise ouvrante <?php et qui ce ferme ? > sans espace entre

echo "Hello world";

//// EXO1 partie 1
//Créer une variable name et l'initialiser avec la valeur de votre choix. Afficher son contenu.

$name = "nom";

echo "<p>" .$name. "</p>";

/// EXO 2 partie 1
//Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier. Afficher leur contenu.

$lastName = "alexis";
$firstName = "blabla";
$age = 20 ;

echo "je m'appele " . $lastName . $firstName . "j'ai". $age . "</p>";

/// EXO3 partie 1
///Créer une variable km. L'initialiser à 1. Afficher son contenu.
//Changer sa valeur par 3. Afficher son contenu.
//Changer sa valeur par 125. Afficher son contenu.

$km = 1 ;

echo "p". $km . "</p>";

$km = 3 ;

echo "p". $km . "</p>";

$km = 125;
echo "p". $km . "</p>";


/// EXO4 partie 1
//Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan et les initialiser avec une valeur de votre choix.
//Les afficher.

$string = "un string"; // chaine de character 
$int = 10; // nombre entier
$float = 10.1; // nombre a virgule
$boolean = true ;

echo "<p>".$string .$int.  $float . $vrai ." </p>";

/// EXO5 partie 1
///Créer une variable de type int. L'initialiser avec rien. Afficher sa valeur.
//Donner une valeur à cette variable et l'afficher.

$nombre;

echo $nombre;

$nombre=2;

echo $nombre;

/// EXO6 partie 1
//Créer une variable name et l'initialiser avec la valeur de votre choix.Afficher : "Bonjour" + name + ", comment vas tu ?".

echo "<p> Bonjour " . $name . " comment vas tu ? </p>";

/// EXO7 partie 1
//Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier.
//Afficher : "Bonjour" + lastname + firstname + ",tu as" + age + "ans".

echo "<p> Bonjour " . $lastname . $firstname ." tu as " . $age . " ans </p>";


/// EXO8 partie 1
//Créer 3 variables.
//Dans la première mettre le résultat de l'opération 3 + 4.
//Dans la deuxième mettre le résultat de l'opération 5 * 20.
//Dans la troisième mettre le résultat de l'opération 45 / 5.
//Afficher le contenu des variables.

$nombre0=3+4;

$nombre1=5*20;

$nombre2=45/5;


echo "<p> resultat " . $nombre0 ." ". $nombre1 ." ". $nombre2 ." ". "</p>"

/// FIN PARTIE 1

?>