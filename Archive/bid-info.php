<?php
    include('admin/connection/connect.php');

    if($_GET['id'])
    {
        $id = $_GET['id'];
    }

        $query = "select * from products where id = '$id' ";
        $result = mysqli_query($db, $query);
        $row = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapel of the Healing Cross | Place bid</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <script src="dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="dist/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="icon.png" href="images/icon.png">  
</head>

<body>
    <section class="header2">

        <div class="container pt-3">
            <a href="index.php"> <img src="images/logo1.jpeg" alt="" srcset=""> </a>    
    </section>

    <section class="bid pt-5">

        <div class="container">

            <center>
            <?php if($error) echo '<div class="alert alert-danger" style="text-align: center;">'.$error.'</div>';?><br>
            <?php if($success) echo '<div class="alert alert-success" style="text-align: center;">'.$success.'</div>';?>
                <h2>Place Your Bid</h2>
            </center>
            <div class="row pt-3">

                <div class="col-md-6">
                    <img src="admin/upload/<?php echo $row['image']; ?>" style="width: 100%; " class="img-fluid" alt="" srcset="" style="margin-bottom: 10px;">
                    <p style="font-weight:bold;text-align:center;" class="available1"><?php echo $row['product_name']; ?></p>                     
                </div>
                <div class="col-md-4">
                    <p style="padding-top:30px;"><?php echo $row['description'];?></p>
                    <form action="proc_bid_info.php" method="post" enctype="multipart/form-data">
                    <input type="text" name="bidder_name" placeholder="Enter your name" value="<?php echo $row['$bidder_name'] ;?>"><br><br>
                    <input type="text" name="bidder_email" placeholder="Enter your email" value="<?php echo $rows['bidder_email'] ;?>"><br><br>
                    <input type="text" name="bidder_phone" placeholder="Enter your phone number" value="<?php echo $row['bidder_phone'] ;?>"><br><br>
                    <input name="bid_amount"  value="<?php echo $bid_amount ;?>"><br><br>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <button  type="submit" class="sub" style="width: 350px; margin: 0 auto; margin-bottom: 10px; text-align: center;" name="submit" >Submit bid</button>
                    </form>
                </div>
                
            
 </div>
        
    </section>
    <footer>
        <p>All Rights Reserved | Design By Aledoy Solutions Limited</p>
    </footer>
</body>

</html>