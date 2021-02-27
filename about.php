<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Burger™ – Lafka Burger</title>
  <link rel="apple-touch-icon" sizes="180x180" href="./image/favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./image/favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./image/favicon_io/favicon-16x16.png">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="sass/pages/simple-grid.min.css">
  <link rel="stylesheet" href="fontawesome/css/all.css">
  <script defer src="fontawesome/js/all.js"></script>
  <script src="https://kit.fontawesome.com/c82a8213c7.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./sass/pages/about.css">
</head>

<body>
  <header>
    <div class="menu_item-phone">
      <img src="./image/flame-burgers-logo-clean.png" id="logo" alt="Burger Logo">
    </div>
    <nav>
      <ul class="menu">
        <li class="menu_item">
          <a href="./index.php" class="menu_link">Home</a>
        </li>
        <li class="menu_item">
          <a href="./about.php" class="menu_link">About Burgers</a>
        </li>
        <li class="menu_item" id="menu_logo">
          <img src="./image/flame-burgers-logo-clean.png" id="logo" alt="Burger Logo">
        </li>
        <li class="menu_item">
          <a href="./order.php" class="menu_link">Order online</a>
        </li>
        <li class="menu_item">
          <a href="./contact.php" class="menu_link">Contacts</a>
        </li>
      </ul>
    </nav>
    <!-- <Replicate from this> -->
    <div class="menu_box" style="left: 15%;">
      <h6 class="callbox_title">Order Online or Call Now</h6>
      <h3 class="callbox_main-title">
        <i class="fas fa-phone"></i>
        +8801798-323465
      </h3>
    </div>
    <div class="menu_box" style="right: 15%;">
      <a href="./auth.php"><i class="fas fa-user menu_icon"></i></a>
      <a href="./favouriteBurgers.php"><i class="far fa-heart menu_icon"></i></a>
      <a href="./orderCart.php"><i class="fas fa-shopping-cart menu_icon"></i></a>
      <i class="fas fa-search menu_icon"></i>
    </div>
    <div class="hero-content">
      <h5 class="hero-content_breadcrumb">
        HOME / ABOUT BURGERS
      </h5>
      <h1 class="hero-content_title">ABOUT BURGERS</h1>
      <p class="hero-content_text">
        Serving up lovingly crafted from scratch Pizza, Pasta, Sandwiches, Salads and
        much more, made to order and delivered fast to our North Side neighbors for lunch, dinner and late night.
      </p>
    </div>
  </header>


  <!-------------------------------------------------------------Burger Quality---------------------------------------------------------------------------->


  <section id="about_quality">
    <div class="about_content_heading">
      <h4 class="about_category_heading">
        We only use the highest quality ingredients.
        <br>
        The result is a taste you can swear by.
      </h4>
      <p class="about_burger-content">
        Spicy jalapeno bacon ipsum dolor amet jowl brisket
        burgdoggen, meatball bresaola bacon boudin tri-tip pig pork fatback pork chop prosciutto short ribs pork
        belly.
        Ham boudin rump strip steak, porchetta drumstick picanha spare ribs sausage. Tongue ham hock turkey kevin ham
        short loin tenderloin beef ribs shank turducken chicken.
        Shankle ham boudin porchetta, corned beef ribeye strip steak pork chop.</p>
    </div>
    <div class="about_burger_image">
      <img src="./image/sandwich-board.png" alt="">
    </div>
    </div>
  </section>


  <!----------------------------------------------------------------Food Description--------------------------------------------------------------->

  <section id="about_signature">
    <div class="about_content_heading">
      <div class="about_category_heading">
        <h4 style="color:#fff;font-size: 2.5rem;font-weight: 200;text-align: center;">We make real food by hand, fresh
          to order.
          <br>
          It’s not the fastest way – it’s the right way.
        </h4>

        <p class="about_burger-content">
          Spicy jalapeno bacon
          ipsum dolor amet jowl brisket burgdoggen, meatball bresaola bacon boudin tri-tip pig pork fatback pork chop
          prosciutto short ribs pork belly. Ham boudin rump strip steak, porchetta drumstick picanha spare ribs sausage.
        </p>
      </div>
      <div style="text-align:center;">
        <img src="./image/burgers/signature-white-130x60.png" alt="">
      </div>
    </div>
  </section>



  <!---------------------------------------------------------------------Awards--------------------------------------------------------------------------->



  <section style="margin-bottom: 8rem;">
    <div class="awards">
      <div class="awards_heading">
        <h2 style="color:black;font-size:4.5em;font-weight: 200;padding:8rem 0rem 0rem 0rem;text-align: center;">Press &
          Awards
        </h2>
        <p class="about_burger-content">
          Spicy
          jalapeno bacon ipsum dolor amet jowl brisket burgdoggen, meatball bresaola bacon boudin tri-tip pig pork
          fatback pork chop prosciutto short ribs pork belly. Ham boudin rump strip steak, porchetta drumstick.</p>
      </div>
    </div>

    <div class="blog_heading">
      <div class="blog_category_heading">
        <div class="category_fries" style="text-align:center;">
          <img src="./image/awards-red-600x164.jpg" alt="" id="award_image">
        </div>
      </div>
    </div>
  </section>

  <!---------------------------------------------------------------------Footer---------------------------------------------------------------------->


  <footer class="footer">
    <div class="footer_image">
      <img src="./image/flame-burgers-logo.png" class="footer_image-burger" alt="">
    </div>
    <div class="footer_ending">
      <div class="footer_icon-wrapper">
        <span class="footer_icon">
          <a href="https://lafka.althemist.com/sushi/#">
            <i class="fab fa-facebook-f" style="font-size:2.5rem;color: #fff;"></i>
          </a>
        </span>
        <span class="footer_icon">
          <a href="https://lafka.althemist.com/sushi/#">
            <i class="fab fa-twitter" style="font-size:2.5rem;color: #fff;padding:0px 2px 0px 5px;"></i>
          </a>
        </span>
        <span class="footer_icon">
          <a href="https://lafka.althemist.com/sushi/#">
            <i class="fab fa-youtube" style="font-size:2.5rem;color: #fff;padding:0px 2px 0px 5px;"></i>
          </a>
        </span>
        <span class="footer_icon">
          <a href="https://lafka.althemist.com/sushi/#">
            <i class="fab fa-instagram" style="font-size:2.5rem;color: #fff;padding:0px 2px 0px 5px;"></i>
          </a>
        </span>

      </div>
      <h5 class="footer_terms">
        Lafka theme by theAlThemist | © 2019 All rights reserved!
      </h5>
    </div>
  </footer>
</body>

</html>