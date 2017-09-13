<?php
if(session_status() === PHP_SESSION_NONE){
session_start();
}
require_once('Dao.php');
require_once('user.php');
$dao = new Dao();


$email = trim($_POST['email']);
$password = trim($_POST['password']);
$repassword = trim($_POST['passwordAgain']);
$firstName =  trim($_POST['firstname']);
$lastName =  trim($_POST['lastname']);
$errors = array();
$valid = true;




	if(0 === preg_match('/^.+@.+\.[A-Za-z]{1,5}$/', $email, $matches))
	{
		$errors['email'] = "Invalid Email Address";
	}
	if(empty($password))
	{
		$errors['password'] = "Missing Password. Cannot be empty";
			
	}
	if(strlen($email) <= 10 || strlen($email) > 256)
	{
		$errors['emailSize'] = "Invalid Email Address Size";
			
	}else if(!(filter_var($email, FILTER_VALIDATE_EMAIL)))
	{
		$errors['notEmail'] = "not an email";
	}
	if(!isset($password) === true || strlen($password) > 100)
	{
		$errors['emailsSize'] = "Too small or too big of an email";
				
	}
	if(!($password === $repassword)){
		$errors['passwordMatch'] = "passwords don't match";
	}
	if($dao->emailUsed($email))
	{
		$errors['emailUsed'] = "Email is used Brah!";
		$_SESSION['enteredEmail'] = htmlspecialchars($email);
		$_SESSION['enteredFirst'] = htmlspecialchars($firstName);
		$_SESSION['enteredLast'] = htmlspecialchars($lastName);
		$_SESSION['errors'] = $errors;
	}else{
		$success['success'] = "Account successfully created, please log in";
		$_SESSION['errors'] = $errors;
		$_SESSION['email'] = htmlspecialchars($email);
	
	}
	if(empty($errors)){
	$dao->addUser($email, $password, $firstName, $lastName);
	$_SESSION['success'] = $success;
	header('LOCATION: Login.php');
	}else{
	$_SESSION['errors'] = $errors;
	header('LOCATION: CreateAccount.php');
	}

	




?>