<?php 
// session_start();
// if(!$_SESSION['email'])
// {
// 	header('Location:index.php');
// }

include '../conn.php';
include "header_admin.php";
$q="SELECT * FROM contact";
$result=mysqli_query($conn,$q);

?>
<br><br><br>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>data fetch</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<body>

<form>
	<table  align="center" cellpadding="5" cellspacing="5"  style="width:80%;" class="table table-hover">
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Fullname</th>
			<th scope="col">Lastname</th>
			<th scope="col">Email</th>
			<th scope="col">Subject</th>
			<th scope="col">Message</th>
			<th scope="col">Date_Time</th>
			<th scope="col">Ip_Address</th>
			<!-- <th scope="col" colspan="2" class="text-center">Action</th> -->
		</tr>
		<?php
			 while($row=mysqli_fetch_assoc($result))
			 {
			 	?>
			 		<tr>
				 		<th scope="col"><?php echo $row['id']; ?></th>
				 		<th scope="col"><?php echo $row['first_name']; ?></th>
				 		<th scope="col"><?php echo $row['last_name']; ?></th>
						<th scope="col"><?php echo $row['email']; ?></th>
						<th scope="col"><?php echo $row['mobile']; ?></th>
						<th scope="col"><?php echo $row['message']; ?></th>
						<th scope="col"><?php echo $row['date_time']; ?></th>
						<th scope="col"><?php echo $row['ip_address']; ?></th>
						<!-- <th scope="col"><a href="delete.php?id=<?php echo $row['id']; ?>" style="text-decoration:none; color:white; background-color: red; border-radius: 5px; float: right; height: 20px; width: 70px; font-size: 15px; text-align: center;">DELETE</a></th> -->
						<!-- <th><a href="edit.php?id=<?php echo $row['id']; ?>" style="text-decoration:none; color:white; background-color: green; border-radius: 5px; float: right; height: 20px; width: 70px; font-size: 15px; text-align: center;">EDIT</a></th> -->
					</tr>
			 	<?php
			 }
		?>
		</table>
		<center><center><a href="dashboard.php" class="link-success" style="font-size: 20px;">BACK</a></center></center>
	
</form>
</body>
</html>