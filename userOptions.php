






<?php
require_once('session_helper.php');
?>
<div id="userOptions">
<?php if(isset($_SESSION['access_granted']) && ($_SESSION['access_granted'] == true)) { ?>

<a href="logout.php" data-toggle="logoutTip" data-placement="left" title="Click Here to Logout of Your Account">*LOGOUT*</a> 
<div>
<a href="welcome_page.php">*ACCOUNT*</a>
</div>
<?php }else{?>
<a href="Login.php">LOGIN</a>
<a href="CreateAccount.php">Create Account</a>
<?php } ?>
</div>




