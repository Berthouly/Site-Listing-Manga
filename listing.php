<?php require('head.php'); ?>
<title>Liste Manga</title>
<?php require('nav.php'); ?>
<h1>liste Manga </h1>



<div class="albulm">
  
  <?php
      require 'lib_crud.inc.php';
      $co=connexionBD();
      afficherCatalogue($co);
      deconnexionBD($co);
  ?>

</tbody>
</thead>
</table>
</div>
<?php require('footer.php'); ?>