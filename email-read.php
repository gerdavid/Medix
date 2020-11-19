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
    <title>Inbox</title>
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
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b><img src="images/logo.png" alt="homepage" class="dark-logo" /></b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span><img src="images/logo-text.png" alt="homepage" class="dark-logo" /></span>
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
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-content">
                                    <!-- Left sidebar -->
                                    <div class="inbox-leftbar">

                                        <a href="email-compose.php" class="btn btn-danger btn-block waves-effect waves-light">Reply</a>

                                        <div class="mail-list mt-4">
                                            
                                        </div> 

                                    </div>
                                    <!-- End Left sidebar -->
                                    <div class="inbox-rightbar">
                                        <?php
           $id=$_GET['id'];

  $sql="SELECT * FROM message WHERE id='$id'";
  $que=$conn->query($sql);
$row=$que->fetch_assoc();
$send_id=$row['sender_id'];
$sub=$row['subject'];
$body=$row['body'];
$date=$row['date'];
$receiver=$row['receiver_id'];

$sql4 = "UPDATE message SET status='1' WHERE sender_id='$send_id' AND receiver_id='$receiver' AND date = '$date' ";
$queu=$conn->query($sql4);

  $sql1="SELECT * FROM members WHERE memberID='$send_id'";
  $que1=$conn->query($sql1);
$row1=$que1->fetch_assoc();
$sender=$row1['username'];
$sender_e=$row1['email'];

 $sqlr="SELECT * FROM members WHERE memberID='$receiver'";
  $que1r=$conn->query($sqlr);
$rowr=$que1r->fetch_assoc();
$receiver1=$rowr['email'];
?>
                                        

                                        <div class="mt-4">
                                            <h5>Subject: <?php echo $sub;?></h5>

                                            <hr/>

                                            <div class="media mb-4 mt-1">
                                                <!--<img class="d-flex mr-3 rounded-circle thumb-sm" src="images/users/avatar-2.jpg" alt="Generic placeholder image">-->
                                                <div class="media-body">
                                                    <span class="pull-right"><?php echo date('h:i:sa', strtotime($date));?></span>
                                                    <h6 class="m-0"><?php echo $sender;?></h6>
                                                    <small class="text-muted">From: <?php echo $sender_e;?></small>
                                                </div>
                                            </div>

                                            <p><?php echo $body;?></p>
                                            <hr/>
                                            <?php
 $sql2="SELECT * FROM message WHERE id='$id'";
  $que2=$conn->query($sql2);
  $row2=$que2->fetch_assoc();
  $date1=$row2['date'];
  $send_id1=$row2['sender_id'];

  $result="SELECT count(*) as total from message WHERE date='$date1' AND sender_id='$send_id1'";
$que4=$conn->query($result);
$data=$que4->fetch_assoc();
//echo $data['total'];
 echo '<h6> <i class="fa fa-paperclip mb-2"></i>Attachments<br> <span>('.$data["total"].')</span> </h6>';

  $sql3="SELECT * FROM message WHERE date='$date1' AND sender_id='$send_id1'";
$que3=$conn->query($sql3);
while($row3=$que3->fetch_assoc()){
    $imageURL = 'dist/data/'.$sender_e.'/'.$row3["image"];
$image=$row3['image'];
$id1=$row3['id'];
//echo '<a href="https://andele.com/medix/dist/?input=../'.$imageURL.'"> <img src='.$imageURL.' alt="attachment" class="img-thumbnail img-responsive" /> </a>';
                                 echo           
                                 '
                                                <div class="col-sm-2">
 <form action="dist/" method="POST" enctype="multipart/form-data">
                                    <button type="submit" class="btn btn-info" name="xray" value='.$imageURL.'>'.$image.'</button><br>
                                        <input type="hidden" name="status" value="inbox">
                                        <input type="hidden" name="image" value='.$image.'>
                                        <input type="hidden" name="sender" value='.$send_id.'>
                                        </form>
                                                </div><br>';
//                                                <div class="col-sm-2">
  //                                                  <a href="#"> <img src="images/attached-files/img-2.jpg" alt="attachment" class="img-thumbnail img-responsive"> </a>
    //                                            </div>
      //                                          <div class="col-sm-2">
        //                                            <a href="#"> <img src="images/attached-files/img-3.jpg" alt="attachment" class="img-thumbnail img-responsive"> </a>
          //                                    </div>
                                  } ?>
                                            
                                        </div>
                                        <!-- card-box -->
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    <!--Custom JavaScript -->
    <script src="js/scripts.js"></script>

</body>

</html>