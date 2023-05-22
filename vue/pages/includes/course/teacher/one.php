<?php
if(!isset($_SESSION))
{
    session_start();
}
require_once $_SERVER['DOCUMENT_ROOT']."/controller/courses/get_course_xml.php";
$id = $_GET['id'];
$course_xml = get_course_xml($id); // xml
ob_start();
$_POST["idcourse"]=$id;
if(isset($_POST["idcourse"])){
    echo $_POST["idcourse"];
}else
    echo "non dispo";
if(isset($_FILES["new_ressource"]["name"]))
    echo $_FILES["new_ressource"]["name"];
?>

    <!--
      modifier un course
    -->

    <form method="post" action="../controller/courses/edit_course.php">
        <p>Toute modification apportée  sera appliquée à l'ensemble de votre cours. </p>
        <label for="title">Titre Cours:</label>
        <?= '<input type="text" id="title" name="title" value="' . $course_xml['name'] . '">' ?>
        <label for="description">Description:</label>
        <?= '<input type="text" id="description" name="description" value="' . $course_xml['description'] . '">' ?>
        <label for="niveau">Niveau:</label>
        <?= '<input type="text" id="niveau" name="niveau" value="' . $course_xml['niveau'] . '">' ?>

        <h3> Ressource du cours </h3>

        <?php
        $rcount=1;
        foreach($course_xml["resource"] as $ressource){
            echo '<div class="ressource" id="r' . $rcount .'">';
            echo '<p> ressource N°' . $rcount . '. ' . $ressource . '</p>';
            echo'<input type="text" placeholder="Modifier ici cette ressource">';
            echo '<button onclick="delete_ressource(' . $rcount . ')">Supprimer </button>';
            echo '<button onclick="update_ressource(' . $rcount . ')">Modifier </button>';
            $rcount++;
        }
        ?>

        <h3> Prérequis </h3>

        <?php
        $pcount=1;
        foreach($course_xml["prerequisite"] as $prerequis){
            echo '<div class="prerequis" id="p' . $pcount .'">';
            echo '<p> prérequis N°' . $pcount . '. ' . $prerequis . '</p>';
            echo'<input type="text" placeholder="Modifier ici le prérequis">';
            echo '<button onclick="delete_prerequis(' . $pcount . ')">Supprimer </button>';
            echo '<button onclick="update_prerequis(' . $pcount . ')">Modifier </button>';
            $pcount++;
        }
        ?>

        <input type="submit" value="Enregistrer les modifications">



    </form>

    <h3> Associé ici une nouvelle ressouce a votre cours </h3>

    <form action="../controller/courses/upload.php?id=<?=$id?>" method="post" enctype="multipart/form-data">
        <label for="path">Ajouter le chemin vers la ressource:</label>
        <input type="file" name="new_ressource">
        <label for="type">Type :</label>
        <select id="type" name="type">
            <option value="video">Vidéo</option>
            <option value="slide">Diaporama</option>
        </select>
        <input type="submit" value="Ajouter">
    </form>

    <h3> Associé  ici un nouveau prérequis a ce cours </h3>

    <form method="post" action="">
        <label for="desc_prerequis">Ajouter :</label>
        <input type="text" name="new_prerequis">
        <input type="submit" value="Ajouter">
    </form>



<?php
$content = ob_get_contents();
ob_get_clean();

// wissam et feriel
