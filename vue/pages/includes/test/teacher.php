<?php
require_once $_SERVER['DOCUMENT_ROOT']."/controller/courses/get_test_xml.php";
//require_once $_SERVER['DOCUMENT_ROOT']."/controller/courses/update_test.php";
$id=$_GET["id"];
$test = get_test_xml($id); // récupérer le test depuis la base de données
ob_start();
echo "<input type='hidden' id='courseid' value='$id' >";
?>

<style>
  #question-container {
    display: flex;
    flex-direction: column;
    padding: 1rem;
  }
  .question {
    display: flex;
    flex-direction: column;
    border: 1px solid var(--color-1);
    box-sizing: border-box;
    margin: 0.5rem;
    padding: 1rem;
    padding-top: 0;
  }
  .question button {
    color: var(--color-1);
    background-color: var(--color-4);
    position: relative;
    left: 97%;
    width: 2rem;
    height: 2rem;
    margin-bottom: 0.5rem;
    text-align: center;
    font-size: 2rem;
    border: none;
    cursor: pointer;
  }
  .question textarea {
    height: 6rem;
    color: var(--color-1);
    background-color: var(--color-4);
  }
  .question ul {
    display: flex;
    flex-direction: column;
    list-style-type: none;
  }
  .question ul li {
    display: flex;
    flex-direction: row;
  }
  .question ul li input {
    margin: 0.3rem;
    color: var(--color-1);
    background-color: var(--color-4);
  }
  .question ul li input[type="text"] {
    flex: 1;
  }
  #botdiv {
    display: flex;
    flex-direction: row;
    justify-content: space-around;
  }
  #botdiv input {
    margin: 1rem;
    padding: 1rem;
    color: var(--color-1);
    background-color: var(--color-4);
  }
</style>

<h1> Edition du test </h1>

<form method="post" action="">
  <input type="hidden" name="test_id" value="<?= $id ?>">
  <div id="question-container">
  <?php
  $qcount = 1;
  foreach ($test["question"] as $question) {
    echo '<div class="question" id="q' . $qcount . '">';
    echo '<button type="button" onclick="deletequestion(' . $qcount . ')">&times;</button>';
    echo '<textarea id="q' . $qcount . 'qt" name="q' . $qcount . 'qt" >' . $question["text"] . '</textarea><ul>';
    $acount = 0;
    foreach ($question["answer"] as $answer) {
      echo '<li><input id="q' . $qcount . 'a' . $acount . 'v" name="q' . $qcount . 'a' . $acount . 'v" type="checkbox" ';
      if ($answer['valid'] == 'true') {
        echo 'checked';
      }
      echo ' ><input id="q' . $qcount . 'a' . $acount . 't" name="q' . $qcount . 'a' . $acount . 't" type="text" value="' . $answer["answer"] . '"></li>';
      $acount = $acount + 1;
    }
    echo '</ul></div>';
    $qcount = $qcount + 1;
  }
  ?>
  </div>
  <div id="botdiv">
    <input type="button" value="Ajouter une question" onclick="addquestion()"/>
    <input type="button" onclick="sendData()" value="Enregistrer">
  </div>
</form>

<?= '<script src="../vue/assets/js/edittest.js" onload="inittest(' . $qcount . ')"></script>' ?>

<?php
$content = ob_get_contents();
ob_get_clean();
