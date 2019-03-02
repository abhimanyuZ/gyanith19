<?php

if ($_POST['username'] == 'abhi'  && $_POST['password'] == 'p')
{
	session_start();
	$_SESSION['user'] = $_POST['username'];
	header('location:home.php');
}

else
{
	header('location:fb.php');
}

?>