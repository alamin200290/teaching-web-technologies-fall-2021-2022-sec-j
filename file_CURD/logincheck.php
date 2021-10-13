<?php
	session_start();

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username != ""){
			if($password != ""){
				$myfile = fopen('user.txt', 'r');

				while (!feof($myfile)) {
					$data = fgets($myfile);
					$user = explode('|', $data);
					if(trim($user[0]) == $username && trim($user[1]) == $password){
						setcookie('flag', 'true', time()+3600, '/');
						header('location: home.php');
					}
				}

				echo "invalid username/password";

			}else{
				echo "Invalid password...";
			}
		}else{
			echo "Invalid username...";
		}
	}
?>