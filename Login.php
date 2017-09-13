 <?php  $thisPage="loginPage.php"; ?>
<?php 
session_start();

 
 if (isset($_SESSION["access_granted"]) && $_SESSION["access_granted"] == true) {
    header("Location:index.php");
  }

  $email = "";
  if (isset($_SESSION["email_preset"])) {
    $email = $_SESSION["email_preset"];
  }
?>


<html>
<?php include_once('head.php') ?>
<?php include_once('header.php') ?>
<div id ="userOptions">
<a href="CreateAccount.php">Create Account</a>
</div>
<?php include_once('navigation.php')?>
<body>
<h2>Log Into Account</h2>

	<span id="errors">
		<?php if (isset($_SESSION['errors'])) {?>
		<?php if (isset($_SESSION['errors']['password'])) {?>
		<br><span id="passwordError" class="error"><?= $_SESSION['errors']['password']   ?></span><?php }  ?>
		<?php if (isset($_SESSION['errors']['emailValid'])) {?>
		<br><span id="passwordError" class="error"><?= $_SESSION['errors']['emailValid']   ?></span><?php }  ?>
		<?php if (isset($_SESSION['errors']['email'])) {?>
		<br><span id="passwordError" class="error"><?= $_SESSION['errors']['email']  ?></span><?php }  ?>
		<?php if (isset($_SESSION['errors']['doesntmatch'])) {?>
		<br><span id="passwordError" class="error"><?= $_SESSION['errors']['doesntmatch']?></span><?php }  ?>
		<?php if (isset($_SESSION['errors']['noAccess'])) {?>
		<br><span id="passwordError" class="error"><?= $_SESSION['errors']['noAccess'] ?></span>
		<?php }  ?>
		<?php }  ?>
		<?php if (isset($_SESSION['success'])) {?>
		<br><span id="passwordError" class="error"><?= $_SESSION['success']['success']   ?></span><?php }  ?>
	</span>
	
	

<div id="logininputs">
	<form method="POST" action="login_handler.php">
		<label for="email">Enter your Email:</label><br>
		<input type="text" name="email" id="email" value="<?php if(isset($_SESSION['failedemail'])) {?> <?= $_SESSION['failedemail'] ?> <?php } ?> " ><br>
	
		<label for="password">Enter your Password:</label><br>
		<input type="text" name="password" id="password" ><br>
		
		<span id="login"><label for"Login">Login Button:</label></span>
		<input type="submit" name="Login">
	</form>
</div>
</body>

<?php include_once('footer.php')?>
<script>
$("span").ready(function(){
	$("#errors").click(function(){
	  $("#errors").fadeOut();
	});
}); 
</script>
</html>


