<?php 

	require_once('../model/usersModel.php');
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User List</title>
</head>
<body>

	<center>	
		<a href="home.php">Back </a> |
		<a href="../controller/logout.php"> logout</a>
	</center>

	<br>

	<table border="1" align="center">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>PASSWORD</th>
			<th>EMAIL</th>
			<th>ACTION</th>
		</tr>

	<?php  
		$result = getAllUsers();
		while ($user = mysqli_fetch_assoc($result)) { 
	?>
		<tr>
			<td><?=$user['id']?></td>
			<td><?=$user['username']?></td>
			<td><?=$user['password']?></td>
			<td><?=$user['email']?></td>
			<td>
				<a href="edit.php?id=1"> EDIT</a> | 
				<a href="delete.php?id=1"> DELETE</a> 
			</td>
		</tr>
	<?php } ?>
	</table>
</body>
</html>