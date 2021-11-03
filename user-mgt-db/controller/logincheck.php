<?php
	session_start();
	require_once('../model/usersModel.php');

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username != ""){
			if($password != ""){
				/*$myfile = fopen('../model/user.txt', 'r');

				while (!feof($myfile)) {
					$data = fgets($myfile);
					$user = explode('|', $data);
					if(trim($user[0]) == $username && trim($user[1]) == $password){
						setcookie('flag', 'true', time()+3600, '/');
						header('location: ../views/home.php');
					}
				}*/

				$status = validate($username, $password);
				
				if($status){
					setcookie('flag', 'true', time()+3600, '/');
					header('location: ../views/home.php');
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