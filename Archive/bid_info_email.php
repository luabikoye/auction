<?php

    include ('admin/connection/connect.php');
    
    $bidder_name = $_POST['bidder_name'];
    $bidder_email = $_POST['bidder_email'];
    $bidder_phone = $_POST['bidder_phone'];
    $bid_amount = $_POST['bid_amount'];;

  $sendto = "akerelejohn6@gmail.com, muyiwa@aledoy.com";
  $subject = "A new message from"." Bid Info";
  
  $content = 'Below are the details from the Bid Info '."\n"
        .'Bidder Name: '.$bidder_name."\n"
        .'Bidder Email: '.$bidder_email."\n"
        .'Bidder Phone: '.$bidder_phone."\n"
        .'Bid Amount:  '.$bid_amount."\n";

mail($sendto, $subject, $content, "from: noreply@aledoy.com");

?>