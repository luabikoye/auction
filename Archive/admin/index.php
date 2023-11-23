<?php

session_start();  

 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="robots" content="noindex,nofollow">
    <title>Login</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <!-- login form -->
    <link href="css_login/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css_login/startmin.css" rel="stylesheet">

    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Please Sign In</h3>
                        </div>
                        <div class="panel-body">
                        <?php if($error)
                            {
                             echo '<div  class="alert alert-danger ">'.$error.'</div>' ;
                            }
				    	?>
                            <form role="form" action="proc-login.php" method="post">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Admin Username" name="username" type="text" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                    </div>
                                    <div class="">
                                        <button type ="submit" style=" margin-bottom: -10px; " name="sub" class="btn btn-lg btn-success btn-block"><span style="align-text: center;">Login</span></button>
                                    </div>
                                    <label>
                                    <p>
                                        <h2><span style="font-family: times new roman; font-size: 17px; padding-top: 0px;">Not an Admin?</span> <a href="register.php"><span style="color: ; font-family: times new roman; font-size: 20px;"> Register Here</span></h2>
                                    </p>
                                    </label>
                                    <!-- Change this to a button or input when using this as a form -->
                                
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

    </body>
</html>
