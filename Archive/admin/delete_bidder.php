<?php

    include ('connection/connect.php');

    $id = $_GET['id'];

    $query = "delete from bids where id = '$id'";
    $result = mysqli_query($db, $query);

    if($result)
    {
        $success = "Bidder has been deleted";
        include ('bidders.php');
        exit;
    }
    else
    {
        $error = "Bidder cannot be deleted";
        include ('bidders.php');
        exit;

    }
?>