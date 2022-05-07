<?php 

$primax=$_GET('texte');
?>

<div class="mangareponse">
<div class="row">
    

  <?php
  $nom = $_GET['texte'];
  $manga = new PDO('mysql:host=localhost;dbname=sae203;charset=UTF8;', 'sae203', 'Aureliendu1230');
  $mabd->query('SET NAMES utf8;');
  $req = "SELECT * FROM manga 
              INNER JOIN auteurs 
              ON manga._auteur_id = auteurs.auteur_id
              WHERE auteur_nom LIKE '%" . $nom . "%'" ;
 echo $req;
 $resultat = $mabd->query($req);

    
    
    
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
    ?>
</div>

</div>