<?php
   session_start();
   unset($_SESSION["is_user"]);
   session_destroy();
   echo 'You have logged out!';
   header('Refresh: 2; URL = login.php');
?>