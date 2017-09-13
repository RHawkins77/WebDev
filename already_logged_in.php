 <?php 
 session_start();
 $thisPage="loginPage.php";
?>

<html>
	<head></head>
	  <link href="Styles/TopLinks.css" type="text/css" rel="stylesheet">
	  <link rel="LOGO" type="image/png" href="favicon.ico">	
	
<body>
<p>
<div id="LogoAndName">
<img id="LogoPhoto" src="LOGO.JPG" alt="Logo"/>
</p>
<h1>Jackie's Knitting Nook</h1>
</div>
<a href="logout.php">LOGOUT</a>
</div>

<?php include_once('navigation.php')?>

<h2>Log Into Account</h2>


<span id="loggedIn">YOU ARE ALREADY LOGGED IN MY MAN (OR WOMAN)</SPAN>
</div>
</body>
<?php include_once('footer.php')?>
</html>

