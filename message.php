  <?php
require('includes/config.php');

 ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 include 'connection.php';
//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); } 

$email=$_SESSION['email'];

$remail=$_POST["receiver"];
    $subject=$_POST["subject"];
    $body=$_POST["body"];
      $sql_check="SELECT * FROM members where email='$email'";
  $que_check=$conn->query($sql_check);
  $row_check=$que_check->fetch_assoc();
  $sender=$row_check['memberID'];
   
       $sql_check1="SELECT * FROM members where email='$remail'";
  $que_check1=$conn->query($sql_check1);
  $row_check1=$que_check1->fetch_assoc();
  $receiver=$row_check1['memberID'];
  
  if(isset($_POST["submit"])) {
  //$files[]="";
if(count($_FILES['upload']['name']) > 0){ 

    //Loop through each file 
    for($i=0; $i<count($_FILES['upload']['name']); $i++) { 

        //Get the temp file path 
        $tmpFilePath = $_FILES['upload']['name'][$i]; 

        //Make sure we have a filepath 
        if($tmpFilePath != ""){ 

            //save the filename 
            $shortname = $_FILES['upload']['name'][$i]; 

            //save the url and the file 
            $filePath = "xrays/" .$_FILES['upload']['name'][$i]; 

            //Upload the file into the temp dir             
            if(move_uploaded_file($tmpFilePath, $filePath)) { 
                $files[] = $shortname;
            } 
        } 
    } 
}
  
            // Insert image file name into database           
 if(is_array($files)){ 

$completeFileName = implode(',',$files);

  $sql= "INSERT INTO `message`(`sender_id`, `receiver_id`, `subject`,`body`,`image`) VALUES ('$sender','$receiver','$subject','$body','$completeFileName')";
  $quey=$conn->query($sql);
  if($quey){
   echo"<script>alert('X ray(s) Sent')</script>"; 
      echo $completeFileName;
      //echo $files[];
      echo 'test';
      //echo "<script>window.open('email-compose.php','_self')</script>";
  }else{
            echo"<script>alert('Error Sending Try again!')</script>"; 
      echo "<script>window.open('email-compose.php','_self')</script>";
  }
}
  }         
?>