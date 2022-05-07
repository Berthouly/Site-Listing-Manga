<?php require('../head.php'); ?>
<link href="../styles.css" rel="stylesheet">
<?php require('../nav.php'); ?>
        <h1>Gestion des données</h1>

        <p><a href="table1_new_form.php">Ajouter une bande dessinée</a></p>
        <?php
            require '../lib_crud.inc.php';
            $co=connexionbd();
            afficherListe($co);
            deconnexionbd($co);
       


    ?>

<?php require('../footer.php'); ?>