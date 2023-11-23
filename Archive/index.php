<?php

    include('admin/connection/connect.php');


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
            <center class="pt-3"><h2>Available Bids</h2></center>
            <div class="row pt-4 mid">             
                <?php
                $query = "select * from products";
                $result = mysqli_query($db,$query);
                $num_rows = mysqli_num_rows($result);
                
                for($i=0; $i<$num_rows; $i++)
                {
                    $rows = mysqli_fetch_array($result);
                    ?>
                <div class="col-md-4 column">
                    <h3>00:00</h3>
                    <img src="admin/upload/<?php echo $rows['image'];?>" style="width: 100%; height: 55%; " class="img-fluid" alt="" srcset="">
                    <p style="font-weight:bold;text-align:center;"><?php echo $rows['product_name'];?></p> 
                    <form method="post" action="proc_index.php?id=<?php echo $rows['id']; ?>" enctype="multipart/form-data">
                        <div class="bid-area">
                            <input type="hidden" name="id" value="<?php echo $id ;?>">
                            <input type="text"  name="bid_amount" placeholder="Bid amount">
                            <button type="submit" onclick="return confirm('Are you sure you want to bid?');"><span>Bid</span></button>
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