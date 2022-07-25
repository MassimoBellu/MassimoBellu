<?php

/*
 https://www.php.net/manual/fr/language.types.array.php

 Un tableau permet de regrouper des données dans une seule variable.

 Pour déclarer un tableau :
 - on utilise le caractère crochet droit ouvrant [
 - on liste les valeurs séparées par une virgule
 - on ferme le tableau par un crochet droit fermant ]

 Par défaut le premier indice / index d'un tableau est 0, le suivant est 1...
*/
$listeDeCourses = [
    /* indice = 0 */ 'fond de tarte',
    /* indice = 1 */ 'moutarde',
    /* indice = 2 */ 'tomates',
    /* indice = 3 */ 'mozzarella',
    /* indice = 4 */ 'gruyère'
];

var_dump($listeDeCourses);

// pour accéder à un élément d'un tableau, on utilise le nom du tableau et l'indice de l'élément auquel on souhaite accéder
echo 'Liste de courses :' . PHP_EOL;
echo ' - ' . $listeDeCourses[0] . PHP_EOL;
echo ' - ' . $listeDeCourses[1] . PHP_EOL;
echo ' - ' . $listeDeCourses[2] . PHP_EOL;
echo ' - ' . $listeDeCourses[3] . PHP_EOL;
echo ' - ' . $listeDeCourses[4] . PHP_EOL;

// pour ajouter un élément à un tableau, on utilise la syntaxe $tableau[] = element
$listeDeCourses[] = 'salade';
var_dump($listeDeCourses);

// on peut modifier un élément par son index
$listeDeCourses[0] = 'pate feuilletée';
var_dump($listeDeCourses);

// l'ancienne syntaxe de déclaration des tableaux en PHP (array(...)), elle est strictement équivalente à la syntaxe moderne avec les crochets droits []
$listeDeCourses2 = array(
    'moutarde',
    'huile d\'olives',
    'vinaigre de Xérès'
);
var_dump($listeDeCourses2);

// unset() permet de supprimer un élément d'un tableau en utilisant l'indice de l'élément à supprimer
// https://www.php.net/manual/fr/function.unset.php
// en utilisant unset() les éléments suivants ne sont pas réindexés
unset($listeDeCourses2[0]);
var_dump($listeDeCourses2);

$listeDeCourses2[] = 'mayonnaise';
var_dump($listeDeCourses2);

// parcours / itération du tableau avec une boucle
echo 'Liste de courses :' . PHP_EOL;

for ($indiceDuTableau = 0; $indiceDuTableau < 5; $indiceDuTableau++) {
    echo ' - ' . $listeDeCourses[$indiceDuTableau] . PHP_EOL;
}