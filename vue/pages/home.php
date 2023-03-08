<?php
    $title = "Home";
?>

<?php ob_start(); ?>

<h1>Home</h1>
<p>Vous n'avez pas accès à cette page.</p>
<form method="post" action="../controller/toggle_color_theme.php">
    <input type="submit" value="send" id ="theme" name="theme">
<!--    <button id="theme" type="submit" class="fi fi-br-moon"><img src="assets/img/moon.svg" width="12" height="12"></button>-->
</form>

<?php
$content = ob_get_contents();
ob_get_clean();
?>
<?php
ob_start();
?>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
<script>
    /*$('#theme').click(function(){
        $.ajax({
            url: '../controller/get_color_theme.php',
            type: "post",
            data: 1,
            success: function(response){
                console.log(response);
            },
            error: function(xhr, status, error){
                console.error(xhr);
            }
        });*/
        /*$.ajax({
            url: '../controller/get_color_theme.php',
            type:"post"
            success: function(data) {
                console.log('AJAX call was successful! '+data+" kkkll");
                location.reload();
            },
            error: function() {
                alert('There was some error performing the AJAX call!');
            }
        });*/
    // });
</script>
<?php
$script = ob_get_contents();
ob_get_clean();
?>
