function changeTheme() {
    var theme;
    if (getCookie('theme') == "light") {
      $("#theme img").attr("src", "assets/img/moon.png");
      theme = "dark";
    } else {
      $("#theme img").attr("src", "assets/img/sun.png");
      theme = "light";
    }
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