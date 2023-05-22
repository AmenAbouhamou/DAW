<?php
$title = "Register";
ob_start();
?>

<style>
  .divprinc {
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    left: 25%;
    width: 30rem;
    height: 35rem;
    background-color: var(--color-2);
  }

  .titre {
    text-align: center;
    font-family: system-ui;
    color: var(--color-1);
  }

  input[type="text"],
  input[type="password"] {
    padding: 15px;
    margin: 10px auto;
    display: block;
    border: none;
    width: 90%;
    font-family: Arial, sans-serif;
    font-size: 14px;
    color: var(--color-1);
    background-color: var(--color-4);
  }

  input[type="submit"] {
    background-color: var(--color-3);
    color: var(--color-1);
    border-radius: 5px;
    padding: 15px;
    margin-left: 5px;
    font-family: Arial, sans-serif;
    font-size: 16px;
    cursor: pointer;
    margin-top: 55px;
    width: 90%;
    margin-left: 25px;
  }

  input[type="submit"]:hover {
    background-color: var(--color-1);
    color: var(--color-4);
  }

  label {
    font-size: 16px;
    font-family: Arial, sans-serif;
    margin-bottom: 10px;
    margin-top: 15px;
    margin-left: 20px;
    text-align: center;
  }

  select {
    margin-left: 20px;
    border: 1px solid;
    border-radius: 2px;
    padding: 8px;
    font-size: 14px;
    font-family: Arial, sans-serif;
    color: var(--color-1);
    background-color: var(--color-4);
  }

</style>


<div class="divprinc">
  <form class="register" method="post" action="../../controller/user/create_user.php">
    <h2 class="titre">Register<br></h2>
    <input type="text" name="r_lastname" id="r_lastname" required placeholder="Nom">
    <input type="text" name="r_firstname" id="r_firstname" required placeholder="Prénom">
    <input type="text" name="r_username" id="r_username" required placeholder="Nom d'utilisateur">
    <input type="password" name="r_password" id="r_password" required placeholder="Mot de passe">
    <label for="r_role">Vous êtes :</label>
    <select name="r_role" id="r_role" required>
      <option value="student">Étudiant</option>
      <option value="teacher">Professeur</option>
    </select>
    <input type="submit" value="Register">
  </form>
</div>

<?php
$content = ob_get_contents();
ob_get_clean();
