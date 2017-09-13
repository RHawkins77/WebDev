<?php


session_start();
require_once('Dao.php');
$dao = new Dao();




$email = 'chuckNorris@roundhouse.com';
$password = 'kickit';

	$whatwrong = $dao->emailUsed(trim($email));
	var_dump($whatwrong);

?>
