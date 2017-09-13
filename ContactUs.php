<?php $thisPage = "ContactUs"; 
if(session_status() === PHP_SESSION_NONE){
session_start();
}
?>
<html>

<?php include_once('head.php') ?>

<?php include_once('header.php') ?>


<body>

<?php include_once('userOptions.php')?>




<?php include_once('navigation.php')?>
<div id="contactUs">
<h2>CONTACT US</h2>
	</div>
	
	<div id="prod">
	 <img src="/q.jpg" alt="gloves">
	</div>
<?php include_once('footer.php')?>


</html>