<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chapel of the Healing Cross</title>
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
        </div>
    </section>

    <section class="bid pt-5">

        <div class="container">
            <center>
                <h5>Thank you <strong><?php echo $bidder_name;?></strong>, your bid has been received.
                    We would contact you if you win.</h5><br><br>
                    <a href="index.php"><button>Place another bid</button></a>  
            </center>
        </div>
    </section>
    <footer>
        <p>All Rights Reserved | Design By Aledoy Solutions Limited</p>
    </footer>
</body>

</html>