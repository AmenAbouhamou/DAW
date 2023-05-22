<?php
require_once "../controller/courses/get_course_xml.php";
require_once "../controller/courses/get_course_desc.php";
require_once "../controller/courses/is_followed_course.php";
require_once "../controller/courses/add_to_followed_courses.php";
$id = $_GET['id'];
$course = get_course_xml($id); // xml
$desc = get_course_desc($id); // txt
if (!is_followed_course($id)) {
  add_to_followed_courses($id);
}
// var_dump($course);
ob_start();
?>

<div>
  <h1>
    <?php echo $course["name"]; ?>
  </h1>
  <p>
    <?= $desc ?>
  </p>
  <h2>Prérequis :</h2>
  <ul>
    <?php foreach ($course["prerequisite"] as $prereq) {
      echo '<li>' . $prereq . '</li>';
    } ?>
  </ul>

  <h2>Ressources :</h2>
  <ul>
    <?php foreach ($course["resource"] as $path) {
      echo '<li>';
      $ext = pathinfo($path, PATHINFO_EXTENSION);
      if($ext == "ppt" || $ext == "pptx")
        $type="slide";
      else{
        if ($ext == "mp4" || $ext == "avi")
          $type="video";
        else
          if ($ext == "pdf")
            $type="pdf";
          else
            $type="unkown";
      }
      $res = $path;
      $tmp="'$path','$type'";
      echo '<button onclick="loadres(';
      echo $tmp;
      echo ')">' . $res . '</button>';
      echo '</li>';
    } ?>
  </ul>
</div>

<div id="modal"></div>

  <script src='../vue/assets/js/loadres.js'></script>

<?php
$content = ob_get_contents();
ob_get_clean();

// wissam et feriel
