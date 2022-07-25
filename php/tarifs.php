<?php

// https://www.php.net/manual/fr/function.include.php
// include() prend en argument un fichier
// le fichier est lu par PHP, il est interprété
// le résultat de la lecture du fichier et de son interprétation est ensuite "collé" à la place du include()
// include_once() fonctionne comme include() mais n'inclut le fichier que une fois.
include_once('./inc/header.php');

// les tarifs du cinéma
$tarifPlein = 8.3;
$tarifReduit = 6.8;
$tarifEnfant = 4.5;

?>

  <main class="main-container">
    <section>
      <h2 class="page__title">Tarifs</h2>
      <div class="prices__lists">

        <div class="prices__list">
          <h3 class="prices__list-title">
            A l'unité
          </h3>
          <ul>
            <li class="prices__item">
              <span class="prices__item-desc">Tarif Plein</span> <span class="prices__item-value">8,30 &euro;</span>
            </li>
            <li class="prices__item">
              <span class="prices__item-desc">Tarif Réduit</span> <span class="prices__item-value">6,80 &euro;</span>
            </li>
            <li class="prices__item">
              <span class="prices__item-desc">Tarif Enfant</span> <span class="prices__item-value">4,50 &euro;</span>
            </li>
            <li class="prices__item">
              <span class="prices__item-desc">Supplément 3D</span> <span class="prices__item-value">1,00 &euro;</span>
            </li>
          </ul>
        </div>

        <div class="prices__list">
          <h3 class="prices__list-title">
            Abonnement
          </h3>
          <ul>
            <li class="prices__item">
              <span class="prices__item-desc">5 places</span> <span class="prices__item-value">-10%</span>
            </li>
            <li class="prices__item">
              <span class="prices__item-desc">5 places -25ans </span> <span class="prices__item-value">-20%</span>
            </li>
          </ul>
        </div>
      </div>

      <div class="prices__description">
        <p class="prices__description-line">
          <strong class="prices__description-name">Tarif réduit</strong> pour les personnes de + de 60 ans et de moins de 16 ans
        </p>
        <p class="prices__description-line">
          <strong class="prices__description-name">Tarif enfant</strong> pour les - de 14 ans
        </p>
      </div>
    </section>

    <section>
      <h2 class="page__title">Tarif du capitaine</h2>

      <div class="prices__list">
        <h3 class="prices__list-title">
          <span class="prices__item-desc">Age</span> <span class="prices__item-value">Tarif unitaire</span>
        </h3>
        <ul>
          <li class="prices__item">

            <?php
                // $age du capitaine
                $age = 43;

                // le bloc de code de calcul du tarif est copié-collé depuis le challenge 
                $montant = $tarifPlein; // cas général

                // le tarif enfant est un cas particulier 
                if ($age < 14) {
                    $montant = $tarifEnfant;
                }
                // le tarif réduit est un autre cas particulier
                elseif ($age < 16 || $age >= 60) {
                    $montant = $tarifReduit;
                }
            ?>

            <span class="prices__item-desc"><?php echo $age ?> ans</span> <span class="prices__item-value"><?php echo $montant ?> &euro;</span>
          </li>
        </ul>
      </div>

    </section>

    <section>
      <h2 class="page__title">Tarif âge par âge</h2>
      
      <div class="prices">
        <div class="prices__list">
          <h3 class="prices__list-title">
            <span class="prices__item-desc">Age</span> <span class="prices__item-value">Tarif unitaire</span> <span class="prices__item-sub">Abonnement</span>
          </h3>
          <ul>
            <?php
                // Lister tous les âges (1 à 99) et afficher à côté le tarif correspondant
                // écrire une boucle de 1 à 99
                
                // ma boucle commence à la valeur 1
                // la variable $age est mon compteur de boucle
                $age = 1;

                // la boucle while (tant_que) utilise la syntaxe :
                // - mot clé while
                // - paranthèses qui contiennent la condition d'exécution de la boucle
                //   on sort de la boucle (on arrête la boucle) lorsque la condition n'est plus vraie
                // - une accolade ouvrante {
                // - le traitement de boucle (le traitement qui se répète)
                // - accolade fermente } qui indique la fin de la boucle
                while ($age <= 99) {

                    // je reprends le code de calcul du montant selon l'âge
                    $montant = $tarifPlein; // cas général

                    // le tarif enfant est un cas particulier 
                    if ($age < 14) {
                        $montant = $tarifEnfant;
                    }
                    // le tarif réduit est un autre cas particulier
                    elseif ($age < 16 || $age >= 60) {
                        $montant = $tarifReduit;
                    }

                    // affichage du <li> qui contient l'âge et le montant lié à l'âge
                    /*echo '<li class="prices__item">' .
                         '<span class="prices__item-desc">' . $age . ' ans</span> <span class="prices__item-value">' . $montant . ' &euro;</span>' .
                         '</li>';*/
                    
                    $age++;
                }
            ?>
          </ul>
          <ul>
            <?php
                // Lister tous les âges (1 à 99) et afficher à côté le tarif correspondant
                // écrire une boucle de 1 à 99
                

                // la boucle for (pour) utilise la syntaxe :
                // - mot clé for
                // - paranthèses qui contiennent les expressions d'exécution de la boucle :
                //   - initialisation de la boucle
                //   - la condition de poursuite de la boucle
                //     on sort de la boucle (on arrête la boucle) lorsque la condition n'est plus vraie
                //   - l'incrémentation
                // - une accolade ouvrante {
                // - le traitement de boucle (le traitement qui se répète)
                // - accolade fermente } qui indique la fin de la boucle
                for ($age = 1; $age <= 99; $age++) {

                    // je reprends le code de calcul du montant selon l'âge
                    $montant = $tarifPlein; // cas général

                    // le tarif enfant est un cas particulier 
                    if ($age < 14) {
                        $montant = $tarifEnfant;
                    }
                    // le tarif réduit est un autre cas particulier
                    elseif ($age < 16 || $age >= 60) {
                        $montant = $tarifReduit;
                    }

                    // calcul de la réduction des abonnements
                    $prixTotalAbonnement = 5 * $montant;

                    // pour les -25 ans la remise est de 20%
                    // sinon c'est 10%
                    if ($age < 25) {
                        $pourcentRemise = 20;
                    }
                    else {
                        $pourcentRemise = 10;
                    }

                    // calcul de l'abonnement avec la remise selon l'âge
                    $montantAbonnement = $prixTotalAbonnement - ($prixTotalAbonnement * $pourcentRemise / 100) ;


                    // affichage du <li> qui contient l'âge et le montant lié à l'âge
                    echo '<li class="prices__item">' .
                         '<span class="prices__item-desc">' . $age . ' ans</span> <span class="prices__item-value">' . $montant . ' &euro;</span>' .
                         '<span class="prices__item-sub">' . $montantAbonnement . ' &euro;</span>' .
                         '</li>';
                }
            ?>
          </ul>
        </div>
      </div>

    </section>

  </main>

<?php
include_once('./inc/footer.php');
?>
