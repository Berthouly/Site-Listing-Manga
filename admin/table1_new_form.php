<?php require('../head.php'); ?>
<link href="styles.css" rel="stylesheet">
<a href="../index.php">Accueil</a> | <a href="admin.php">Gestion</a>


<?php require('../nav.php'); ?>
	    <h1>Ajouter une bande dessinée</h1>
	    <hr />
        <div class="formtable">
	    <form action="table1_new_valide.php" method="POST" enctype="multipart/form-data">
	        Titre : <input type="text" name="titre" required /><br />
	        Année : <input type="number" name="annee" min="-5000" max="3000" required /><br />
	        Prix : <input type="number" name="prix" min="0.00" max="10000.00" step="0.01" required /><br />
	        Résumé : <textarea name="resume" required></textarea><br />
	        Photo : <input type="file" name="photo" required /><br />
	        Auteur : <select name="auteurs" required>
            </div>
	        <?php
	            require '../lib_crud.inc.php';
	            $co=connexionBD();
	            afficherAuteursOptions($co);
	            deconnexionBD($co);
	        ?>
	        </select><br />
	        <input type="submit" value="Ajouter" />
	    </form>
        <?php require('../footer.php'); ?>