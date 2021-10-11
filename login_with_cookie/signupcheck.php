<?php
	session_start();

	if(isset($_POST['submit'])){
		if($_POST['username'] != ""){
			if($_POST['password'] != ""){
				if($_POST['email'] != ""){

					//$_SESSION['username'] 	= $_POST['username'];
					//$_SESSION['password'] 	= $_POST['password'];
					// $user = ['username'=> $_POST['username'], 'password'=> $_POST['password']];
					// $_SESSION['user'] = $user;
					//print_r($_SESSION);

					setcookie('username', $_POST['username'], time()+3600, '/');
					setcookie('password', $_POST['password'], time()+3600, '/');
					setcookie('email', $_POST['email'], time()+3600, '/');

					header('location: login.html');
				}else{
					echo "Invalid email...";
				}	
			}else{
				echo "Invalid password...";
			}
		}else{
			echo "Invalid username...";
		}
	}
?>