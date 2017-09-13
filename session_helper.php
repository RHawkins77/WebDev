<?php


function isAccessGranted(){
	if(isset($_SESSION['access_granted']) && ($_SESSION['access_granted'] === true)){
		return true;
	}else{
		return false;
	}
}
?>