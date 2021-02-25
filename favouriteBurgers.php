<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Favourite Burgers™ – Lafka Burger</title>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="sass/pages/simple-grid.min.css">
  <link rel="stylesheet" href="fontawesome/css/all.css">
  <script defer src="fontawesome/js/all.js"></script>
  <script src="https://kit.fontawesome.com/c82a8213c7.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./sass/pages/favouriteBurgers.css">
</head>

<body>
  <header>
    <div class="burger-menu-wrapper">
      <nav>
        <ul class="menu">
          <li class="menu_item">
            <a href="./index.php" class="menu_link">Home</a>
          </li>
          <li class="menu_item">
            <a href="./about.php" class="menu_link">About Burgers</a>
          </li>
          <li class="menu_item">
            <a href="./locations.php" class="menu_link">Locations</a>
          </li>
          <li class="menu_item" id="menu_logo">
            <img src="./image/flame-burgers-logo-clean.png" id="logo" alt="Burger Logo">
          </li>
          <li class="menu_item">
            <a href="./order.php" class="menu_link">Order online</a>
          </li>
          <li class="menu_item">
            <a href="" class="menu_link">Blog</a>
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
      <div class="product">
        <ul class="product-categories">
          <li class="product-category">
            <img class="product-icon" src="./image/iconfinder_Burger_653249.ico" alt="">
            Angus Burgers
          </li>
          <li class="product-category">
            <img class="product-icon" src="./image/iconfinder_Food_C206_2427852.png" alt="">
            STEAK BURGERS
          </li>
          <li class="product-category">
            <img class="product-icon" src="./image/iconfinder_Food_C203_2427849.png" alt="">
            EGGSY BURGERS
          </li>
          <li class="product-category">
            <img class="product-icon" src="./image/iconfinder_french_fries_44613.png" alt="">
            SIDES
          </li>
          <li class="product-category">
            <img class="product-icon" src="./image/iconfinder_cup-soft-drink-water-takeaway-fastfood-cola_4306496 (1).png" alt="" />
            DRINKS
          </li>
          <li class="product-category">
            <img class="product-icon" src="./image/iconfinder_Food_C228_2427887.png" alt="" />
            DESSERTS
          </li>
        </ul>
      </div>
    </div>
    <!-- </Replicate> -->
    <div class="burger-content-wrapper">
      <div class="hero-content" style="color: #333; top: 50%">
        <h5 class="hero-content_breadcrumb">
          HOME / FAVORITE PRODUCTS
        </h5>
        <h1 class="hero-content_title">FAVORITE PRODUCTS</h1>
      </div>
    </div>
  </header>
  <Section>
    <!-- <div style="margin: 10rem auto; text-align: center">
      <p style="color: #777; font-size: 1.8rem; margin-bottom: 3rem">No products added to the wishlist</p>
      <button class="button">RETURN TO SHOP</button>
    </div> -->

    <div>
      <p class="para-title">
        <span><i class="fas fa-pen" style="transform: translateY(6px);"></i></span>
        My Favourites on Lafka Burgers
      </p>
      <ul class="fav">
        <li class="fav_list">
          <span class="fav_icon">
            <i class="far fa-trash-alt"></i>
          </span>
          <span class="fav_image">
            <img src="./image/burgers/burger11-430x430.jpg" />
          </span>
          <span class="fav_title">
            Western Bacon Angus Burger
          </span>
          <span class="fav_price">
            $12.<span class="fav_price-subscript">49</span>
          </span>
          <span class="fav_stockInfo">
            In Stock
          </span>
          <span class="fav_button">
            <button class="button">ADD TO CART</button>
          </span>
        </li>
      </ul>
    </div>
  </Section>
</body>

</html>