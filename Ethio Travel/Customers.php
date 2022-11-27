<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="Admin.css">
</head>
<body>
    <div id="header" style="position:fixed;">
		<label>Ethio <span>Travel Agency</span> Admin</label>
	<a style="font-size:20px; text-decoration:none; color:white; float:right; margin-right:50px; margin-top:10px;" href="index.php">Logout</a>
    </div>
	<div id="leftnav">
		<ul>
		
			<li><a href="customers.php" class="Active">Booked</a></li>
			<li><a href="Messages.php">Messages</a></li>
		
			<li><a href="Add_admin.php">Add Admin</a></li>
		</ul>
	</div>
	<div id="rightcontent" style="position:absolute; top:10%;">
		<div class="alert alert-info"><center><h2>Booked List</h2></center></div>
		<div class="alert alert-info">
			<table class="table" style=" background-color: black; border:2px solid black;">
				<thead>
				<tr style="font-size:20px; width: 200px; background-color:gray; color:white;">
					<th style="width:300px; text-align:center;">Name</th>
					<th style="width:300px; text-align:center;">Email</th>
					<th style="width:100px; text-align:center;">Phone Number</th>
					<th style="width:400px; text-align:center;">Adress</th>
					<th style="width:100px; text-align:center;"> Location</th>
					<th style="width:100px; text-align:center;"> Guests</th>
					<th style="width:100px; text-align:center;"> Arrival</th>
					<th style="width:100px; text-align:center;"> Leaving</th>
				</tr>
				</thead>
				<?php
				$conn=mysqli_connect('localhost','root','','book_db');
					$query = $conn->query("SELECT * FROM `book_form`") or die(mysqli_error());
					while($fetch = $query->fetch_array())
						{
				?>
				<tr style="border-bottom:2px solid white;">
					<td style="text-align:center; background-color:gray; color:white"><?php echo $fetch['name'];?></td>
					<td style="text-align:center;background-color:gray ;color:white"><?php echo $fetch['email'];?></td>
					<td style="text-align:center;background-color:gray ;color:white"><?php echo $fetch['phone'];?></td>
					<td style="text-align:center;background-color:gray ;color:white"><?php echo $fetch['address'];?></td>
					<td style="text-align:center;background-color:gray; color:white"><?php echo $fetch['location']?></td>
					<td style="text-align:center;background-color:gray; color:white"><?php echo $fetch['guests']?></td>
					<td style="text-align:center;background-color:gray; color:white"><?php echo $fetch['arrivals']?></td>
					<td style="text-align:center;background-color:gray; color:white"><?php echo $fetch['leaving']?></td>
				
				</tr>
				<?php
					}
				?>
			</table>
		</div>
	
	</div>
</body>
</html>