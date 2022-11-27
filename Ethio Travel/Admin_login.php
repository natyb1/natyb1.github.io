<!DOCTYPE html>
<html>
    <head>
  <title>Admin Login</title>
  <link rel="stylesheet" type="text/css" href="back.css">

    </head>
    <body>




<style>

			.logg{
				background:whitesmoke;
				background-size: cover;
				background-position:center:
				align-items: center;
				justify-content: center;
				display: flex;
				font-family: sans-serif;
			}
			.log{
				position: relative;
				margin-top: 50px;
				width: 450px;
				height: auto;
				background: linear-gradient(rgba(0,0,0,0.9),rgba(0,0,0,0.3));
				border-radius: 15px;
			}
			.log2{
				position: relative;
				margin-top: 250px;
				width: 450px;
				height: auto;
				background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5));
				border-radius: 5px;
			}
			.label{
				padding: 20px 130px;
				font-size: 29px;
				font-weight: bold;
				color: #ffffff;
			}
			.login_form{
				padding: 20px 40px;
			}
			.login_form .font{
				font-size: 18px;
				color: #ffffff;
				margin: 5px 0;
			}
			.login_form input{
				height: 40px;
				width: 350px;
				padding: 0 5px;
				font-size: 18px;
				outline: none;
				border: 1px solid silver;
			}
			.login_form input label{
				float: right;
			}
			.login_form .font2{
				margin-top: 30px;
			}
			.login_form button{
				margin: 45px 0 30px 0;
				height: 45px;
				width: 365px;
				font-size: 20px;
				color: white;
				outline: none;
				cursor: pointer;
				font-weight: bold;
				background: green;
				border-radius: 3px;
				border: 1px solid #3949AB;
				transition: .5s;
			}
			.login_form button:hover{
				background: #151c6a;
			}
			.login_form #email_error,
			.login_form #pass_error{
				margin-top: 5px;
				width: 345px;
				font-size: 18px;
				color: #C62828;
				background: rgba(255,0,0,0.1);
				text-align: center;
				padding: 5px 8px;
				border-radius: 3px;
				border: 1px solid #EF9A9A;
				display: none;
			}
</style>
  

   <section class="logg">
   <div class="log">
        <h1 class="label">Admin Login</h1>
        <form class="login_form" action="Admin_login.php" method="POST" name="form" onsubmit="return validated()">
            <div class="font">Email</div>
            <input autocomplete="off" type="text" name="email" required placeholder="Email">
            <div id="email_error">Please fill up your Email or Phone</div>
            <div class="font font2">Password</div>
            <input  type="password" name="password" required placeholder="password">
            <div id="pass_error">Please fill up your Password</div>
            <button type="submit" name="login">Login</button>
          <br><br>
					<a href="index.php ">Home</a>
					</div> 
						<br><br>
					
        </form>
    </div>  
    <script src="script.js"></script>
        </section>
    </body>
</html>
<?php
if(isset($_POST['login'])){
$email=$_POST['email'];
$password=$_POST['password'];
$conn = mysqli_connect('localhost', 'root', '','admin_db');
$sql="SELECT * FROM admin WHERE email = '$email' and password = '$password' ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$count = mysqli_num_rows($result);
if($count == 1){
  echo "<script>alert('Login successful')</script>";
  header ("location:Customers.php");
}
else{
  echo "<script>alert('Wrong username or password')</script>";
  header("location:Admin_login.php");
}
}
?>
