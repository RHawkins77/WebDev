<?php
if(session_status() === PHP_SESSION_NONE){
session_start();
}
?>

<nav>
<div id="navigation">
<ul>
<li>
	<a href="index.php" id="navTab">Home</a></li>
	<li>
	<a href="ContactUs.php" id="navTab">Contact Us</a></li>
	<li>
	<a href="gloves.php" id="navTab">Gloves</a></li>
	<li>
	<a href="HeadWare.php" id="navTab">HeadWare</a></li>
	<li>
	<a href="ProdInfo.php" id="navTab">Product Information</a></li>
	<li>
	<a href="Purses.php" id="navTab">Purses</a></li>
	<li>
	<a href="Scarfs.php" id="navTab">Scarfs</a></li>
	<li>
	<a href="Scrubbies.php" id="navTab">Scrubbies</a></li>
	<li>
	<a href="pastEvents.php" id="navTab">Products From The Past</a></li>
</ul>
</div>
</nav>


<?php 

/**
<?php if ($thisPage=="Scarfs") echo " id=\"currentpage\""; ?>

 id='<?php if ($thisPage==="Home") echo " id=\"currentpage\""; ?>'
<?php if ($thisPage=="Gloves") echo " id=\"currentpage\""; ?>


<?php if ($thisPage=="Scrubbies") echo " id=\"currentpage\""; ?>
<?php if ($thisPage=="Shawls") echo " id=\"currentpage\""; ?>
<?php if ($thisPage=="Purses") echo " id=\"currentpage\""; ?>
<?php if ($thisPage=="ProdInfo") echo " id=\"currentpage\""; ?>
<?php if ($thisPage=="UpcomingEvents") echo " id=\"currentpage\""; ?>
<?php if ($thisPage=="ContactUs") echo " id=\"currentpage\""; ?>
**/
?>
