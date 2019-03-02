<?php

session_start();
if(!isset($_SESSION['user'])){
	header('location:fb.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
welcome to home page  <?php  echo $_SESSION['user']; ?>

<a href="logout.php">Logout Me</a>
</body>
</html>