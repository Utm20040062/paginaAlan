<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IOT</title>
  <link rel="stylesheet" href="./css/front.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
</head>
<body>
  
  <div class="hero" id="home">
    <header>
      <nav class="navbar">
        <div class="brand">
          <h2>IOT</h2>
        </div>
        <ul class="menu" id="menu">
          <li><a href="#home">Home</a></li>
          <li><a href="#products">Products</a></li>
          <li><a href="#support">Support</a></li>
          <li><a href="salir.php">Log-Out</a></li>
        </ul>
        <div class="menu-bar">
          <i class="fas fa-bars" id="menu-bar"></i>
        </div>
      </nav>
    </header>
  <!--MAIN SECTION -->
    <main class="main">
      <div class="content-info">
        <h1 class="display-1">Welcom to the IOT</h1>
        <h3>​The Internet of Things describes physical objects with sensors, processing power, software and other technologies that connect and exchange data with other devices and systems via the Internet or other communication networks.</h3>
        <div class="button-content">
        </div>
      </div>
      <img src="./img/clipart2002867.png" alt="">
    </main>
  </div>
  <!--ABOUT SECTION -->
  <section class="about">
    <h2>Adquire your IOT</h2>
    <div class="divider"></div>
    <div class="about-content"   data-aos-duration="2000">
      <img src="./img/kisspng-internet-of-things-gartner-electronics-data-internet-of-things-callcms-5c07315cdfd012.1698367315439752609167.png" alt="">
      <div class="about-info">
        <h3>You want to adquire your own Arduino Kit?</h3>
        <p>In this Facebook Page you can find a lot of components for your own  arduino kit</p>
        <button class="btn-toBuy">Buy Now</button>
      </div>
    </div>
  </section>
 <!--ABOUT SECTION END-->
  <!--PRODUCT SECTION-->

  <section class="products" id="products">
    <h2>Products</h2>
    <div class="divider"></div>
    <div class="container-products" data-aos-duration="">
      <article>
        <img src="./img/productos/81itBMd1hzL._SL1500_.jpg" alt="">
        <div class="content-product-info">
          <div class="stars">
            <img src="./img/vectores/Frame 1.png" alt="">
            <img src="./img/vectores/Frame 1.png" alt="">
            <img src="./img/vectores/Frame 1.png" alt="">
          </div>
          <h4>Kit Arduino</h4>
        </div>
        <div class="content-price">
          <h3 class="last-price">US $79,09</h3>
          <h3 class="new-price">US $50,42</h3>
        </div>
        <div class="btn-content">
          <button class="btn-product" src="https://www.amazon.com.mx/Elegoo-Project-Starter-Tutorial-Arduino/dp/B01D8KOZF4/ref=asc_df_B01D8KOZF4/?tag=gledskshopmx-20&linkCode=df0&hvadid=295437569208&hvpos=&hvnetw=g&hvrand=18109007166004780230&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=1010000&hvtargid=pla-406302474425&psc=1">More info</button>
        </div>
      </article>
      <article>
        <img src="./img/productos/arduinounor3.png" alt="">
        <div class="content-product-info">
          <div class="stars">
            <img src="./img/vectores/Frame 1.png" alt="">
            <img src="./img/vectores/Frame 1.png" alt="">
            <img src="./img/vectores/Frame 1.png" alt="">
          </div>
          <h4>Tarjetas Por Separado</h4>
        </div>
        <div class="content-price">
          <h3 class="last-price">US $20.99</h3>
          <h3 class="new-price">US $17.99</h3>
        </div>
        <div class="btn-content">
          <button class="btn-product">More info</button>
        </div>
      </article>
      <article>
        <img src="./img/productos/varios-modelos.png" alt="">
        <div class="content-product-info">
          <div class="stars">
            <img src="./img/vectores/Frame 1.png" alt="">
            <img src="./img/vectores/Frame 1.png" alt="">
            <img src="./img/vectores/Frame 1.png" alt="">
          </div>
          <h4>Kit Placas</h4>
        </div>
        <div class="content-price">
          <h3 class="last-price">US $59.99</h3>
          <h3 class="new-price">US $39.99</h3>
        </div>
        <div class="btn-content">
          <button class="btn-product">More info</button>
        </div>
      </article>
    </div>
  </section>

  <div class="support" id="support">
    <div class="support-info">
      <h2>Do you have question?</h2>
      <button class="read-more">Contact</button>
    </div>
    <img src="./img/pngwing.com.png" alt="">
  </div>

  <div class="banner" id="banner">
    <div class="rating">
      <img src="./img/vectores/Star 1.png" alt="">
      <h2>Ups</h2>
    </div>
    <div class="secundary-info">
      <h2>This is the title</h2>
      <h3>This is the slogan</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, minus autem necessitatibus ut optio animi at nulla quod ea vel dolore temporibus deserunt quam commodi ab inventore iure quisquam velit!</p>
      <button class="btn-toBuy">To Buy</button>
    </div>
  </div>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="..." alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  <footer class="footer" id="contact">
    <div class="quicklinks">
    <h3 class="text-center">Quick Links</h3>
      <ul class="menu">

        <li><a href="#home">Home</a></li>
        <li><a href="#products">Products</a></li>
        <li><a href="#support">Support</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
    <div class="brand">
      <h2 class="brand-name">XK-Headphones</h2>
    </div>
    <div class="social-network">
      <i class="fab fa-instagram"></i>
      <i class="fab fa-twitter"></i>
      <i class="fab fa-facebook-f"></i>
    </div>
  </footer>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="js/scripts.js"></script>
</body>
</html>