<?php
    
    include('admin/connection/connect.php');


    function get_time_left($end_time)
    {
        $datetime1 = new DateTime();
        $datetime2 = new DateTime($end_time);
        $interval = $datetime1->diff($datetime2);
        //$elapsed = $interval->format('%y years %m months %a days %h hours %i minutes %s seconds');
        $elapsed = $interval->format("<span class='e-m-days'>%a</span> Day(s) | <span class='e-m-hours'>%h</span> Hours |
        <span class='e-m-minutes'>%i</span> Minutes | <span class='e-m-seconds'>%s</span> Seconds");
        
        //$elapsed = $interval->format('%i:00');


        return $elapsed;
    }

    $now =  date('Y-m-d h:i:s');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapel of the Healing Cross | Auction</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <script src="dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="dist/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">  
    <link rel="icon" type="icon.png" href="images/icon.png">  
    <script src="dist/js/jquery-3.6.0.min.js"></script>

 

   

</head>

<body>
    <section class="header">
        
        <div class="container pt-3">
            <a href="index.php"> <img src="images/logo1.jpeg" alt="" srcset=""> </a>       

            <h1>Place Your Bid</h1>
            <!-- <p>Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit. Nec, nulla <br> eu non sit felis quam nulla tristique neque. </p>      -->
                <a href="#bid"> <button>Start Bidding</button>   </a>        
        </div>        
    </section>

    <section class="available pt-5">
        <div class="container" id="bid">
            <?php if($error) echo '<div class="alert alert-danger" style="text-align: center;">'.$error.'</div>';?>
            <center class="pt-3"><h2 style="margin-bottom: 30px;">Available Bids</h2></center>
            <div class="row pt-4 mid">             
                <?php
                $query = "select * from products where deadline > DATE('$now')";
                $result = mysqli_query($db,$query);
                $num_rows = mysqli_num_rows($result);
                
                for($i=0; $i<$num_rows; $i++)
                {
                    $rows = mysqli_fetch_array($result);
                    ?>


   
<script>
    $(function() {
  function getCounterData(obj) {
    var days = parseInt($('.e-m-days', obj).text());
    var hours = parseInt($('.e-m-hours', obj).text());
    var minutes = parseInt($('.e-m-minutes', obj).text());
    var seconds = parseInt($('.e-m-seconds', obj).text());
    return seconds + (minutes * 60) + (hours * 3600) + (days * 3600 * 24);
  }

  function setCounterData(s, obj) {
    var days = Math.floor(s / (3600 * 24));
    var hours = Math.floor((s % (60 * 60 * 24)) / (3600));
    var minutes = Math.floor((s % (60 * 60)) / 60);
    var seconds = Math.floor(s % 60);

    console.log(days, hours, minutes, seconds);

    $('.e-m-days', obj).html(days);
    $('.e-m-hours', obj).html(hours);
    $('.e-m-minutes', obj).html(minutes);
    $('.e-m-seconds', obj).html(seconds);
  }

  var count = getCounterData($("#counter<?php echo $i; ?>"));

  var timer = setInterval(function() {
    count--;
    if (count == 0) {
      clearInterval(timer);
      $("#btn<?php echo $i; ?>").attr("disabled","true");
      $("#btn<?php echo $i; ?>").css("background-color","#ff0000");
      $("#amt<?php echo $i; ?>").hide();
      $("#btn<?php echo $i; ?>").html("<span>Closed</span>");
      $("#counter<?php echo $i; ?>").html("This product is no longer available for bidding");
      $("#counter<?php echo $i; ?>").css("color","#ff0000");

      r

      return;
    }
    setCounterData(count, $("#counter<?php echo $i; ?>"));
  }, 1000);
});
    </script>


                <div class="col-md-4 column">
                <div class="counter" id="counter<?php echo $i; ?>" style='color: green;'>
  <?php echo get_time_left($rows['deadline']); ?>
</div>
                    <img src="admin/upload/<?php echo $rows['image'];?>" style="width: 100%; height: 55%; " class="img-fluid" alt="" srcset="">
                    <p style="font-weight:bold;text-align:center;"><?php echo $rows['product_name'];?></p> 
                    <form method="post" action="proc_index.php" enctype="multipart/form-data">
                        <div class="bid-area">
                            <input type="hidden" name="product_id" value="<?php echo $rows['id'];?>">
                            <input type="hidden" name="product_name" value="<?php echo $rows['product_name'];?>">
                            <input id="amt<?php echo $i; ?>" type="text"  name="bid_amount" placeholder="Bid amount">
                            <button id="btn<?php echo $i; ?>" type="submit" onclick="return confirm('Are you sure you want to bid?');"><span>Bid</span></button>
                        </div>
                    </form>
                </div><br><br>
            <?php 
			}
		    ?>
        </div>
    </section>

    <footer>
        <p>All Rights Reserved | Design By Aledoy Solutions Limited</p>
    </footer>
</body>
</html>