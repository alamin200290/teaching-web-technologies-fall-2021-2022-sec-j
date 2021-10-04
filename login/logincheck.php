<?php

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username != ""){
			if($password != ""){
				
				if($username == $password){
					header('location: home.html');
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