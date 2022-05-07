<?php require('head.php'); ?>

<title>Formulaire</title>
<?php require('nav.php'); ?>
<main>
    <div id="formulaire">
        <div class="container">
<form action="reponse_recherche.php" data-parsley-validate>
<p class="fm">
    <label for="prix_mini">Prix mini</label>
    <input type="number" id="prix_mini" name="prix_mini" value="1" data-parsley-type="number">
    <label for="prix_max">Prix max</label>
    <input type="number" id="prix_max" name="prix_max" value="10" data-parsley-type="number">
</p>

<form id="recherche" action="form_recherche.php">
    <label for="real">Entrez un nom d'une oeuvre :</label>
    <input type="search" list="manga" id="real" name="real" />
    <datalist id="mangasearch">
        <option value="One Piece">
        <option value="Demon slayer">
        <option value="Attaque des titans">
        <option value="Baki">
        <option value="Bleach">
        <option value="Naruto">
        <option value="Death Note">
        <option value="Dragon Ball">
        <option value="Haikyu">
        <option value="Fire Force">
        <option value="Black Clover">
    </datalist>
    <input class="btn-btn-primary" type="submit" value="Rechercher" id="submit">
  </form>
</div>
</main>

<?php require('footer.php'); ?>