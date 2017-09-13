
<?php
require_once('session_helper.php');
if(session_status() === PHP_SESSION_NONE){
session_start();
}
$thisPage = "Home"; ?>
<html>
<title><?= $thisPage?></title>
<?php include_once('head.php') ?>
<?php include_once('header.php') ?>

<body>
<?php include_once('userOptions.php')?>
<?php include_once('navigation.php')?>

	<h2>ABOUT JACKIE</h2>
<div id ="aboutSectionContainer">



	<img id="Jackie" src="Jackie.jpg" alt="PhotoOfJackie"/>
	<p id="aboutGrandma">
	Growing up with a Mother who loved to knit, taught me everything I know. Since I 
	was a young little girl, I can remember learning how to crochet with my Grandma.
	After retiring, I found that, if I was sitting, I was knitting. As my
	grandchildren grew older, my inventory grew larger. I decided that it was time
	to take my various handmades to the road and setup at Holday Bazaars. The greatest
	joy was experiencing the love that others had when they purchased my items. I was
	more surprised when they said they were for themselves and not for gifts (we all know how
	many unwanted Christmas Gift end up in attic boxes) but rather for themselves. I am new
	to the Internet Online sales and will start out with mostly what I have already made and
	available through the website
	</p>
</div>
	</body>
	
	
<?php include_once('footer.php')?>

</html>