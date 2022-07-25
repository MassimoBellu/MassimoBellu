<?php

// https://www.php.net/manual/fr/function.include.php
// include() prend en argument un fichier
// le fichier est lu par PHP, il est interprété
// le résultat de la lecture du fichier et de son interprétation est ensuite "collé" à la place du include()
// include_once() fonctionne comme include() mais n'inclut le fichier que une fois.
include_once('./inc/header.php');
?>

  <main class="main-container">
    <section>
      <h2 class="page__title">En salle</h2>

      <h3>Les films en salle</h3>
      <ul>
      <?php
        /*
        https://www.php.net/manual/fr/language.types.array.php

        Un tableau permet de regrouper des données dans une seule variable.
       
        Pour déclarer un tableau :
        - on utilise le caractère crochet droit ouvrant [
        - on liste les valeurs séparées par une virgule
        - on ferme le tableau par un crochet droit fermant ]
       
        Par défaut le premier indice / index d'un tableau est 0, le suivant est 1...

        Le premier indice du tableau est 0.
        Le dernier indice = taille du tableau (nombre d'éléments) - 1
       */
        
        // contient une liste de films actuellement en salle
        $films = [
            /* indice : 0 */ 'Divergrante',
            /* indice : 1 */ 'Batman',
            /* indice : 2 */ 'Pretty woman',
            /* indice : 3 */ 'Le confessionnal',
            /* indice : 4 */ 'Leon'
        ];

        for ($indiceFilm = 0; $indiceFilm < 5; $indiceFilm++) {
            echo '<li>' . $films[$indiceFilm] . '</li>';
        }

        /*
        Parcours du tableau avec la boucle while
        $indiceFilm = 0;
        while ($indiceFilm < 5) {
            echo $films[$indiceFilm] . '<br>';
            $indiceFilm++;
        }*/
      ?>
      </ul>

    </section>
  </main>

<?php
include_once('./inc/footer.php');
?>
