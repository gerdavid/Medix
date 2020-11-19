<?php 
 require('includes/config.php');

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); } 

//define page title
//$title = 'Members Page';
$email=$_SESSION['email'];
?> 
<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Medix</title>

    <link href="css/lib/chartist/chartist.min.css" rel="stylesheet">
	<link href="css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <style>
        .goog-te-gadget-icon {
            display: none;
        }
</style>
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">
                        <!-- Logo icon -->
                        <b><img src="images/logo.png" alt="homepage" class="dark-logo" /></b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <?php
include 'connection.php';
$sql="SELECT * FROM members WHERE email='$email'" ;
   $query=$conn->query($sql);
   $row=$query->fetch_assoc();
   $user= $row['username'];
?>
                        <span><?php echo 'Welcome '.$user;?></span>
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'sw', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <!-- Messages -->
                      
                        <!-- End Messages -->
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">

                        <!-- Search 
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search here"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>-->
                        <!-- Comment -->
                                                <!-- End Comment -->
                        <!-- Messages -->
                       
                        <!-- End Messages -->
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/users/user.png" alt="user" class="profile-pic" />Profile</a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="profile.php"><i class="ti-user"></i> Profile</a></li>
                                    <li><a href="email-inbox.php"><i class="ti-email"></i> Inbox</a></li>
                                    <li><a href="email-sent.php"><i class="ti-settings"></i> Outbox</a></li>
                                    <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <?php
include 'menu.php';
?>
                <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Profile</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Medix</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4>Current Registration Details</h4>

                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label><b><u>Email address:</u></b> <?php echo $email;?></label>
                                            <input type="email" name="email" class="form-control" placeholder="Edit Here">
                                        </div>
                                        <div class="form-group">
                                            <label><b><u>Username:</u></b> <?php echo $row['username'];?></label>
                                            <input type="text" name="username" class="form-control" placeholder="Edit Here">
                                        </div>
                                        <div class="form-group">
                                            <label><b><u>Location:</u></b> <?php echo $row['location'];?></label>
                                            <input type="text" name="location" class="form-control" placeholder="Edit Here">
                                        </div>
                                        <div class="form-group">
                                            <label><b><u>User Type:</u></b> <?php 
 $rank=$row['rank'];
 if($rank==1){
     echo 'Radiologist';
 }else{
     echo 'Medical Practioner';
 }?></label>
                                              <select class="form-control" name="type">
                                                            <option value="0">Select</option>
															<option value="1">Radiologist</option>
															<option value="2">Medical Practioner</option>
														</select>
                                        </div>
                                        <button type="submit" name="add" class="btn btn-default">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
if(isset($_POST['add'])){
$email1=$_POST['email'];
$username=$_POST['username'];
$location=$_POST['location'];
$type=$_POST['type'];
    $sql="SELECT * FROM members WHERE email='$email1'" ;
   $query=$conn->query($sql);
   $rowcount=mysqli_num_rows($query);
   //$row=$query->fetch_assoc();
    $sql1="SELECT * FROM members WHERE username='$username'" ;
   $query1=$conn->query($sql1);
   $rowcount1=mysqli_num_rows($query1);
     if($rowcount > 0){
       echo"<script>alert('Email Already exists')</script>";
   }elseif($rowcount1 > 0){
       echo"<script>alert('Username Already exists')</script>";
   }else{
            $insert = "UPDATE members SET email='$email1' ,username='$username' ,location='$location' ,rank='$type' WHERE email='$email'";
   $query1=$conn->query($insert);
            if($query1){
                session_destroy();     
echo "<script>alert('Successfully Updated Kindly Login in Again'); window.location = './index.php';</script>";
       
    }else{
            echo"<script>alert('Error!')</script>";
            }
}
}
?>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2020 All rights reserved. Developed by <a href="">DMC Solutions</a></footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>


    <script src="js/lib/datamap/d3.min.js"></script>
    <script src="js/lib/datamap/topojson.js"></script>
    <script src="js/lib/datamap/datamaps.world.min.js"></script>
    <script src="js/lib/datamap/datamap-init.js"></script>

    <script src="js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="js/lib/weather/weather-init.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel-init.js"></script>


    <script src="js/lib/chartist/chartist.min.js"></script>
    <script src="js/lib/chartist/chartist-plugin-tooltip.min.js"></script>
    <script src="js/lib/chartist/chartist-init.js"></script>
    <!--Custom JavaScript -->
    <script src="js/scripts.js"></script>

</body>

</html>