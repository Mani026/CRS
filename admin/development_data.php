<?php 
// @session_start();
// if(!$_SESSION['fullname'])
// {
// 	header('Location:index.php');
// }

include '../conn.php';
include "header_admin.php";
$q="SELECT * FROM development_form";
$result=mysqli_query($conn,$q);

?>
<br><br><br>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>data fetch</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<form>
	<table  align="center" cellpadding="5" cellspacing="5"  style="width:80%;" class="table table-hover">
		<tr>
			<th>ID</th>
			<th>First Name </th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Mobile</th>
            <th>Development</th>
			<th>Purpose</th>
			<!-- <th colspan="2" class="text-center">Action</th> -->
		</tr>
		<?php
			 while($row=mysqli_fetch_assoc($result))
			 {
			 	?>
			 		<tr>
				 		<th><?php echo $row['id']; ?></th>
						<th><?php echo $row['first_name']; ?></th>
						<th><?php echo $row['last_name']; ?></th>
						<th><?php echo $row['email']; ?></th>
						<th><?php echo $row['mobile_no']; ?></th>
						<th><?php echo $row['development']; ?></th>
						<th><?php echo $row['short_description']; ?></th>

                        <!-- <th><a href="delete.php?id=<?php echo $row['id']; ?>" style="text-decoration:none; color:white; background-color: red; border-radius: 5px; float: right; height: 20px; width: 70px; font-size: 15px; text-align: center;">DELETE</a></th> -->
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