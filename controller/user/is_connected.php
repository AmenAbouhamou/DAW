<?php
function is_connected():bool{
  // return true if the user is logged in as a student or a teacher
    if(isset($_COOKIE['logged'])){
        return true;
    }
    return false;
}
