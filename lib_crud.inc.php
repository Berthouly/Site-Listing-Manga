<?php

  require 'secretxyz123.inc.php';

  // connexion à la base de données
  function connexionBD()
  {
    // on initialise la variable de connexion à null
    $mabd = null;
    try {
      // on essaie de se connecter
      // le port et le dbname ci-dessous sont À ADAPTER à vos données
      $mabd = new PDO('mysql:host=127.0.0.1;port=3306;
                dbname=sae203;charset=UTF8;', 
                LUTILISATEUR, LEMOTDEPASSE);
      // on passe le codage en utf-8
      $mabd->query('SET NAMES utf8;');
    } catch (PDOException $e) {
      // s'il y a une erreur, on l'affiche
      echo '<p>Erreur : ' . $e->getMessage() . '</p>';
      die();
    }
    // on retourne la variable de connexion
    return $mabd;
  }

  // déconnexion de la base de données
  function deconnexionBD(&$mabd) {
    // on se déconnexte en mettant la variable de connexion à null 
    $mabd=null;
  }
      // affichage du catalogue des BDs
      function afficherCatalogue($mabd) {
        $req = "SELECT * FROM manga
                INNER JOIN auteurs 
                ON manga._auteur_id = auteurs.auteur_id";
        try {
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            // s'il y a une erreur, on l'affiche
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }
       foreach ($resultat as $value) {
          echo '<div class="Manga">'."\n";
          echo '<h3>'.$value['manga_titre'] . '</h3>';
          echo '<img class="mangaphoto" src="images/'.$value['manga_photo'].'">';
          echo '<p class="prix">tarif: ' . $value['manga_prix'] . ' euro </p>';
          echo '<p class="annee">' . $value['manga_annee'] . ' Année</p>';
          echo '<p class="resume"> Résumé: ' . $value['manga_resume'] . ' </p>';
          echo '<p class="editeur"> Editeur: ' . $value['manga_editeur'] . ' </p>';
          echo '<p class="auteur"> de '.$value['auteur_prenom'] .' '. $value['auteur_nom'] .' '. $value['auteur_nationalite'].' </p>';
          echo '</div>'."\n";
        } 
        
        
  

    }
            // affichage de la liste des bds pour la gestion
            function afficherListe($mabd) {
              $req = "SELECT * FROM manga 
                      INNER JOIN auteurs 
                      ON manga._auteur_id = auteurs.auteur_id";
              try {
                  $resultat = $mabd->query($req);
              } catch (PDOException $e) {
                  // s'il y a une erreur, on l'affiche
                  echo '<p>Erreur : ' . $e->getMessage() . '</p>';
                  die();
              }
              echo '<table>'."\n";
              echo '<thead><tr><th>Photo</th><th>Titre</th><th>Prix (&euro;)</th><th>Pages</th><th>Auteur</th><th>Modifier</th><th>Supprimer</th></tr></thead>'."\n";
              echo '<tbody>'."\n";
              foreach ($resultat as $value) {
                  echo '<tr>'."\n";
                  echo '<td><img class="photo" src="../images/'.$value['manga_photo'].'" alt="image_'.$value['manga_id'].'" /></td>'."\n";
                  echo '<td>'.$value['manga_titre'].'</td>'."\n";
                  echo '<td>'.$value['manga_prix'].'</td>'."\n";
                  echo '<td>'.$value['manga_annee'].'</td>'."\n";
                  echo '<td>'.$value['auteur_prenom'].' '.$value['auteur_nom'].'</td>'."\n";
                  echo '<td><a href="table1_update_form.php?num='.$value['manga_id'].'">Modifier</a></td>'."\n";
                  echo '<td><a href="table1_delete.php?num='.$value['manga_id'].'">Supprimer</a></td>'."\n";
                  echo '</tr>'."\n";
              }
              echo '</tbody>'."\n";
              echo '</table>'."\n";

                  // afficher les auteurs (prénom et nom) dans des champs "option"
    function afficherAuteursOptions($mabd) {
    	// on sélectionne tous les auteurs de la table auteurs
        $req = "SELECT * FROM auteurs";
        try {
            $resultat = $mabd->query($req);
        } catch (PDOException $e) {
            // s'il y a une erreur, on l'affiche
            echo '<p>Erreur : ' . $e->getMessage() . '</p>';
            die();
        }
        // pour chaque auteur, on met son id, son prénom et son nom 
        // dans une balise <option>
        foreach ($resultat as $value) {
            echo '<option value="'.$value['auteur_id'].'">'; // id de l'auteur
            echo $value['auteur_prenom'].' '.$value['auteur_nom']; // prénom espace nom
            echo '</option>'."\n";
        }
    }
            }
