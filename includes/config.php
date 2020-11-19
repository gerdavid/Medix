<?php
ob_start();
session_start();

//set timezone
date_default_timezone_set('Africa/Nairobi');

//database credentials
define('DBHOST','localhost');
define('DBUSER','medixcok_ger');
define('DBPASS','makeit2018');
define('DBNAME','medixcok_medic');

//application address
define('DIR','http://www.andele.co/medix/');
define('SITEEMAIL','info@medix.co.ke/');

try {

	//create PDO connection
	$db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
	//show error
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}

//include the user class, pass in the database connection
include('classes/user.php');
include('classes/phpmailer/mail.php');
$user = new User($db);
?>