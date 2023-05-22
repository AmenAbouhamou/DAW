<?php
if(!isset($_SESSION))
{
    session_start();
}
require_once $_SERVER['DOCUMENT_ROOT'] . '/controller/forum/get_forums.php';
//print_r($_SESSION);
$forums=get_forums();
//var_dump($forums);

$title = "List";
/////////// ---> passer par les controllers pour les requêtes à la BDD
ob_start();
foreach ($forums as $row) {
    echo "<p>ID FORUM: " . $row["ID"] . "</p>";
    echo "<p>Titre : " . $row["TITLE"] . "</p>";
    echo "<p>Date de création : " . $row["CREATED_AT"] . "</p>";
    $script="window.location='/vue/index.php?p=forum&id=".$row["ID"]."'";
    echo "<button onclick=$script><img src='/vue/assets/img/view.gif' width='20em' height='20em'></button>";
    echo '<br>';
}
?>
<div class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <form method="post" action='../../../../controller/forum/create_thread.php'>
            <label for="course" class="form-label">Course </label>
            <input type="text" name="course" class="form-input">
            <label for="titre" class="form-label">Titre </label>
            <input type="text" name="titre" class="form-input">
            <label for="contenu" class="form-label">Contenu </label>
            <textarea name="contenu" class="form-textarea"></textarea>
            <button class="buttonlist" onclick="openModal()">Créer un nouveau thread</button>
        </form>
    </div>
</div>

<?php
$content = ob_get_contents();
ob_get_clean();
