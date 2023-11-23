<?php

    include ('admin/connection/connect.php');
    require_once('bid_info_email.php');

    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $bidder_name = $_POST['bidder_name'];
    $bidder_email = $_POST['bidder_email'];
    $bidder_phone = $_POST['bidder_phone'];
    $bid_amount = $_POST['bid_amount'];

    $id = $_POST['id'];

    if($bidder_name == ''|| $bidder_email == ''|| $bidder_phone == '')
    {
        $error = "All fields are required !!!";
        include ('bid-info.php');
        exit;
    }

    // if email doesn't include @
    $bidder_email = filter_var($_POST["bidder_email"]);
    if (!filter_var($bidder_email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email format";
        include ('bid-info.php');
        exit;
    }

    if(isset($_POST['submit']))
   {
    $query = "INSERT INTO bids (product_id, product_name, bidder_name, bidder_email, bidder_phone, bid_amount) VALUES('$product_id', '$product_name', '$bidder_name', '$bidder_email', '$bidder_phone', '$bid_amount')";

    $result = mysqli_query($db, $query);
    if($result)
    {
        $success = "Your bid has been received";
        include ('thankyou.php');
        exit;
    }
    else 
    {
        $error = "Your bid was not received";
        include('bid-info.php');
        exit;
    }
   }

?>