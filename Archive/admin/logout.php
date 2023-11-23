<?php
 
 session_start();
 
 session_unset($_SESSION['valid_user']);
 session_destroy();
 
 header("Location: index.php");

 
 ?>

