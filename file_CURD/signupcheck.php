<?php
	session_start();

	if(isset($_POST['submit'])){
		if($_POST['username'] != ""){
			if($_POST['password'] != ""){
				if($_POST['email'] != ""){

					$myfile = fopen('user.txt', 'a');
					$user = $_POST['username']."|".$_POST['password']."|".$_POST['email']."\r\n";

					fwrite($myfile, $user);
					fclose($myfile);

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