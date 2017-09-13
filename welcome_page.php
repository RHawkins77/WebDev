
<?php

if(session_status() === PHP_SESSION_NONE){
session_start();
} 
?>

<?php
if(!isset($_SESSION['access_granted'])){
		$_SESSION['errors']['noAccess'] = "Hey you are not allowed to go there without Logging in!!!!";
		header('Location:Login.php');
}else{
	$customerEmail = $_SESSION['user_email'];
}
?>

<?php include_once('head.php') ?>
<?php include_once('header.php') ?>
<?php include_once('userOptions.php')?>
<?php include_once('navigation.php')?>

<body>
	<div id= "welcome">
		<p>WELCOME TO OUR LOGIN PAGE<br> <?= $_SESSION['user_email']?>
		<br> 
		You have successfully logged in. Non-members will NOT be accessing this cool page. Feel free to browse around and buy some things.<p>
	</div>
 </body>

<?php include_once('footer.php')?>


