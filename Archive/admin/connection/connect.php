<?php

date_default_timezone_set('Africa/Lagos');

//local
$db = mysqli_connect('localhost:8889', 'root2', 'password', 'auction') or die ('Cannot connect to database');

//online
// $db = mysqli_connect('localhost', 'aledoyho_auction', 'administrator', 'aledoyho_auction') or die ('Cannot connect to database');

?>