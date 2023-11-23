<?php

session_start ();

if(!isset($_SESSION['valid_user']))
{
    include('index.php');
    exit;
}
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="robots" content="noindex,nofollow">
    <title>Add Bidder</title>
   
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
   <link href="css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="dashboard.php">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <?php include('include/logo.php');?>
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="" alt="" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class=" in">
                            <form role="search" class="app-search d-none d-md-block me-3">
                                <input type="text" placeholder="Search..." class="form-control mt-0">
                                <a href="" class="active">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                            <a class="profile-pic" href="#">
                                <img src="plugins/images/users/varun.jpg" alt="user-img" width="36"
                                    class="img-circle"><span class="text-white font-medium">Admin</span></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <?php include('side-nav.php'); ?>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Add Bidder</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal"></a></li>
                            </ol>
                            <!-- <a href="proc-add-participants.php" target=""
                                class="btn btn-success  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">Save
                                </a> -->
                           
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
   
     
            
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <?php if($success ) echo '<div class="alert alert-success" style="width: 250px;">'.$success.' </div>' ;?>
                            <?php if($error ) echo '<div class="alert alert-danger" style="width: 250px;">'.$error.' </div>' ;?>
                            <h3 class="box-title">Please fill the form below to add a <code>  Bidder</code> </h3>
                            <!-- <p class="text-muted">Please fill the form below to add a<code>  Participant</code></p> -->
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <!-- <th class="border-top-0">id</th> -->
                                            <!-- <th class="border-top-0">First Name</th>
                                            <th class="border-top-0">Last Name</th>
                                            <th class="border-top-0">Email</th>
                                            <th class="border-top-0">Phone</th>
                                            <th class="border-top-0">Exam_code</th>
                                            <th class="border-top-0">Expire_date</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <tr>
                                         <form action="proc_add_bidder.php" method="post" enctype="multipart/form-data">
                                            <!-- <td><input name="firstname" type="text" style="width: 150px; border-radius: 30px;" required=""></input></td>
                                            <td><input name="lastname" type="text" style="width: 150px; border-radius: 30px;" required=""></input></td>
                                            <td><input name="email" type="email" style="width: 150px; border-radius: 30px;" required=""></input></td>

                                            <td><input name="phone" type="text" style="width: 150px; border-radius: 30px;" required=""></input></td>

                                            <td><input name="exam_code" type="text" style="width: 150px; border-radius: 30px;" required=""></input></td>

                                            <td><input name="expire_date" type="date" style="width: 140px; border-radius: 30px;" required=""></input></td>    -->
                                            
                                            
                                       </tr>
                                    </tbody>
                                </table>
                                <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Bidder Name</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input name="bidder_name" type="text"   value="<?php echo $bidder_name ;?>" class="form-control p-0 border-0">
                                        </div>
                                </div>
                                <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Bidder Email</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input name="bidder_email" type="text"  value="<?php echo $bidder_email ;?>" class="form-control p-0 border-0">
                                        </div>
                                </div>
                                <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Bidder Phone</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input name="bidder_phone" type="text" style="width: 250px;" value="<?php echo $bidder_phone ;?>" class="form-control p-0 border-0">
                                        </div>
                                </div>
                                <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Bidder Amount</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input name="bid_amount" type="text"  value="<?php echo $bid_amount ;?>" class="form-control p-0 border-0">
                                        </div>
                                </div>
                                
                                <div class="d-md-flex">
                                 <input class="btn btn-success" style="margin-left: 20px; margin-bottom: 10px;" type="submit"value="Add"> 
                                </div>
                            </div>
                         </form>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- footer -->
            <!-- ============================================================== -->
           <?php include('include/footer.php');?>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
</body>

</html>