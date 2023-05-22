<?php
if(!isset($_SESSION))
{
    session_start();
}
$thread_id = $_GET['id'];
echo "<input type='text' id='forumid' value='" . $thread_id . "' style='display:none;'>";

require_once $_SERVER['DOCUMENT_ROOT'] . '/controller/forum/get_messages_forum.php';

//a voir si ID ou DISCUSSION_ID dans table.sql
$messages=get_messages_forum($thread_id);
//var_dump($messages);
ob_start();
foreach ($messages as $row) {
    echo "<p>username : " . $row["USERNAME"] . "</p>";
    echo "<p>ROLE : " . $row["ROLE"] . "</p>";
    echo "<p>Contenu : " . $row["CONTENT"] . "</p>";
    echo "<p>Date de création : " . $row["CREATED_AT"] . "</p>";
    echo '<br>';

    //////// ---> passer par les controllers pour les requêtes au back-end
}
?>


    <form class="form-thread" method="post" action="thread.php">
        <h4 class="centretitre">Nouveau message</h4>
        <label class="form-label" for="nom">Nom :</label>
        <input class="form-input" type="text" id="nom" name="nom" value="<?=$_SESSION["username"]?>" disabled><br>
        <label class="form-label" for="message">Message :</label>
        <textarea class="form-textarea" id="message" name="message"></textarea><br>
        <input class="buttonlist" type="button" onclick="sendMessage()" value="Poster">
    </form>
    <script src='../vue/assets/js/forum.js'></script>
<?php
$content = ob_get_contents();
ob_get_clean();
