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
      <h2 class="page__title">Bienvenue au Cinéma Rodia</h2>
    </section>
  </main>

<?php
include_once('./inc/footer.php');
?>
