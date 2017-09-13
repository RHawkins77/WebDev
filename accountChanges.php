
<?php

if(session_status() === PHP_SESSION_NONE){
session_start();
} 
?>



<?php
if(!isset($_SESSION["access_granted"])){
		$_SESSION['errors']['noAccess'] = "Hey you are not allowed to go there without Logging in.";
		header('Location:Login.php');
}
?>






<?php include_once('head.php') ?>

<?php include_once('header.php') ?>


<body>

<?php include_once('userOptions.php')?>


<?php include_once('navigation.php')?>
<div = "welcome">
<h1>WELCOME <?= $_SESSION['customerName'] ?>.</H2>
<div>


 </body>

<?php include_once('footer.php')?>

