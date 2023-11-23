<?php
    include ('connection/connect.php');


    
    $bidder_name = $_POST['bidder_name'];
    $bidder_email = $_POST['bidder_email'];
    $bidder_phone = $_POST['bidder_phone'];
    $bid_amount = $_POST['bid_amount'];
   

    if($bidder_name == '' || $bidder_email == '' ||  $bidder_phone == '' || $bid_amount =='')
    {
        $error = 'All information are required !!!';
        include ('add_bidder.php');
        exit;
    }

    $bidder_email = filter_var($_POST['bidder_email']);
    if(!filter_var($bidder_email, FILTER_VALIDATE_EMAIL))
    {
        $error = "Invalid email format";
        include('add_bidder.php');
        exit;
    }

   $query = "insert into bids(bidder_name, bidder_email, bidder_phone, bid_amount) 
    values('$bidder_name', '$bidder_email', '$bidder_phone', '$bid_amount')";
    

    $result = mysqli_query($db,$query);
    if($result)
    {
        $success = 'Bidder has been added successfully';
        include ('add_bidder.php');
        exit;
        
    }
    else{
        $error = 'Sorry, you cannot add this bidder at this time, make sure all information are entered correctly';
        include ('add_bidder.php');
        exit;
    }
    

?>