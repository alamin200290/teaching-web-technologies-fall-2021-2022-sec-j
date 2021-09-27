<?php
	
	/*$name = "alamin";
	$id = 12;
	$cgpa = 3.5;*/

	/*$stduent = array(1,'alamin', 4.0);
	$stduent = [1,'alamin', 4.0];
	$stduent = ['id'=>1, 'name'=>'alamin', 'cgpa'=>4.0];

	$stduent[0];
	$stduent['id'];

	$stduents = [
					's1'=>['id'=>1, 'name'=>'alamin', 'cgpa'=>1.0],
					's2'=>['id'=>2, 'name'=>'alamin', 'cgpa'=>2.0],
					's3'=>['id'=>3, 'name'=>'alamin', 'cgpa'=>4.0]
				];

	$stduent['s3']['cgpa'];*/

	/*function sum(){
		return 4+5;
	}

	$c = sum();*/


	/*if(){

	}else{

	}

	for ($i=0; $i < ; $i++) { 
		
	}

	foreach ($students as $std ) {
		$std
	}

	switch (variable) {
		case 'value':
			// code...
			break;
		
		default:
			// code...
			break;
	}

	*/

	$name = 'abc';
	$students = [
		's1'=>['id'=>1, 'name'=>'alamin', 'cgpa'=>1.0],
		's2'=>['id'=>2, 'name'=>'alamin', 'cgpa'=>2.0],
		's3'=>['id'=>3, 'name'=>'alamin', 'cgpa'=>4.0]
	];
	//$d = print($name);
	//echo "Return Value is: ".$d;
	//print_r($stduents['s1']);


	/*for ($i=0; $i <10 ; $i++) { 
		echo "<b> Student Name: </b>".$stduents['s1']['name']."<br>";
	}*/

	echo "<table border=1>
			<tr>
				<td>Name</td>
				<td>ID</td>
				<td>CGPA</td>
			</tr>";

	foreach ($students as $std) {
	
		echo "<tr>
				<td>".$std['name']."</td>
				<td>{$std['id']}</td>
				<td>{$std['cgpa']}</td>
			</tr>";
	}
	echo "</table>"
?>
