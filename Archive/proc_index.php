<?php

    include ('admin/connection/connect.php');

    $bid_amount = $_POST['bid_amount'];

    if($bid_amount =='')
    {
        $error = "Enter an amount to continue";
        include('index.php');
        exit;
    }
    
    $uppercase = preg_match('@[A-Z]@', $bid_amount);
    $lowercase = preg_match('@[a-z]@', $bid_amount);
    $number    = preg_match('@[0-9]@', $bid_amount);
    $specialchar = preg_match('@[^A-Za-z0-9]@', $bid_amount);

    if($uppercase || $lowercase || $specialchar )
    {
        $error = "This field only require a number to bid";
        include('index.php');
        exit;
    }
    
    if(!$number)
    {
        $error = "This field only require a number to bid";
        include('index.php');
        exit;
    }
    else{
        include('bid-info.php');
        exit;
    }
?>