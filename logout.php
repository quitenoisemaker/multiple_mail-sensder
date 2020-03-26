<?php
      if (isset($_COOKIE['username']) && isset($_COOKIE['pass'])) {
        setcookie("username", "", time()-(60*60*24));
        setcookie("pass", "", time()-(60*60*24));
        header('location:login.php');
      }
?>