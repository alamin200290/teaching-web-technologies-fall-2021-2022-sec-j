<?php
	session_start();

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username != ""){
			if($password != ""){
							
				if($_SESSION['user']['username'] == $username && $_SESSION['user']['password'] == $password){
					$_SESSION['flag'] = "true";
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