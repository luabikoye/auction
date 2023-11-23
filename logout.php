<?php
 
 session_start();
 
 session_unset($_SESSION['bidder']);
 session_destroy();
 
 header("Location: index.php");

 
 ?>

