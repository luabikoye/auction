<?php
    session_start();
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
        
        $sendto = $bidder_email;
        $admin_email = 'john@aleoyhosyt.com';

        $subject = "A new message from"." Bid Info";
        
        $content = 'Below are the details from the Bid Info <br><br>'
              .'Bidder Name: '.$bidder_name."<br>"
              .'Bidder Email: '.$bidder_email."<br>"
              .'Bidder Phone: '.$bidder_phone."<br>"
              .'Bid Amount:  '.$bid_amount."<br>";


              $headers = "MIME-Version: 1.0" . "\r\n";
              $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
              $headers .= 'From: <From: noreply@aledoy.com>' . "\r\n";
      
                mail($admin_email, $subject, $content, $headers);


      $subject_bidder = 'Thank you for bidding';
      $content_bidder = 'Dear '.$bidder_name.'<br><br>You bid details have been received.<br><br>Below are the details from the Bid Info <br><br>'
      .'Bidder Name: '.$bidder_name."<br>"
      .'Bidder Email: '.$bidder_email."<br>"
      .'Bidder Phone: '.$bidder_phone."<br>"
      .'Bid Amount:  '.$bid_amount."<br>";
      
      mail($sendto, $subject, $content, $headers);


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