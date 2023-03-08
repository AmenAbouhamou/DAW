<?php
    $title = "Home";
?>

<?php ob_start(); ?>

<h1>Home</h1>
<p>Vous n'avez pas accès à cette page.</p>
   <button id="theme" onclick="changeTheme()"class="fi fi-br-moon">
       <img src="assets/img/moon.svg" width="12" height="12">
   </button>
<?php
$content = ob_get_contents();
ob_get_clean();
?>
<?php
ob_start();
?>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
<script>
    function changeTheme() {
            var theme;
            if(getCookie('theme')=="light")
                theme="dark";
            else
                theme="light";
            document.cookie = "theme=" + theme + "; path=/";
            location.reload();
            console.log(getCookie('theme'));
        }
        function getCookie(name) {
  // split cookies by semicolon
  var cookies = document.cookie.split(';');
  // loop through each cookie
  for (var i = 0; i < cookies.length; i++) {
    var cookie = cookies[i].trim();
    // check if the cookie name matches
    if (cookie.indexOf(name + '=') === 0) {
      // return the cookie value
      return cookie.substring(name.length + 1);
    }
  }
  // cookie not found
  return null;
}

</script>
<?php
$theme = 'light';
if (isset($_COOKIE['theme'])) {
    if($_COOKIE['theme']=="light")
        $theme="dark";
    else
        $theme="light";
    setcookie('theme', $theme, time() + 365*24*3600,"/");
}
?>
<?php
echo $_COOKIE["theme"];
$script = ob_get_contents();
ob_get_clean();
?>

