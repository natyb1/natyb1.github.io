<!DOCTYPE html>
<html lang="en">
<head>
    <title>signup</title>
    
    <link rel="stylesheet" href="./css/all.min.css" />
    <link rel="stylesheet" href="./css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>

 <style>

    *{
        margin: 0;
        padding: 0;
         text-transform: lowercase;
    }
    body{
       background:whitesmoke;
        background-attachment: fixed;
        overflow-x: hidden;
        color: white;
        font-family: serif;
    }
 
    .logg{
      align-items: center;
      justify-content: center;
      display: flex;
      font-family: sans-serif;
    }
    .log{
      position: relative;
      margin-top: 40px;
      width: 450px;
      height: auto;
      /* background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)); */
      border-radius: 5px;
    }
    .log2{
        position: relative;
      margin-top: 130px;
      width: 450px;
     		background: linear-gradient(rgba(0,0,0,0.9),rgba(0,0,0,0.3));
      /* background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)); */
      border-radius: 5px;
    }
  
   .log2 h1{
       
        font-family: sans-serif;
    }
    .label{
      padding: 20px 130px;
      font-size: 25px;
      font-weight: bold;
      color: #ffffff;
    
    }
    .login_form{
      padding: 10px 40px;
     
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
    .login_form .font{
      margin-top: 5px;
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

      .goback{
        text-decoration:none;
        color:blue;
      }

</style>



    <!-- header section starts  -->
<div class="header">
 <div class="title">
     <a href="index.php"><i class="fas fa-plane-departure"></i></a> 
     <h1>Ethio Travel agency</h1>
    </div>  
    
    <nav class="navbar">
      <ul class="main">
        <li><a id="active" href="index.php">home</a></li>
        <li><a href="about.php">about</a></li>
        <li><a href="Shop.php">shop</a></li>
          <li><a href="Contact.php">Contact Us</a></li>
        <li><a href="#places">places <i class="fas fa-caret-down"></i></a>
        
         <ul class="dropdown">
              <li><a href="Lalibela.php">Lalibella </a>        
          </li> 

              </li>
              <li><a href="omo valley.php">omo valley</a></li>
              <li><a href="SMNP.php">Simien Mountain National Park</a></li>
              <li><a href="Gonder.php">Gonder</a></li>
               <li><a href="Axum.php">Axum</a></li>
              <li><a href="Harar.php">Harar</a></li>
              <li><a href="Bahirdar.php">Bahirdar</a></li>
              <li><a href="Bale MNP.php">Bale Mountain National Park</a></li>
            </ul>
        
        </li>
        <li><a href="login.php">Book</a></li>
        <li><a href="Gallery.php">Gallery</a></li>
        <li><a href="Admin_login.php">Admin</a></li>
          <a href="login.php" class="login-logo"><i class="fas fa-user-plus"></i></a>
      </ul>  
      </nav>
</div>

    <!-- header section ends -->

    <div class="logg">
        <div class="log2">
             <h1 class="label">Create Account</h1>
             <form action="signup.php" method="POST" name="form" class="login_form"  onsubmit="return validated() ">
                  <div class="font"></div>
                 <input required type="text" name="firstname" placeholder="Firstname">
                 <div id="email_error">Please fill up your Email or Phone</div>
                  <div class="font"></div>
                 <input required type="text" name="lastname" placeholder="Lastname">
                  <div class="font"></div>
                 <input required type="text" name="username" placeholder="Username" >
                 <div class="font"></div>
                 <input  type="email" name="email" placeholder="email" >
                 <div class="font"></div>
                 <input  type="password" name="password" placeholder="Password" > 
                 <div class="font font2"></div>
                 <input required type="tel" name="phonenumber" placeholder="Phonenumber">
                 <div id="pass_error">Please fill up your Password</div>
                 <button type="submit" name="sign">Signup</button> 
                <div style="font-size:18px"><label for="">Already have an acccount?</label> <a class="goback" href="login.php">Login</a>
                </div>
                	<br><br>
					
             </form>
         </div>  
        </div>

     <script >

var email = document.forms["form"]["email"];
var password = document.forms["form"]["password"];

var email_error = document.getElementById("email_error");
var pass_error = document.getElementById("pass_error");

email.addEventListener("textInput", email_Verify);
password.addEventListener("textInput", pass_Verify);

function validated() {
    if (email.value.length < 9) {
        email.style.border = "1px solid red";
        email_error.style.display = "block";
        email.focus();
        return false;
    }
    if (password.value.length < 6) {
        password.style.border = "1px solid red";
        pass_error.style.display = "block";
        password.focus();
        return false;
    }
}

function email_Verify() {
    if (email.value.length >= 8) {
        email.style.border = "1px solid silver";
        email_error.style.display = "none";
        return true;
    }
}

function pass_Verify() {
    if (password.value.length >= 5) {
        password.style.border = "1px solid silver";
        pass_error.style.display = "none";
        return true;
    }
}

     </script>
    </body>
</html>
<?php
$conn = mysqli_connect('localhost', 'root', '','signup');
if(!$conn){
    die("Fatal Error: Connection Error!");
}
if(isset($_POST['sign'])){
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$phonenumber=$_POST['phonenumber'];
$statement=("SELECT * FROM `signupform` WHERE `email` = '$email'");
$query = mysqli_query($conn,$statement);
$checkrow =mysqli_num_rows($query);
if ($checkrow == 1) {
    echo "<script>alert('EMAIL ALREADY EXIST')</script>";
} else {
    $statement1=("INSERT INTO signupform (firstname, lastname, username,email,password,phonenumber)VALUES ('$firstname','$lastname','$username','$email','$password','$phonenumber')");
    mysqli_query($conn,$statement1);
    echo "<script>alert('You Have Successfully Signed Up')</script>";
}
}

?>
