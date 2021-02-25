<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Online</title>
    <link rel="apple-touch-icon" sizes="180x180" href="./image/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./image/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./image/favicon_io/favicon-16x16.png">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="sass/pages/simple-grid.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <script defer src="fontawesome/js/all.js"></script>
    <script src="https://kit.fontawesome.com/c82a8213c7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./sass/pages/order.css">
</head>

<body>
    <header>
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

        <div class="menu_box" style="left: 15%;">
            <h6 class="callbox_title">Order Online or Call Now</h6>
            <h3 class="callbox_main-title">
                <i class="fas fa-phone"></i>
                +8801 776 255 895
            </h3>
        </div>
        <div class="menu_box" style="right: 15%;">
            <i class="fas fa-user menu_icon"></i>
            <i class="far fa-heart menu_icon"></i>
            <i class="fas fa-shopping-cart menu_icon"></i>
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
        <div class="menu_box" style="right: 15%;">
            <a href="./auth.php"><i class="fas fa-user menu_icon"></i></a>
            <a href="./favouriteBurgers.php"><i class="far fa-heart menu_icon"></i></a>
            <a href="./orderCart.php"><i class="fas fa-shopping-cart menu_icon"></i></a>
            <i class="fas fa-search menu_icon"></i>
        </div>
        <div class="hero-content">
            <h5 class="hero-content_breadcrumb">
                HOME /ORDER ONLINE
            </h5>
            <h1 class="hero-content_title">ORDER ONLINE</h1>
            <p class="hero-content_text">
                Serving up lovingly crafted from scratch Pizza, Pasta, Sandwiches, Salads and
                much more, made to order and delivered fast to our North Side neighbors for lunch, dinner and late
                night.
            </p>
        </div>
    </header>

    <section>
        <div class="container" style="padding: 7rem 0 5rem;">
            <div class="row" id="product-container">
                <div class="col-4">
                    <div class="burger">
                        <div class="burger_hero">
                            <div class="burger_price">$12
                                <span class="burger_price-subscript">.49</span>
                            </div>
                            <img class="burger_image" src="./image/burgers/burger18-430x430.jpg" alt="" />
                            <div class="burger_icon" data-type="ANGUSBURGERS" data-burger="1"><i class="far fa-heart"></i></div>
                            <!-- <div class="burger_icon">....#####....</div> -->
                        </div>
                        <div class="burger_content">
                            <h3 class="burger_title">Western Bacon Angus Burger</h3>
                            <p class="burger_details">Smoked brisket, tender ribs, smoked sausage, bacon & cheddar with
                                lettuce,
                                tomato, house BBQ & ranch.</p>
                            <button class="burger_order" data-type="ANGUSBURGERS" data-burger="1">Order Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="burger">
                        <div class="burger_hero">
                            <div class="burger_price">$14
                                <span class="burger_price-subscript">.99</span>
                            </div>
                            <img class="burger_image" src="./image/burgers/burger13-430x430.jpg" alt="" />
                            <div class="burger_icon" data-type="ANGUSBURGERS" data-burger="2"><i class="far fa-heart"></i></div>
                            <!-- <div class="burger_icon">....#####....</div> -->
                        </div>
                        <div class="burger_content">
                            <h3 class="burger_title">Port Royal Eggsy Burger</h3>
                            <p class="burger_details">Smoked brisket, tender ribs, smoked sausage, bacon & cheddar with
                                lettuce,
                                tomato, house BBQ & ranch.</p>
                            <button class="burger_order" data-type="ANGUSBURGERS" data-burger="2">Order Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="burger">
                        <div class="burger_hero">
                            <div class="burger_price">$14
                                <span class="burger_price-subscript">.99</span>
                            </div>
                            <img class="burger_image" src="./image/burgers/burger11-430x430.jpg" alt="" />
                            <div class="burger_icon" data-type="ANGUSBURGERS" data-burger="3"><i class="far fa-heart"></i></div>
                            <!-- <div class="burger_icon">....#####....</div> -->
                        </div>
                        <div class="burger_content">
                            <h3 class="burger_title">Onion-y Angus Burger</h3>
                            <p class="burger_details">Smoked brisket, tender ribs, smoked sausage, bacon & cheddar with
                                lettuce,
                                tomato, house BBQ & ranch.</p>
                            <button class="burger_order" data-type="ANGUSBURGERS" data-burger="3">Order Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="burger">
                        <div class="burger_hero">
                            <div class="burger_price">$8
                                <span class="burger_price-subscript">.99</span>
                            </div>
                            <img class="burger_image" src="./image/burgers/burger20-430x430.jpg" alt="" />
                            <div class="burger_icon" data-type="STEAKBURGERS" data-burger="1"><i class="far fa-heart"></i></div>
                            <!-- <div class="burger_icon">....#####....</div> -->
                        </div>
                        <div class="burger_content">
                            <h3 class="burger_title">Portobello ‘Shroom Angus Burger</h3>
                            <p class="burger_details">Smoked brisket, tender ribs, smoked sausage, bacon & cheddar with
                                lettuce,
                                tomato, house BBQ & ranch.</p>
                            <button class="burger_order" data-type="STEAKBURGERS" data-burger="1">Order Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="burger">
                        <div class="burger_hero">
                            <div class="burger_price">$9
                                <span class="burger_price-subscript">.99</span>
                            </div>
                            <img class="burger_image" src="./image/burgers/burger12-430x430.jpg" alt="" />
                            <div class="burger_icon" data-type="EGGSYBURGERS" data-burger="2"><i class="far fa-heart"></i></div>
                            <!-- <div class="burger_icon">....#####....</div> -->
                        </div>
                        <div class="burger_content">
                            <h3 class="burger_title">BBQ Bacon & Egg Burger</h3>
                            <p class="burger_details">Smoked brisket, tender ribs, smoked sausage, bacon & cheddar with
                                lettuce,
                                tomato, house BBQ & ranch.</p>
                            <button class="burger_order" data-type="EGGSYBURGERS" data-burger="2">Order Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="burger">
                        <div class="burger_hero">
                            <div class="burger_price">$11
                                <span class="burger_price-subscript">.99</span>
                            </div>
                            <img class="burger_image" src="./image/burgers/burger16-430x430.jpg" alt="" />
                            <div class="burger_icon"><i class="far fa-heart"></i></div>
                            <!-- <div class="burger_icon">....#####....</div> -->
                        </div>
                        <div class="burger_content">
                            <h3 class="burger_title">Western Bacon Cheeseburger</h3>
                            <p class="burger_details">Smoked brisket, tender ribs, smoked sausage, bacon & cheddar with
                                lettuce,
                                tomato, house BBQ & ranch.</p>
                            <button class="burger_order">Order Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="burger">
                        <div class="burger_hero">
                            <div class="burger_price">$14
                                <span class="burger_price-subscript">.99</span>
                            </div>
                            <img class="burger_image" src="./image/burger19-430x430.jpg" alt="" />
                            <div class="burger_icon" data-type="STEAKBURGERS" data-burger="2"><i class="far fa-heart"></i></div>
                            <!-- <div class="burger_icon">....#####....</div> -->
                        </div>
                        <div class="burger_content">
                            <h3 class="burger_title">Fried Chik’n Colslo Burger</h3>
                            <p class="burger_details">Smoked brisket, tender ribs, smoked sausage, bacon & cheddar with
                                lettuce,
                                tomato, house BBQ & ranch.</p>
                            <button class="burger_order" data-type="STEAKBURGERS" data-burger="2">Order Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="burger">
                        <div class="burger_hero">
                            <div class="burger_price">$14
                                <span class="burger_price-subscript">.99</span>
                            </div>
                            <img class="burger_image" src="./image/burgers/burger14-430x430.jpg" alt="" />
                            <div class="burger_icon" data-type="EGGSYBURGERS" data-burger="3"><i class="far fa-heart"></i></div>
                            <!-- <div class="burger_icon">....#####....</div> -->
                        </div>
                        <div class="burger_content">
                            <h3 class="burger_title">The Egg-ster™ Burger</h3>
                            <p class="burger_details">Smoked brisket, tender ribs, smoked sausage, bacon & cheddar with
                                lettuce,
                                tomato, house BBQ & ranch.</p>
                            <button class="burger_order" data-type="EGGSYBURGERS" data-burger="3">Order Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="burger">
                        <div class="burger_hero">
                            <div class="burger_price">$14
                                <span class="burger_price-subscript">.99</span>
                            </div>
                            <img class="burger_image" src="./image/burger17-430x430.jpg" alt="" />
                            <div class="burger_icon" data-type="STEAKBURGERS" data-burger="3"><i class="far fa-heart"></i></div>
                            <!-- <div class="burger_icon">....#####....</div> -->
                        </div>
                        <div class="burger_content">
                            <h3 class="burger_title">Jalapeno Angus Burger</h3>
                            <p class="burger_details">Smoked brisket, tender ribs, smoked sausage, bacon & cheddar with
                                lettuce,
                                tomato, house BBQ & ranch.</p>
                            <button class="burger_order" data-type="STEAKBURGERS" data-burger="3">Order Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="burger">
                        <div class="burger_hero">
                            <div class="burger_price">$3
                                <span class="burger_price-subscript">.99</span>
                            </div>
                            <img class="burger_image" src="./image/burgers/side5-600x600.jpg" alt="" />
                            <div class="burger_icon" data-type="SIDES" data-burger="1"><i class="far fa-heart"></i></div>
                            <!-- <div class="burger_icon">....#####....</div> -->
                        </div>
                        <div class="burger_content">
                            <h3 class="burger_title">French Fries</h3>
                            <p class="burger_details">Smoked brisket, tender ribs, smoked sausage, bacon & cheddar with
                                lettuce,
                                tomato, house BBQ & ranch.</p>
                            <button class="burger_order" data-type="SIDES" data-burger="1">Order Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="burger">
                        <div class="burger_hero">
                            <div class="burger_price">$4
                                <span class="burger_price-subscript">.99</span>
                            </div>
                            <img class="burger_image" src="./image/burgers/side4-600x600.jpg" alt="" />
                            <div class="burger_icon" data-type="SIDES" data-burger="2"><i class="far fa-heart"></i></div>
                            <!-- <div class="burger_icon">....#####....</div> -->
                        </div>
                        <div class="burger_content">
                            <h3 class="burger_title">Wedges Potato</h3>
                            <p class="burger_details">Smoked brisket, tender ribs, smoked sausage, bacon & cheddar with
                                lettuce,
                                tomato, house BBQ & ranch.</p>
                            <button class="burger_order" data-type="SIDES" data-burger="2">Order Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="burger">
                        <div class="burger_hero">
                            <div class="burger_price">$4
                                <span class="burger_price-subscript">.99</span>
                            </div>
                            <img class="burger_image" src="./image/burgers/side6-600x600.jpg" alt="" />
                            <div class="burger_icon" data-type="SIDES" data-burger="3"><i class="far fa-heart"></i></div>
                            <!-- <div class="burger_icon">....#####....</div> -->
                        </div>
                        <div class="burger_content">
                            <h3 class="burger_title">Buffalo Chips</h3>
                            <p class="burger_details">Smoked brisket, tender ribs, smoked sausage, bacon & cheddar with
                                lettuce,
                                tomato, house BBQ & ranch.</p>
                            <button class="burger_order" data-type="SIDES" data-burger="3">Order Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="burger">
                        <div class="burger_hero">
                            <div class="burger_price">$3
                                <span class="burger_price-subscript">.49</span>
                            </div>
                            <img class="burger_image" src="./image/burgers/side3-600x600.jpg" alt="" />
                            <div class="burger_icon" data-type="SIDES" data-burger="4"><i class="far fa-heart"></i></div>
                            <!-- <div class="burger_icon">....#####....</div> -->
                        </div>
                        <div class="burger_content">
                            <h3 class="burger_title">Onion Rings</h3>
                            <p class="burger_details">Smoked brisket, tender ribs, smoked sausage, bacon & cheddar with
                                lettuce,
                                tomato, house BBQ & ranch.</p>
                            <button class="burger_order" data-type="SIDES" data-burger="4">Order Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="burger">
                        <div class="burger_hero">
                            <div class="burger_price">$5
                                <span class="burger_price-subscript">.99</span>
                            </div>
                            <img class="burger_image" src="./image/burgers/side2-600x600.jpg" alt="" />
                            <div class="burger_icon" data-type="SIDES" data-burger="5"><i class="far fa-heart"></i></div>
                            <!-- <div class="burger_icon">....#####....</div> -->
                        </div>
                        <div class="burger_content">
                            <h3 class="burger_title">Mozzarella Sticks</h3>
                            <p class="burger_details">Smoked brisket, tender ribs, smoked sausage, bacon & cheddar with
                                lettuce,
                                tomato, house BBQ & ranch.</p>
                            <button class="burger_order" data-type="SIDES" data-burger="5">Order Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="burger">
                        <div class="burger_hero">
                            <div class="burger_price">$8
                                <span class="burger_price-subscript">.99</span>
                            </div>
                            <img class="burger_image" src="./image/burgers/side1-600x600.jpg" alt="" />
                            <div class="burger_icon" data-type="SIDES" data-burger="6"><i class="far fa-heart"></i></div>
                            <!-- <div class="burger_icon">....#####....</div> -->
                        </div>
                        <div class="burger_content">
                            <h3 class="burger_title">Popcorn Shrimps</h3>
                            <p class="burger_details">Smoked brisket, tender ribs, smoked sausage, bacon & cheddar with
                                lettuce,
                                tomato, house BBQ & ranch.</p>
                            <button class="burger_order" data-type="SIDES" data-burger="6">Order Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="burger">
                        <div class="burger_hero">
                            <div class="burger_price">$4
                                <span class="burger_price-subscript">.99</span>
                            </div>
                            <img class="burger_image" src="./image/burgers/shake3-430x430.jpg" alt="" />
                            <div class="burger_icon" data-type=" DRINKS" data-burger="1"><i class="far fa-heart"></i></div>
                            <!-- <div class="burger_icon">....#####....</div> -->
                        </div>
                        <div class="burger_content">
                            <h3 class="burger_title">Caramel Deluxe Thickshake</h3>
                            <p class="burger_details">Smoked brisket, tender ribs, smoked sausage, bacon & cheddar with
                                lettuce,
                                tomato, house BBQ & ranch.</p>
                            <button class="burger_order" data-type="DRINKS" data-burger="1">Order Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="burger">
                        <div class="burger_hero">
                            <div class="burger_price">$3
                                <span class="burger_price-subscript">.49</span>
                            </div>
                            <img class="burger_image" src="./image/burgers/shake2-430x430.jpg" alt="" />
                            <div class="burger_icon" data-type="DRINKS" data-burger="2"><i class="far fa-heart"></i></div>
                            <!-- <div class="burger_icon">....#####....</div> -->
                        </div>
                        <div class="burger_content">
                            <h3 class="burger_title">Berry Deluxe Thickshake</h3>
                            <p class="burger_details">Smoked brisket, tender ribs, smoked sausage, bacon & cheddar with
                                lettuce,
                                tomato, house BBQ & ranch.</p>
                            <button class="burger_order" data-type="DRINKS" data-burger="2">Order Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="burger">
                        <div class="burger_hero">
                            <div class="burger_price">$2
                                <span class="burger_price-subscript">.49</span>
                            </div>
                            <img class="burger_image" src="./image/burgers/shake1-430x430.jpg" alt="" />
                            <div class="burger_icon" data-type=" DRINKS" data-burger="3"><i class="far fa-heart"></i></div>
                            <!-- <div class="burger_icon">....#####....</div> -->
                        </div>
                        <div class="burger_content">
                            <h3 class="burger_title">Choco Deluxe Thickshake</h3>
                            <p class="burger_details">Smoked brisket, tender ribs, smoked sausage, bacon & cheddar with
                                lettuce,
                                tomato, house BBQ & ranch.</p>
                            <button class="burger_order" data-type=" DRINKS" data-burger="3">Order Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="burger">
                        <div class="burger_hero">
                            <div class="burger_price">$3
                                <span class="burger_price-subscript">.49</span>
                            </div>
                            <img class="burger_image" src="./image/burgers/shake5-430x430.jpg" alt="" />
                            <div class="burger_icon" data-type=" DRINKS" data-burger="4"><i class="far fa-heart"></i></div>
                            <!-- <div class="burger_icon">....#####....</div> -->
                        </div>
                        <div class="burger_content">
                            <h3 class="burger_title">Chocolate Sundae</h3>
                            <p class="burger_details">Smoked brisket, tender ribs, smoked sausage, bacon & cheddar with
                                lettuce,
                                tomato, house BBQ & ranch.</p>
                            <button class="burger_order" data-type=" DRINKS" data-burger="4">Order Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="burger">
                        <div class="burger_hero">
                            <div class="burger_price">$3
                                <span class="burger_price-subscript">.49</span>
                            </div>
                            <img class="burger_image" src="./image/burgers/shake4-430x430.jpg" alt="" />
                            <div class="burger_icon" data-type=" DRINKS" data-burger="5"><i class="far fa-heart"></i></div>
                            <!-- <div class="burger_icon">....#####....</div> -->
                        </div>
                        <div class="burger_content">
                            <h3 class="burger_title">Caramel Sundae</h3>
                            <p class="burger_details">Smoked brisket, tender ribs, smoked sausage, bacon & cheddar with
                                lettuce,
                                tomato, house BBQ & ranch.</p>
                            <button class="burger_order" data-type=" DRINKS" data-burger="5">Order Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="burger">
                        <div class="burger_hero">
                            <div class="burger_price">$3
                                <span class="burger_price-subscript">.49</span>
                            </div>
                            <img class="burger_image" src="./image/burgers/shake6-430x430.jpg" alt="" />
                            <div class="burger_icon" data-type=" DRINKS" data-burger="6"><i class="far fa-heart"></i></div>
                            <!-- <div class="burger_icon">....#####....</div> -->
                        </div>
                        <div class="burger_content">
                            <h3 class="burger_title">Strawberry Sundae</h3>
                            <p class="burger_details">Smoked brisket, tender ribs, smoked sausage, bacon & cheddar with
                                lettuce,
                                tomato, house BBQ & ranch.</p>
                            <button class="burger_order" data-type=" DRINKS" data-burger="6">Order Now</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


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
    <script src="./scripts/product-data.js"></script>
    <script src="./scripts/product-categories.js"></script>
    <script src="./scripts/favourites.js"></script>
</body>

</html>