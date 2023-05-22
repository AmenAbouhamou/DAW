<?php
  require_once $_SERVER['DOCUMENT_ROOT']."/controller/courses/get_courses.php";
  $courses = get_all_courses(); // array of courses
  ob_start();
  ?>

<?php
  if (empty($courses)) {
    echo '<h1>Vous n\'avez pas encore créé de cours.</h1>';
  } else {
    echo '<h1>Cours créés :</h1>';
  }
  foreach ($courses as $course) {
    echo '<div class="course-card"><h2>' . $course['NAME'] . '</h2>';
    echo '<p>' . $course['DESCRIPTION'] . '</p>';
    echo '<a href=http://localhost/vue/index.php?p=courseOneT&id=' . $course['ID'] . '>Voir le cours</a> </div>';
  } ?>

<?php
  $content = ob_get_contents();
  ob_get_clean();
// done
