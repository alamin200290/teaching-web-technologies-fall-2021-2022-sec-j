<?php

	if(isset($_POST['submit'])){

		if($_POST['username'] != ""){
			if($_POST['password'] != ""){
				if($_POST['email'] != ""){
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