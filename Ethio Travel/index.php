<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>

   
    <!-- all min css is  used for icons ofline -->
    <!-- swiper is used for different sliding styles -->
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
        <li><a id="active" href="index.php">home</a></li>
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
        <li><a href="login.php">Book</a></li>
        <li><a href="Gallery.php">Gallery</a></li>
      <li><a href="Admin_login.php">Admin</a></li>
          <a href="login.php" class="login-logo"><i class="fas fa-user-plus"></i></a>
          
      </ul>
      

       
      </nav>
</div>
    <!-- header section ends -->



    <!-- home section starts -->

    <section class="home" id="home">
      <div class="swiper home-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div
              class="box"
              style="background: url(images/home-bg-1.jpg) no-repeat"
            >
              <div class="content">
                
               
                <a href="#visit" class="btn">get started</a>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div
              class="box second"
              style="background: url(images/home-bg-2.jpg) no-repeat"
            >
              <div class="content">
               
                <a href="#visit" class="btn">get started</a>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div
              class="box"
              style="background: url(images/home-bg-3.jpg) no-repeat"
            >
              <div class="content">
               
                <a href="#visit" class="btn">get started</a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div
              class="box"
              style="background: url(images/home-bg-4.jpg) no-repeat"
            >
              <div class="content">
               
                <a href="#visit" class="btn">get started</a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div
              class="box"
              style="background: url(images/home-bg-5.jpg) no-repeat"
            >
              <div class="content">
               
                <a href="#visit" class="btn">get started</a>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div
              class="box"
              style="background: url(images/home-bg-6.jpg) no-repeat"
            >
              <div class="content">
               
                <a href="#visit" class="btn">get started</a>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </section>

    <!-- home section ends -->





    <!-- visit section begins -->

    <section class="visit" id="visit">
      <h1 class="heading">
        <span>Places tO Visit</span>
      </h1>

      <div class="box-container">
        
        <div class="box">
          <img src="./images/img-1.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i> lalibela</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Veritatis, nam!
            </p>

            <a href="Lalibela.php" class="btn">Read More</a>
          </div>
        </div>

        <div class="box">
          <img src="./images/img-2.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i> omo valley</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Veritatis, nam!
            </p>

            <a href="omo valley.php" class="btn">Read More</a>
          </div>
        </div>

        <div class="box">
          <img src="./images/img-3.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i> semein Mountains</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Veritatis, nam!
            </p>

            <a href="SMNP.php" class="btn">Read More</a>
          </div>
        </div>

        <div class="box">
          <img src="./images/img-4.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i> Gonder</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Veritatis, nam!
            </p>

            <a href="Gonder.php" class="btn">Read More</a>
          </div>
        </div>

        <div class="box">
          <img src="./images/img-5.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i> Axum</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Veritatis, nam!
            </p>

            <a href="Axum.php" class="btn">Read More</a>
          </div>
        </div>

        <div class="box">
          <img src="./images/img-6.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i> Bahirdar</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Veritatis, nam!
            </p>

            <a href="Bahirdar.php" class="btn">Read More</a>
          </div>
        </div>

          <div class="box">
          <img src="./images/img-7.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i> bale</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Veritatis, nam!
            </p>

            <a href="Bale MNP.php" class="btn">Read More</a>
          </div>
        </div>
          <div class="box">
          <img src="./images/img-8.jpg" alt="" />
          <div class="content">
            <h3><i class="fas fa-map-marker-alt"></i> Harar</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Veritatis, nam!
            </p>

            <a href="Harar.php" class="btn">Read More</a>
          </div>
        </div>
         
      </div>
    </section>

    <!-- visit section ends -->

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
