<?php 
session_start();
require_once('Dao.php');
$dao = new Dao();
$email = trim($_POST['email']);
$password = trim($_POST['password']);
$errors = array();
$valid = true;



	if(0 === preg_match('/^.+@.+\.[A-Za-z]{1,5}$/', $email, $matches)){
		$errors['emailValid'] = "Invalid Email Address";
	}
	if(empty($password)){
		$errors['password'] = "Missing Password. Cannot be empty";
	}
	if(strlen($email) <= 5 || strlen($email) > 256){
		$errors['email'] = "Invalid Email Address Size";
	}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$errors['email'] = "not an email";
	}
	if(!isset($password) === true || strlen($password) > 100){
		$errors['password'] = "Too small or too big of an email";
	}
	if($dao->doesUserAndPasswordMatch(trim($email), trim($password)))
	{
	$_SESSION['user_email'] = htmlspecialchars($email);
	$_SESSION['access_granted'] = true;
	}else{
	$errors['doesntMatch'] = "Invalid username or password Entered to Login";
	$_SESSION['failedEmail'] = htmlspecialchars($email);
	$_SESSION['password'] = htmlspecialchars($password);
	$_SESSION['access_denied'] = true;
	}
	if(empty($errors)){
		header('Location:welcome_page.php');
	}else{
		$_SESSION['errors'] = $errors;
		header('Location:login.php');
	}



	?>

	
	
	
<?php	
	
/**

	header('Location:welcome_page.php');

	header('Location:login.php');


This is just html to print out error codes and the user email and password when i started this and was verifying
we were passing the correct info in the right way. Not really relevant but kept in case i needed to use for debugging
---ryan

	<html>
<head></head>
<body>

<p> FULL Email: <?= htmlspecialchars($email) ?></p>
<?php if(isset($emailError)){  ?>
	<span id="emailError" class"error"><?= $emailError ?></span>
<?php	} ?>
<?php if(isset($notAEmail)){  ?>
	<span id="notAEmail" class"error"><?= $notAEmail ?></span>
<?php	} ?>
<?php if(isset($passwordSizeError)){  ?>
	<span id="pwSizeError" class"error"><?= $passwordSizeError ?></span>
<?php	} ?>
<p> FULL password: <?= htmlspecialchars($password) ?></p>

</body>
</html>
	

**/


	
?>

