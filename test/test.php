<!DOCTYPE html>
<html>
<head>
    <title>ChatGPT Theme Change Example</title>
    <style>
        body {
    background-color: #f7f7f7;
    color: #444;
}

.chat-container {
    background-color: #fff;
    border: 1px solid #ddd;
    padding: 10px;
    margin-top: 20px;
}

.chat-message {
    padding: 5px;
    margin-bottom: 10px;
    font-size: 16px;
}
.dark {
    background-color: #333;
    color: #fff;
}

.dark .chat-container {
    background-color: #444;
    border-color: #555;
}

.dark .chat-message {
    color: #fff;
}

    </style>
</head>
<body class="<?php echo $theme; ?>">
    <h1>ChatGPT Theme Change Example</h1>
    <div class="chat-container">
        <div class="chat-message">Hello, welcome to the ChatGPT theme change example!</div>
        <div class="chat-message">To change the theme of the chat, click one of the buttons below:</div>
        <button onclick="changeTheme2()">Light Theme</button>
        <button onclick="changeTheme('dark')">Dark Theme</button>
    </div>
    <script>
        function changeTheme(theme) {
            document.cookie = "theme=" + theme + "; path=/";
            location.reload();
            console.log(getCookie('theme'));
        }
        function changeTheme2() {
            var theme="light";
            if(getCookie('theme')=="light")
                theme="dark";
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
</body>
</html>

<?php
$theme = 'light';
if (isset($_COOKIE['theme'])) {
    $theme = $_COOKIE['theme'];
}
?>
