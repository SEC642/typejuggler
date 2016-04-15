<?php
 function make_key($user) {
    $time = (int)(time()/20);
    $seed = md5($flag).md5($_SERVER['HTTP_USER_AGENT']);
    $password = sha1($time.$user.$seed);
    return $password;
  }
?>
