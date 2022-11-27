<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="Admin.css">
	<link rel="stylesheet" href="add.css">
</head>
<body>
    <div id="header" style="position:fixed;">
		<label>Ethio <span>Travel Agency</span> Admin</label>
        	<a style="font-size:20px; text-decoration:none; color:white; float:right; margin-right:50px; margin-top:10px;" href="index.php">Logout</a>
	
    </div>
	<div id="leftnav">
		<ul>
		
			<li><a href="customers.php">Booked</a></li>
			<li><a href="Messages.php">Messages</a></li>
		
			<li><a href="Add_admin.php" class="Active">Add Admin</a></li>
		</ul>
	</div>
	<div id="rightcontent" style="position:absolute; top:10%;">
		<div id="add" class="modal hide fade" style="width:400px;">
			<div class="modal-header">
			<h3 id="Label">Add Admin...</h3>
		</div>
		<section class="we">
		<div class="log1">
		  <form class="login_form" action="Add_admin.php" method="POST" name="form" onsubmit="return validated()">
 
            <input autocomplete="off" type="email" name="email"placeholder="Email"><br><br>
 
  
            <input  type="text" name="Firstname" placeholder="Firstname" required><br><br>
   
            <input  type="text" name="Secondname" placeholder="Secondname" required><br><br>
             
		
            <input type="password" name="password" placeholder="password" required><br><br>
            
             <button type="submit" name="submit"> Submit</button>
         </form>
         </div>
         </section>

<?php
$conn = mysqli_connect('localhost', 'root', '','admin_db');
if(!$conn){
    die("Fatal Error: Connection Error!"); 
}
if(isset($_POST['submit'])){
$email = $_POST['email'];
$Firstname = $_POST['Firstname'];
$Secondname = $_POST['Secondname'];
 $password = $_POST['password'];

$statement=("SELECT * FROM `admin` WHERE `email` = '$email'");
$query = mysqli_query($conn,$statement);
$check =mysqli_num_rows($query);
if ($check == 1) {
    echo "<script>alert('EMAIL ALREADY EXIST')</script>";
}
 else {
    $statement1=("INSERT INTO admin(email, Firstname, Secondname,password) values('$email','$Firstname','$Secondname','$password')");
    $check=mysqli_query($conn,$statement1);
   
	header ("location:Add_admin.php");
}
}

?>
</div>
</body>
</html>