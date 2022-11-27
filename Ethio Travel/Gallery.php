<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- custom css file link  -->
    <!-- <link rel="stylesheet" href="css/indexstyle.css" /> -->
    <!-- all min css is  used for icons ofline -->
    <!-- swiper is used for different sliding styles -->
    <link rel="stylesheet" href="./css/all.min.css" />
    <link rel="stylesheet" href="./css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/styles.css">
    <title>Gallery</title>
  </head>

<body>

    <style>
       
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            /* font-family: 'Poppins', sans-serif; */
        }
        
        .container {
            display: flex;
           
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin: 170px 20px 0 20px;
        }
        
        .container .heading {
            width: 50%;
            padding-bottom: 50px;
        }
        
        .container .heading h3 {
            font-size: 3em;
            font-weight: bolder;
            padding-bottom: 10px;
            border-bottom: 3px solid #222;
        }
        
        .container .heading h3 span {
            font-weight: 100;
        }
        
        .container .box {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }
        
        .container .box .dream {
            display: flex;
            flex-direction: column;
            width: 32.5%;
        }
        
        .container .box .dream img {
            width: 100%;
            padding-bottom: 15px;
            border-radius: 5px;
        }
        
        .container .btn {
            margin: 40px 0 70px 0;
            background: #222;
            padding: 15px 40px;
            border-radius: 5px;
        }
        
        .container .btn a {
            color: #fff;
            font-size: 1.2em;
            text-decoration: none;
            font-weight: bolder;
            letter-spacing: 3px;
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
        <li><a href="login.php">Book</a></li>
        <li><a id="active"  href="Gallery.php">Gallery</a></li>
        <li><a href="Admin_login.php">Admin</a></li>
          <a href="login.php" class="login-logo"><i class="fas fa-user-plus"></i></a>
      </ul>
      

       
      </nav>
</div>
    <!-- header section ends -->

    <div class="container">
        <div class="heading">
            <h3>Photo <span>Gallery</span></h3>
        </div>
        <div class="box">

            <div class="dream">
                <img src="images/1.jpg">
                <img src="images/2.jpg">
                <img src="images/3.jpg">
                <img src="images/4.jpg">
                <img src="images/5.jpg">

            </div>

            <div class="dream">
                <img src="images/6.jpg">
                <img src="images/7.jpg">
                <img src="images/8.jpg">
                <img src="images/9.jpg">
                <img src="images/10.jpg">

            </div>

            <div class="dream">
                <img src="images/11.jpg">
                <img src="images/12.jpg">
                <img src="images/13.jpg">
                <img src="images/14.jpg">
                <img src="images/15.jpg">

            </div>

          <div class="dream">
                <img src="images/16.jpg">
                <img src="images/17.jpg">
                <img src="images/18.jpg">
                <img src="images/19.jpg">
                <img src="images/20.jpg">

            </div>



        </div>
        <div class="btn">
            <a href="#">More</a>
        </div>





    </div>

</body>

</html>