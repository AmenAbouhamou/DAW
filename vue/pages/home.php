<?php
$title = "Home";
?>

<?php ob_start(); ?>

<h1>Home</h1>
<p>Vous n'avez pas accès à cette page.</p>
<button class="fi fi-br-moon"><img id="theme" src="assets/img/moon.svg" width="12" height="12"></button>
<?php
$content = ob_get_contents();
ob_get_clean();
?>
<?php
$script=
"<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script><script>".
"<script src='https://cdn.jsdelivr.net/jquery.cookie/1.4.1/jquery.cookie.min.js'></script>".
    "$('#theme').click(function(){".
//$.cookie("test", 1, { expires : 10 });
        "document.cookie".
        /*"$.ajax({ url: '../controller/get_color_theme.php',".
         "success: function(data) {"."
                      alert('AJAX call was successful!');"."
                      alert('Data from the server' + data);"."
                  }"."});".*/
    "});"."</script>";
?>