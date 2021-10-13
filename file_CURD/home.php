<?php 
	session_start();
	if(isset($_COOKIE['flag'])){
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home Page</title>
</head>
<body>
	<h1>Welcome Home!</h1>
	<a href="create.php"> Create New User</a> |
	<a href="userlist.php"> User List</a> |
	<a href="logout.php"> logout</a>
</body>
</html>

<?php
	}else{
		header('location: login.html');
	}
?>