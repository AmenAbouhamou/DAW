<?php
require_once $_SERVER['DOCUMENT_ROOT']."/controller/courses/get_test_xml.php";
$id=$_GET["id"];
$test = get_test_xml($id); // xml
//var_dump($test);
ob_start();
?>

<style>
    form {
        display: flex;
        flex-direction: column;
        padding: 1rem;
    }
    form div {
        border: 1px solid var(--color-1);
        color: var(--color-1);
        background-color: var(--color-4);
        box-sizing: border-box;
        margin: 0.5rem;
        padding: 1rem;
    }
    form div ul {
        list-style: none;
    }
    form div ul li {
        margin: 0.5rem;
    }
    form div input {
        margin: 0.3rem;
    }
    form input[type="button"] {
        margin: auto;
        margin-top: 0.7rem;
        width: 10rem;
        height: 3rem;
        color: var(--color-1);
        background-color: var(--color-4);
        cursor: pointer;
    }
</style>

<h1>Test</h1>

<form>
    <?php
    $qcount = 1;
    foreach ($test["question"] as $question) {
        echo '<div class="question" id="q' . $qcount . '">';
        echo '<p>' . $qcount . '. ' . $question["text"] . '</p>';
        echo '<ul>';
        foreach ($question["answer"] as $answer) {
            echo '<li><label><input type="checkbox" ';
            if ($answer['valid'] == 'true') {
                echo 'class="ansv"';
            } else {
                echo 'class="ansf"';
            }
            echo '>' . $answer["answer"] . '</label></li>';
        }
        echo '</ul><p class="ans"></p></div>';
        $qcount = $qcount + 1;
    }
    ?>
    <input type="button" value="Valider" onclick="checktest();">
</form>

<script src="../vue/assets/js/checktest.js"></script>

<?php
$content = ob_get_contents();
ob_get_clean();
// done
