<?php

require_once "../controller/user/is_connected.php";
require_once "../controller/user/is_student.php";
  if (is_connected()) {header('Location: index.php?p=home');}
  $title = "Login";
  ob_start(); ?>

<form id="login" action="../../controller/user/login.php" method="post">
  <h1>Login</h1>
  <label for="l_username">Nom d'utilisateur :</label>
  <input type="text" name="l_username" id="l_username" required placeholder="Nom d'utilisateur">
  <label for="l_password">Mot de passe :</label>
  <input type="password" name="l_password" id="l_password" required placeholder="Mot de passe">
  <input type="submit" value="Login">
</form>

<button id="show-register">Créer un nouveau compte</button>

<form id="register" method="post" action="../../controller/user/create_user.php" >//ajax controllo username valido
  <h1>Register</h1>
  <label for="r_firstname">Prénom :</label>
  <input type="text" name="r_firstname" id="r_firstname" required placeholder="Prénom">
  <label for="r_lastname">Nom :</label>
  <input type="text" name="r_lastname" id="r_lastname" required placeholder="Nom">
  <label for="r_username">Nom d'utilisateur :</label>
  <input type="text" name="r_username" id="r_username" required placeholder="Nom d'utilisateur">
  <label for="r_password">Mot de passe :</label>
  <input type="password" name="r_password" id="r_password" required placeholder="Mot de passe">
  <label for="r_role">Vous êtes :</label>
  <select name="r_role" id="r_role" required>
    <option value="student">Étudiant</option>
    <option value="teacher">Professeur</option>
  </select>
  <input type="submit" value="Register">
</form>

<!-- 
  TODO:
    - Ajouter les interactions avec le serveur
    - Ajouter l'UI/UX pour afficher le formulaire d'enregistrement dans un modal au clic sur le bouton "Créer un nouveau compte"
-->


<?php
  $content = ob_get_contents();
  ob_get_clean();
