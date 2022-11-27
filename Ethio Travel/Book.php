<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Book</title>

  
    <link rel="stylesheet" href="./css/all.min.css" />
    <link rel="stylesheet" href="./css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>
   <!-- header section starts  -->
<div class="header">
    <div class="title">
     <a href="index.php"><i class="fas fa-plane-departure"></i></a> 
     <h1>Ethio Travel agency</h1>
    </div>  
    
    <nav class="navbar">
      <ul class="main">
        <li><a href="index.php">home</a></li>
        <li><a href="about.php">about</a></li>
        <li><a href="Shop.php">shop</a></li>
          <li><a href="Contact.php">Contact Us</a></li>
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
        <li><a  id="active"  href="login.php">Book</a></li>
         <li><a href="Gallery.php">Gallery</a></li>
         <li><a href="Admin_login.php">Admin</a></li>
          <a href="login.php" class="login-logo"><i class="fas fa-user-plus"></i></a>
      </ul>
      

       
      </nav>
</div>
    <!-- header section ends -->



<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">book your trip!</h1>

   <form action="book_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" required name="name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" required  placeholder="enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" required  placeholder="enter your number" name="phone">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text"  required placeholder="enter your address" name="address">
         </div>
         <div class="inputBox">
            <span>where to :</span>
            <input type="text" required  placeholder="place you want to visit" name="location">
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" required  placeholder="number of guests" name="guests">
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" required  name="arrivals">
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" required  name="leaving">
         </div>
      </div>

      <input type="submit" value="submit"  required  class="btn" name="send">

   </form>

</section>

<!-- booking section ends -->
















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
          <a href="Review.php">review</a>
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