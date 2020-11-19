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
    <title>Ela - Bootstrap Admin Dashboard Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/dropzone/dropzone.css" rel="stylesheet">
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
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    
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
                    <h3 class="text-primary">Compose</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Compose</li>
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
                                <h4 class="card-title">Dropzone. Only Dicom and ktx non compressed images allowed</h4>
                                <h6 class="card-subtitle">For multiple file upload press ctrl button while selecting.</h6>
                                <form action='' method="POST" enctype="multipart/form-data">
                                <div action="#" class="">
                                    <!--<div class="fallback"></div>-->
                                    <input id='upload' name="upload[]" type="file" multiple="multiple" required="required" accept=".dcm, .ktx"/>
                                   
                                    </div>
                                <div class="card-content">
                                    <!-- Left sidebar -->
                                    <div class="inbox-leftbar">
                                        <a href="" class="btn btn-danger btn-block waves-effect waves-light">Send an X-Ray</a>

                                        <div class="mail-list mt-4">
                                         
                                        </div>

                                    </div>
                                    <!-- End Left sidebar -->
                                    <div class="inbox-rightbar">
                                     <div class="mt-4">

                                                <div class="form-group">
                                                    <input type="email" class="form-control" placeholder="To email address" name="receiver">
                                                </div>

                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Subject" name="subject">
                                                </div>
                                                <div class="form-group">
                                                    <textarea  rows="8" cols="80" class="form-control" style="height:300px" name="body">
                                                                                               </textarea>
                                                </div>
                                                <div class="form-group m-b-0">
                                                    <div class="text-right">
                                                        <button type="submit" value="Submit" name="submit" class="btn btn-success waves-effect waves-light m-r-5"> <span>Send</span> <i class="fa fa-send m-l-10"></i> </button>
                                                    </div>
                                                </div>

                                            </form>
                                <script type="text/javascript">
                                    function empty() {
    var x;
    x = document.getElementById("upload").value;
    if (x != "") {
        alert("Please upload an image");
        return false;
    };
}
                                </script>
                                        </div>
                                        <!-- end card-->
          
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

     <script src="js/lib/dropzone/dropzone.js"></script>
</body>       
</html>
      
<?php
if(isset($_POST['submit'])){
    $sql="SELECT * FROM members WHERE email='$email' " ;
   $query=$conn->query($sql);
   $row=$query->fetch_assoc();
   $sender=$row['memberID'];
   $subject=$_POST['subject'];
   $body=$_POST['body'];
    $receiv=$_POST['receiver'];
    $sql1="SELECT * FROM members WHERE email='$receiv' " ;
   $query1=$conn->query($sql1);
   $num_check=mysqli_num_rows($query1);
   if($num_check==0){
   echo"<script>alert('Error! User does not exist Kindly contact user to register with Medix')</script>";
   }else{
   $row1=$query1->fetch_assoc();
   $receiver=$row1['memberID'];
    if(count($_FILES['upload']['name']) > 0){
        $mpesa=count($_FILES['upload']['name']);
        //Loop through each file
        for($i=0; $i<count($_FILES['upload']['name']); $i++) {
          //Get the temp file path
            $tmpFilePath = $_FILES['upload']['tmp_name'][$i];
            //Make sure we have a filepath
            if($tmpFilePath != ""){
                //save the filename
                $shortname = $_FILES['upload']['name'][$i];
                $shortname1=$email.rawurlencode($shortname);
                //save the url and the file
                $fileext =$_FILES['upload']['name'][$i];
                $newstring = substr($fileext, -3);
                if($newstring =='ktx'){
                    $directory = $email;
                    $photo_destination = 'dist/data/';
                    $path = $photo_destination;
                    $new_path = $path . $directory;
                    if(is_dir($new_path)) {
                    //echo "The Directory {$new_path} exists";
                    } else {
                     mkdir($new_path , 0777);
                        }
                $filePath = $new_path ."/".$receiver. $_FILES['upload']['name'][$i];
                //Upload the file into the temp dir
                if (file_exists($filePath)) {
                echo"<script>alert('Error! Existing File Name Already sent to Sender Kindly Rename file ".$shortname."')</script>";
} else {

                if(move_uploaded_file($tmpFilePath, $filePath)) {
                    $files[] = $shortname;                      
                     $money=100;
            $insert = $conn->query("INSERT INTO message (sender_id, receiver_id,subject,body,date,status,image) VALUES ('$sender','$receiver','$subject','$body',now(),'0','$receiver$shortname')");
            if($insert){ 
                $count=count($files);
if(is_array($files)){
        foreach($files as $file){
         
        }
        //echo"<script>alert('Kindly Pay KSH".$mpesa*$money. " to Mpesa Till Number 1234')</script>";  
       echo"<script>alert('".$file." uploaded successfully!')</script>";      
    }
            }else{
            echo"<script>alert('Error!')</script>";
            }
                }
}
                }else{
                    $directory = $email;
                    $photo_destination = 'dist/data/';
                    $path = $photo_destination;
                    $new_path = $path . $directory;
                    $dcm = $new_path.'/'.$receiver.$shortname;
                    if(is_dir($dcm)) {
                    //echo "The Directory {$new_path} exists";
                    echo"<script>alert('Error! Existing File Name Already sent to Sender Kindly Rename file  ".$shortname."')</script>";
                    } else {
                    $oldmask = umask(0);
                     mkdir($new_path , 0777);
                     umask($oldmask);
                     $dcm = $new_path.'/'.$receiver.$shortname;

                     $oldmask = umask(0);
                       mkdir($dcm , 0777);
                       umask($oldmask);
                     
                       $file = fopen($dcm . '/' .'file_list.txt','w');
                       echo fwrite($file,$shortname);
                        fclose($file);

                       $file1 = fopen($dcm . '/' .'.htaccess','w');
$headers ='Header set Access-Control-Allow-Origin "*"'. "\n" .'Header set Access-Control-Allow-Headers "Content-Type"'. "\n" .' Header set Access-Control-Allow-Methods "GET"';
 echo fwrite($file1,$headers);
                        fclose($file1);

//upload $name to folder
                $filePath = $dcm ."/". $_FILES['upload']['name'][$i];
                //Upload the file into the temp dir
                if(move_uploaded_file($tmpFilePath, $filePath)) {
                    $files[] = $shortname;                      
                     $money=100;
            $insert = $conn->query("INSERT INTO message (sender_id, receiver_id,subject,body,date,status,image) VALUES ('$sender','$receiver','$subject','$body',now(),'0','$receiver$shortname')");
            if($insert){ 
                $count=count($files);
if(is_array($files)){
        foreach($files as $file){
         
        }
        //echo"<script>alert('Kindly Pay KSH".$mpesa*$money. " to Mpesa Till Number 1234')</script>";  
       echo"<script>alert('".$file." uploaded successfully!')</script>";      
    }
            }else{
            echo"<script>alert('Error!')</script>";
            }
                }    
                }
                }
              }
        }
    }
}
}
?>
