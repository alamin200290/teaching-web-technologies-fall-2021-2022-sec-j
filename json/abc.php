<?php 

	$json = json_decode($_REQUEST['data']);
	/*print_r($json->name);
	print_r($json->email);
	print_r($json->dept);*/

	$data = ['name'=>'alamin', 'age'=>11, 'email'=>'alamin@aiub.edu'];
	echo json_encode($data);
?>