<?php
	session_start();

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username != ""){
			if($password != ""){
							
				if($_COOKIE['username'] == $username && $_COOKIE['password'] == $password){
					//$_SESSION['flag'] = "true";
					setcookie('flag', 'true', time()+3600, '/');
					header('location: home.php');
				}else{
					echo "invalid username/password";
				}
			}else{
				echo "Invalid password...";
			}
		}else{
			echo "Invalid username...";
		}
	}
?>