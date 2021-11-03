<?php
	session_start();
	require_once('../model/usersModel.php');

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$email 		= $_POST['email'];

		if($_POST['username'] != ""){
			if($_POST['password'] != ""){
				if($_POST['email'] != ""){

					/*$myfile = fopen('../model/user.txt', 'a');
					$user = $_POST['username']."|".$_POST['password']."|".$_POST['email']."\r\n";

					fwrite($myfile, $user);
					fclose($myfile);*/

					$user = [
								'username'=> $username, 
								'password'=>$password, 
								'email'=> $email, 
								'type'=>'user'
							];
							
					$status = addUser($user);

					if($status){
						header('location: ../views/login.html');
					}else{
						echo "try again...";
					}
					

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