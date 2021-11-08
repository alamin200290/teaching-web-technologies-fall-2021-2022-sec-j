<?php 
	require_once('../model/usersModel.php');

	$username 	= $_REQUEST['username'];
	$password 	= $_REQUEST['password'];
	$email 		= $_REQUEST['email'];
	$id 		= $_REQUEST['id'];

	$user = ['id'=>$id, 'username'=>$username, 'password'=>$password, 'email'=>$email];
	$status = editUser($user);

	if($status){
		header('location: ../views/userlist.php');
	}else{
		header('location: ../edit.php?id='.$id);
	}

?>