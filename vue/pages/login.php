<?php
require_once $_SERVER['DOCUMENT_ROOT']."/controller/user/is_connected.php";
require_once $_SERVER['DOCUMENT_ROOT']."/controller/user/is_student.php";
if (is_connected()) {header('Location: index.php?p=home');}
$title = "Login";
ob_start();
?>


<style>
    .divprincipale {
        display: flex;
    }

    .divimage {
        flex: 1;
        background-color: var(--color-2);
    }

    .divimage>img {
        width: 100%;
        height: 30em;
    }

    .div {
        flex: 1;
        background-color: var(--color-2);
    }

    .divform {
        background-color: var(--color-4);
        width: 80%;
        margin: 45px auto;
        margin-top: -20px;
    }

    .txttitre {
        text-align: center;
        font-family: "sans-serif";
        margin-top: 50px;
    }

    form {
        display: flex;
        flex-direction: column;
        margin-left: 8px;
        margin-top: 5px;
    }

    label {
        font-size: 16px;
        font-family: Arial, sans-serif;
        margin-bottom: 10px;
        margin-top: 10px;
    }

    input[type="text"],
    input[type="password"] {
        padding: 10px;
        margin-left: 5px;
        border: none;
        margin-bottom: 20px;
        width: 90%;
        font-family: Arial, sans-serif;
        font-size: 14px;
        background-color: var(--color-2);
        color: var(--color-1);
    }

    input[type="submit"] {
        background-color: var(--color-1);
        color: var(--color-4);
        border: none;
        padding: 10px;
        margin-left: 5px;
        font-family: Arial, sans-serif;
        font-size: 16px;
        cursor: pointer;
        margin-bottom: 20px;
        width: 90%;
    }

    input[type="submit"]:hover {
        background-color: var(--color-3);
    }

    .lienbas {
        color: var(--color-5);
        text-decoration: none;

        font-family: Arial, sans-serif;
        cursor: pointer;
    }

    .txt {
        text-align: center;
    }

</style>

<div class="divprincipale">
    <div class="divimage">
        <img src="/vue/assets/img/imglogindeux.jpg" alt="Image" style="width:100%; object-fit: cover;">
    </div>
    <div class="div">
        <h2 class="txttitre">Connexion<br><br></h2>
        <div class="divform">
            <form class="login" action="../../controller/user/login.php" method="post">
                <label for="l_username">Nom d'utilisateur*<br></label>
                <input type="text" name="l_username" id="l_username" required
                    placeholder="Entrer votre nom d'utilisateur">
                <label for="l_password">Mot de passe*</label>
                <input type="password" name="l_password" id="l_password" required
                    placeholder="Entrer votre mot de passe">
                <input type="submit" value="Login">
            </form>

        </div>
        <p class="txt"> <a href="register.php" id="lienbas">Mot de passe oublié ?</a></p>

        <p class="txt"> <a href="http://localhost/vue/index.php?p=register" id="lienbas">Vous n'avez pas de compte ?</a>
        </p>

    </div>
</div>


<!---->
<!--    <form id="login" action="../../controller/user/login.php" method="post">-->
<!--        <h1>Login</h1>-->
<!--        <label for="l_username">Nom d'utilisateur :</label>-->
<!--        <input type="text" name="l_username" id="l_username" required placeholder="Nom d'utilisateur">-->
<!--        <label for="l_password">Mot de passe :</label>-->
<!--        <input type="password" name="l_password" id="l_password" required placeholder="Mot de passe">-->
<!--        <input type="submit" value="Login">-->
<!--    </form>-->
<!---->
<!--    <button id="show-register">Créer un nouveau compte</button>-->
<!---->
<!--    <form id="register" method="post" action="../../controller/user/create_user.php" >-->
<!--        <h1>Register</h1>-->
<!--        <label for="r_firstname">Prénom :</label>-->
<!--        <input type="text" name="r_firstname" id="r_firstname" required placeholder="Prénom">-->
<!--        <label for="r_lastname">Nom :</label>-->
<!--        <input type="text" name="r_lastname" id="r_lastname" required placeholder="Nom">-->
<!--        <label for="r_username">Nom d'utilisateur :</label>-->
<!--        <input type="text" name="r_username" id="r_username" required placeholder="Nom d'utilisateur">-->
<!--        <label for="r_password">Mot de passe :</label>-->
<!--        <input type="password" name="r_password" id="r_password" required placeholder="Mot de passe">-->
<!--        <label for="r_role">Vous êtes :</label>-->
<!--        <select name="r_role" id="r_role" required>-->
<!--            <option value="student">Étudiant</option>-->
<!--            <option value="teacher">Professeur</option>-->
<!--        </select>-->
<!--        <input type="submit" value="Register">-->
<!--    </form>-->

<!--
      TODO:
        - Ajouter les interactions avec le serveur
        - Ajouter l'UI/UX pour afficher le formulaire d'enregistrement dans un modal au clic sur le bouton "Créer un nouveau compte"
    -->


<?php
$content = ob_get_contents();
ob_get_clean();
