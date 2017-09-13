<?php $thisPage = "createAccount";
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

<h2>CREATE ACCOUNT</h2>
		



		<?php if (isset($_SESSION['errors'])){?>
		<?php if (isset($_SESSION['errors']['password'])) {?>
		<br><span id="passwordError" class="error"><?= htmlspecialchars($_SESSION['errors']['password'])   ?></span><?php }  ?>
		<?php if (isset($_SESSION['errors']['emailSize'])) {?>
		<br><span id="passwordError" class="error"><?= htmlspecialchars($_SESSION['errors']['emailSize'])   ?></span><?php }  ?>
		<?php if (isset($_SESSION['errors']['notEmail'])) {?>
		<br><span id="passwordError" class="error"><?= htmlspecialchars($_SESSION['errors']['notEmail'])   ?></span><?php }  ?>
		<?php if (isset($_SESSION['errors']['emailsSize'])) {?>
		<br><span id="passwordError" class="error"><?= htmlspecialchars($_SESSION['errors']['emailsSize'])?></span><?php }  ?>
		<?php if (isset($_SESSION['errors']['passwordMatch'])) {?>
		<br><span id="passwordError" class="error"><?= $_SESSION['errors']['passwordMatch'] ?></span>
		<?php }  ?>
		<?php if (isset($_SESSION['errors']['emailUsed'])) {?>
		<br><span id="passwordError" class="error"><?= $_SESSION['errors']['emailUsed'] ?></span>
		<?php }  ?>
		<?php }  ?>

		
<div id="accountCreatorHandler">
	<form method="POST" action="account_creator_handler.php">
		<label for="email">Enter your Email:</label><br>
		<input type="text" name="email" id="email" required><br>
		<label for="password">Enter your Password:</label><br>
		<input type="text" name="password" id="password"required><br>
		<label for="passwordAgain">Re-Enter your Password:</label><br>
		<input type="text" name="passwordAgain" id="passwordAgain" required><br>
		<label for="First Name">Enter your First Name:</label><br>
		<input type="name" name="firstname" id="firstname" value="" required><br>
		<label for="Last Name">Enter your Last Name:</label><br>
		<input type="name" name="lastname" id="lastname" value="" required><br>
		<label for"SubmitInfo">Submit:</label>
		<input type="submit" name="SubmitInfo">
	</form>
</div>
	
	

	
<?php include_once('footer.php')?>
<script>
$("span").ready(function(){
	$("#errors").click(function(){
	  $("#errors").fadeOut();
	});
}); 
</script>
</html>
