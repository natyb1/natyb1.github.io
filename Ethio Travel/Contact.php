<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
    <link rel="stylesheet" href="./css/all.min.css" />
    <link rel="stylesheet" href="./css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<style>

  body,
html {
  margin: 0;
  padding: 0;
  font-family: sans-serif;
}

textarea {
  font-family: sans-serif;
}

* {
  box-sizing: border-box;
}

.wrapper {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
  margin-top:60px;
 background: rgb(155, 150, 150);
}

.d-grid {
  display: grid;
}

.text-center {
  text-align: center;
  
}

.text-left {
  text-align: left;
}

.text-right {
  text-align: right;
}

button,
select {
  outline: none;
  appearance: none;
}

button,
.btn,
select {
  cursor: pointer;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
}

a {
  text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  margin: 0;
  padding: 0;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
}

p {
  margin: 0;
  padding: 0;
}

/* Section top bottom gap */
.section-gap {
  padding: 4.5rem 0;
}


/* / Section top bottom gap */

/* title-styling */
h3.global-title {
  font-size: 40px;
  line-height: 45px;
  color: #16191e;
  margin-bottom: 50px;
  text-transform: capitalize;
}

/* / title-styling */


/* contact1 */
  .margin-up {
    margin-top: 2.5rem;
  }

  h4.sub-title {
    font-size: 16px;
    margin: 0;
    color: #3ecb36;
    font-weight: normal;
  }

  .contact-view {
    grid-template-columns: 1fr 1.3fr;
    grid-gap: 30px;
  }

  .cont-top {
    display: grid;
    grid-template-columns: 20px auto;
    grid-column-gap: 20px;
  }

  .twice {
    margin-bottom: 20px;
  }

  .cont-details span.fa {
    font-size: 22px;
    color: #4cb1ff;
    display: block;
    margin-top: 3px;
  }

  .cont-details h6 {
    font-size: 20px;
    color: #051b35;
    font-weight: 600;
  }

  .cont-details p,
  .cont-details p a {
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 24px;
    color: whitesmoke;
    margin-top: 3px;
  }

  .cont-details p a:hover {
    text-decoration: underline;
    opacity: 0.8;
    color: #051b35;
  }

  .cont-details address {
    margin: 25px 0;
  }

  .cont-details address p {
    margin: 5px 0;
  }

  .twice-two {
    display: grid;
    grid-gap: 20px;
    grid-template-columns: 1fr 1fr;
    margin-bottom: 20px;
  }

  .map-content form input,
  .map-content form textarea {
    background: #f8f9fa;
    border: 2px solid rgba(216, 216, 216, 0.3);
    color: #777;
    font-size: 16px;
    padding: 12px 15px;
    width: 100%;
    border-radius: 4px;
    height: 55px;
  }

  .map-content h5 {
    font-size: 25px;
    line-height: 30px;
    margin-bottom: 20px;
    color: #000000;
  }

  .map-content form textarea {
    resize: none;
    min-height: 140px;
  }

  .map-content form input:focus,
  .map-content form textarea:focus {
    outline: none;
    border: 2px solid #051b35;
    background: #fff;
    box-shadow: none;
  }

  button.btn-contact {
    border: none;
    font-size: 16px;
    padding: 15px 30px;
    margin: 20px auto 0;
    color: #fff;
    background: #3ecb36;
    border-color: #4cb1ff;
    display: inline-block;
    font-weight: 400;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
   
    user-select: none;
    border: 1px solid transparent;
    border-radius: 0.25rem;
  }

  .cont-details h6 a {
    color: #051b35;
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
        <li><a  href="index.php">home</a></li>
        <li><a href="about.php">about</a></li>
        <li><a href="Shop.php">shop</a></li>
        <li><a id="active" href="Contact.php">Contact Us</a></li>
        <li><a href="#places">places <i class="fas fa-caret-down"></i></a>
        
         <ul class="dropdown">
              <li><a href="Lalibela.php">Lalibella </a>
               
              <!-- <ul class="dropdown2">
              <li><a href="Lalibella.php">Lalibella</a></li>
              <li><a href="#">Lalibella</a></li>
              <li><a href="#">Lalibella</a></li>
            
            </ul> -->
              
                
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



  <!-- contact1 -->
    <div class=" section-gap"></div>
      <div class="wrapper">
        
        <h3 class="global-title text-center">Contact us</h3>
        <div class="d-grid contact-view">
          <div class="cont-details">


            <div class="cont-top">

              <div class="cont-left text-center">
               <i style="font-size:25px;"  class="fas fa-phone"></i>
              </div>

              <div class="cont-right">
                <h6>Call Us</h6>
                <p><a href="#">+251-94271605</a></p>
                <p><a href="#">+251-986664047</a></p>
              </div>

            </div>


            <div class="cont-top margin-up">

              <div class="cont-left text-center">
               <i style="font-size:25px;" class="fas fa-envelope"></i>
              </div>
              <div class="cont-right">
                <h6>Email Us</h6>
                <p><a href="mailto:example@mail.com" class="mail">Ethiotravel@gmail.com</a></p>
              </div>
              
            </div>


            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <i style="font-size:25px;" class="fas fa-map-marker"></i>
              </div>
              <div class="cont-right">
                <h6>Address</h6>
                <p>Bahirdar Ethiopia</p>
              </div>
            </div>
          </div>



          <div class="map-content">
            <form action="#" method="post">
              <div class="twice-two">
                <input type="text" class="form-control" name="name" id="w3lName" placeholder="Name" required="">
                <input type="email" class="form-control" name="sender" id="w3lSender" placeholder="Email"
                  required="">
              </div>

              <div class="twice">
                <input type="text" class="form-control" name="subject" id="w3lSubject" placeholder="Subject"
                  required="">
              </div>

              <textarea name="message" class="form-control" id="w3lMessage" placeholder="Message"
                required=""></textarea>
              <button name="sendmsg" type="submit" class="btn btn-contact">Send Message</button>
            </form>
          </div>

        </div>
      </div>
    

</section>




       <!-- Footer section begins -->
    <section class="footer">
      <div class="box-container">
        <div class="box">
          <h3>about us</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda
            quas magni pariatur est accusantium voluptas enim nemo facilis sit
            debitis.
          </p>
        </div>
        <div class="box">
          <h3>branch locations</h3>
         <i></i> <a href="#">india</a>
          <a href="#">USA</a>
          <a href="#">japan</a>
          <a href="#">france</a>
        </div>
        <div class="box">
          <h3>quick links</h3>
          <a href="index.php">home</a>
          <a href="about.php">about</a>
          <a href="#visit">places</a>
          <a href="Shop.php">Shop</a>
          <a href="Contact.php">contact</a>
        </div>
        <div class="box">
          
         <h3>follow us</h3></i> 
          <a href="#"><i class="fab fa-facebook"></i>facebook</a>
          <a href="#"><i class="fab fa-instagram"></i>instagram</a>
          <a href="#"><i class="fab fa-twitter-square"></i>twitter</a>
          <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
        </div>
      </div>

      <h1 class="credit">
        <span>Ethio TRavel Agency</span> | all rights reserved!
      </h1>

    </section>
    <!-- Footer section ends -->

    <script src="./js/swiper-bundle.min.js"></script>
    <!-- custom js file link  -->
    <script src="js/script.js"></script>
</body>
</html>



<?php
$conn = mysqli_connect('localhost', 'root', '','contact');
if(!$conn){
    die("Fatal Error: Connection Error!");
}
if(isset($_POST['sendmsg'])){
$firstname=$_POST['name'];
$lastname=$_POST['sender'];
$username=$_POST['subject'];
$email=$_POST['message'];

$statement=("SELECT * FROM `contactform` WHERE `email` = '$email'");
$query = mysqli_query($conn,$statement);
$checkrow =mysqli_num_rows($query);
if ($checkrow == 1) {
    echo "<script>alert('EMAIL ALREADY EXIST')</script>";
} else {
    $statement1=("INSERT INTO contactform ( name , sender, subject, message)VALUES ('$firstname','$lastname','$username','$email')");
    mysqli_query($conn,$statement1);
    echo "<script>alert('You Have Successfully Sent The Message')</script>";
}
}

?>