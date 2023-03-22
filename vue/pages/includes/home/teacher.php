<?php
  ob_start(); ?>


<div>
  <button id="show-courses"><a href="index.php?p=course">Afficher mes cours</a></button>
  <button id="create-course">Créer un nouveau cours</button>
</div>

<!-- 
  Bouton Créer un nouveau cours ==> modal
  TODO: Ajouter les interactions pour afficher le formulaire de création de cours dans un modal
        s'affichant au clic sur le bouton "Créer un nouveau cours"
-->

<form action="" method="post">
  <h1>Créer un nouveau cours</h1>
  <label for="course-name">Nom du cours :</label>
  <input type="text" name="course-name" id="course-name" required placeholder="Nom du cours">
  <label for="course-desc">Description du cours :</label>
  <textarea name="course-desc" id="course-desc" rows="3" maxlength="65535" placeholder="Description du cours"></textarea>
</form>


<?php
  $content = ob_get_contents();
  ob_get_clean();
