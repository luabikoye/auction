<?php

    include ('connection/connect.php');

    $id = $_GET['id'];

    $query = "delete from products where id = '$id'";
    $result = mysqli_query($db, $query);

    if($result)
    {
        $success = "Product has been deleted";
        include ('products.php');
        exit;
    }
    else
    {
        $error = "Product cannot be deleted";
        include ('products.php');
        exit;

    }
?>