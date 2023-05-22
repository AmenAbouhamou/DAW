<?php
  require_once $_SERVER['DOCUMENT_ROOT']."/controller/courses/get_followed_courses.php";
  $courses = get_followed_courses(); // array of courses
$titre="List Courses";
  ob_start();
  ?>

    
<?php
  echo'<header>';
  if (empty($courses)) {
    echo '<h1>Vous ne suivez aucun cours.</h1>';
  } else {
    echo '<h1>Cours suivis :</h1>';
  }
  echo'</header>';
  echo'<ul>';
  foreach ($courses as $course) {
    echo'<li>';
    echo '<h2>' . $course['NAME'] . '</h2>';
    echo '<p><strong>Niveau :</strong> ' . $course['NIVEAU'] . '</p>';
    echo '<p><strong>Description :</strong> ' . $course['DESCRIPTION'] . '</p>';
    echo '<a href="index.php?p=course&id=' . $course['ID'] . '">Accéder au cours</a>';
    echo '</li>';
  } 
  echo '</ul>';
  ?>

<?php
  $content = ob_get_contents();
  ob_get_clean();
// done
