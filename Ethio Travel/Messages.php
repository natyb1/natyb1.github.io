<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="Admin.css">
	<link rel="stylesheet" href="messages.css">
</head>
<body>
    <div id="header" style="position:fixed;">
		<label>Ethio <span>Travel Agency</span> Admin</label>
		
		<a style="font-size:20px; text-decoration:none; color:white; float:right; margin-right:50px; margin-top:10px;" href="index.php">Logout</a>

    </div>
	<div id="leftnav">
		<ul>
		
			<li><a href="customers.php">Booked</a></li>
			<li><a href="Messages.php"class="Active">Messages</a></li>
		
			<li><a href="Add_admin.php" >Add Admin</a></li>
		</ul>
	</div>
	<div id="rightcontent" style="position:absolute; top:10%;">
	<div class="alert alert-info"><center><h2 style="color:white; width:auto">Messages</h2></center></div>
	<div class="alert alert-info">
		<table class="table" style=" background-color: gray; color:white; border:2px solid black;">
			<thead>
			<tr style="font-size:20px; width: 200px;">
				<th style="width:300px; text-align:center;">Full Name</th>
				<th style="width:400px; text-align:center;">Email</th>
				<th style="width:500px; text-align:center;"> Message</th>
			</tr>
			</thead>
			<?php
			$conn=mysqli_connect('localhost','root','','contact');
				$query = $conn->query("SELECT * FROM `contactform`") or die(mysqli_error());
				while($fetch = $query->fetch_array())
					{
			?>
			<tr>
				<td style="text-align:center; border-bottom:2px solid black;"><?php echo $fetch['name'];?></td>
				<td style="text-align:center; border-bottom:2px solid black;"><?php echo $fetch['sender'];?></td>
				<td style="text-align:center; border-bottom:2px solid black;"><?php echo $fetch['message']?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</div>

</div>
</body>
</html>