<?php
    include ('connection/connect.php');


    
    $bidder_name = $_POST['bidder_name'];
    $bidder_email = $_POST['bidder_email'];
    $bidder_phone = $_POST['bidder_phone'];
    $bid_amount = $_POST['bid_amount'];

    $id = $_POST['id'];
   

    if($bidder_name == '' || $bidder_email == '' ||  $bidder_phone == '' || $bid_amount =='')
    {
        $error = 'All information are required !!!';
        include ('edit_bidder.php');
        exit;
    }

    $bidder_email = filter_var($_POST['bidder_email']);
    if(!filter_var($bidder_email, FILTER_VALIDATE_EMAIL))
    {
        $error = "Invalid email format";
        include('edit_bidder.php');
        exit;
    }

   $query = "update bids set bidder_name = '$bidder_name', bidder_email = '$bidder_email', bidder_phone = '$bidder_phone', bid_amount = '$bid_amount' where id = '$id'"; 

    $result = mysqli_query($db,$query);
    if($result)
    {
        $success = 'Bidder has been edited successfully';
        include ('edit_bidder.php');
        exit;
        
    }
    else{
        $error = 'Sorry, you cannot edit this bidder at this time, check the information entered and try again';
        include ('edit_bidder.php');
        exit;
    }
    

?>