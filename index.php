<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Burger™ – Lafka Burger</title>
    <link rel="apple-touch-icon" sizes="180x180" href="./image/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./image/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./image/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="sass/pages/simple-grid.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <script defer src="fontawesome/js/all.js"></script>
    <script src="https://kit.fontawesome.com/c82a8213c7.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>
    <link rel="stylesheet" href="sass/pages/index.css">
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
        <div class="menu_box" style="left: 15%;">
            <h6 class="callbox_title">Order Online or Call Now</h6>
            <h3 class="callbox_main-title">
                <i class="fas fa-phone"></i>
                +8801 776 255 895
            </h3>
        </div>
        <div class="menu_box" style="right: 15%;">
            <a href="./auth.php"><i class="fas fa-user menu_icon"></i></a>
            <a href="./favouriteBurgers.php"><i class="far fa-heart menu_icon"></i></a>
            <a href="./orderCart.php"><i class="fas fa-shopping-cart menu_icon"></i></a>
            <i class="fas fa-search menu_icon"></i>
        </div>
        <div class="header-body">
            <h2 class="primary-heading">
                mighty, meaty & <strong>mmm...</strong>
            </h2>
            <h4 class="secondary-heading">
                the cure to all hunger cravings is hidden inside the <strong>Burger™</strong></p>
            </h4>
            <div class="burger-image">
                <img src="./image/mighty-meaty.png" id="image" alt="">
                <button class="burger-header-button button">
                    BUILD YOUR BURGER™
                </button>
            </div>
        </div>
    </header>


    <!-- ---------------------- -->
    <!------------------------------------------ Burger Categories ------------------------------------------------------>
    <!-- ---------------------- -->


    <section>
        <div class="category">
            <div class="category_title">
                <h5>THEY COME IN DIFFERENT SHAPES & SIZES</h5>
                <h2 class="primary-heading" style="color: black;">
                    some are <strong>beef</strong> & some are <strong>chick’n,</strong>
                    <br>
                    but they are all egg-cellent
                </h2>
                <h4 class="secondary-heading" style="color: black;">
                    which option tickles your taste buds more?
                </h4>
            </div>
            <div class="category_burgers">
                <div class="category_burger">
                    <img class="category_burger_image" src="./image/beef-chicken-600x386.png" alt="">
                    <button class="button">Order Beef</button>
                </div>
                <div class="category_burger">
                    <img class="category_burger_image" src="./image/chicken-beef-600x386.png" alt="">
                    <button class="button">Order Chik'n</button>
                </div>
            </div>
        </div>
    </section>


    <!-- ---------------------- -->
    <!------------------------------------------ Burger Statistics ------------------------------------------------------>
    <!-- ---------------------- -->

    <section id="burger-statistics">
        <h2 class="primary-heading">
            is a <strong>Burger™</strong> healthy?… hell <strong>yeah!</strong>
        </h2>
        <h4 class="secondary-heading">
            but we’d eat them anyway, each & every day
        </h4>

        <div class="container" style="padding: 7rem 0 5rem;">
            <div class="row wrapper">
                <div class="col-3 detail">
                    <div class="detail_wrapper">
                        <span class="detail_icon"><img src="./image/iconfinder_Food_C206_2427852.png" alt=""></span>
                        <h4 class="detail_headline">
                            <strong class="detail_headline-bold">Burger™</strong>
                            bun
                        </h4>
                        <h5 class="detail_info">165 KCals</h5>
                    </div>
                    <div>
                        <span class="detail_icon"><img src="./image/iconfinder_Food_C203_2427849.png" alt=""></span>
                        <h3 class="detail_headline">bacon & egg</h3>
                        <h5 class="detail_info">142 kCals</h5>
                    </div>
                </div>
                <div class="col-6" style="text-align: center;">
                    <img class="detail_burger-image" src="./image/burger-healthy.png" alt="">
                </div>
                <div class="col-3 detail">
                    <div class="detail_card">
                        <div class="detail_wrapper">
                            <span class="detail_icon"><img src="./image/iconfinder_Food_C217_2427859.png" alt=""></span>
                            <h4 class="detail_headline">
                                smoked
                                <strong class="detail_headline-bold">Cheddar™</strong>
                            </h4>
                            <h5 class="detail_info">78 KCals</h5>
                        </div>
                        <div>
                            <span class="detail_icon"><img src="./image/iconfinder_Food_C225_2427885.png" alt=""></span>
                            <h3 class="detail_headline">beef patty</h3>
                            <h5 class="detail_info">118 kCals</h5>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="primary-heading">
                oh, boy… they taste
                <strong>egg-ceptional!</strong>
            </h4>
        </div>

        <div class="category_fries">
            <button class="button">GRAB AN EGGSY</button>
        </div>
        </div>
    </section>


    <!-- ---------------------- -->
    <!------------------------------------------ Burger Items ------------------------------------------------------>
    <!-- ---------------------- -->

    <section class="burger-container">
        <h2 class="primary-heading" style="color: black;">
            choose one of our <strong>bestsellers</strong>
        </h2>
        <h4 class="secondary-heading" style="color: black;">
            a time proven taste loved by thousands
        </h4>
        <div class="container" style="padding: 7rem 0 5rem;">
            <div class="row" style="margin-bottom: 5rem;">
                <div class="col-4">
                    <div class="burger">
                        <div class="burger_hero">
                            <div class="burger_price">$12
                                <span class="burger_price-subscript">.49</span>
                            </div>
                            <img class="burger_image" src="./image/burgers/burger11-430x430.jpg" alt="" />
                            <div class="burger_icon"><i class="far fa-heart"></i></div>
                        </div>
                        <div class="burger_content">
                            <h3 class="burger_title">Onion-y Angus Burger</h3>
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
                            <img class="burger_image" src="./image/burgers/burger13-430x430.jpg" alt="" />
                            <div class="burger_icon"><i class="far fa-heart"></i></div>
                            <!-- <div class="burger_icon">....#####....</div> -->
                        </div>
                        <div class="burger_content">
                            <h3 class="burger_title">Port Royal Eggsy Burger</h3>
                            <p class="burger_details">Smoked brisket, tender ribs, smoked sausage, bacon & cheddar with
                                lettuce, tomato,
                                house BBQ & ranch.</p>
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
                            <img class="burger_image" src="./image/burgers/burger18-430x430.jpg" alt="" />
                            <div class="burger_icon"><i class="far fa-heart"></i></div>
                            <!-- <div class="burger_icon">....#####....</div> -->
                        </div>
                        <div class="burger_content">
                            <h3 class="burger_title">Western Bacon Angus Burger</h3>
                            <p class="burger_details">Smoked brisket, tender ribs, smoked sausage, bacon & cheddar with
                                lettuce, tomato,
                                house BBQ & ranch.</p>
                            <button class="burger_order">Order Now</button>
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
                            <div class="burger_icon"><i class="far fa-heart"></i></div>
                            <!-- <div class="burger_icon">....#####....</div> -->
                        </div>
                        <div class="burger_content">

                            <h3 class="burger_title">Portobello ‘Shroom Angus Burger</h3>
                            <p class="burger_details">Smoked brisket, tender ribs, smoked sausage, bacon & cheddar
                                with lettuce, tomato,
                                house BBQ & ranch.</p>
                            <button class="burger_order">Order Now</button>
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
                            <div class="burger_icon"><i class="far fa-heart"></i></div>
                            <!-- <div class="burger_icon">....#####....</div> -->
                        </div>
                        <div class="burger_content">

                            <h3 class="burger_title">BBQ Bacon & Egg Burger</h3>
                            <p class="burger_details">Smoked brisket, tender ribs, smoked sausage, bacon & cheddar
                                with lettuce, tomato,
                                house BBQ & ranch.</p>
                            <button class="burger_order">Order Now</button>
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
                            <p class="burger_details">Smoked brisket, tender ribs, smoked sausage, bacon & cheddar
                                with lettuce, tomato,
                                house BBQ & ranch.</p>
                            <button class="burger_order">Order Now</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- ---------------------- -->
    <!------------------------------------------ Burger Builder ------------------------------------------------------>
    <!-- ---------------------- -->

    <section id="burger-builder">
        <h2 class="primary-heading" style="color: black;">
            or build<strong> your own </strong> from scratch
        </h2>
        <h4 class="secondary-heading" style="color: black;">
            only add your favorite ingredients & toppings
        </h4>
        <div class="burger_image_content">
            <img class="detail_burger-image" src="./image/burger-layers.png" alt="">
            <button class="button"> BUILD YOUR BURGER™ </button>
        </div>
    </section>


    <!-- ---------------------- -->
    <!------------------------------------------ Other Food Items ------------------------------------------------------>
    <!-- ---------------------- -->

    <section id="other-food-items">
        <div class="category_heading">
            <h2 class="tertiary-heading">best served with</h2>
            <h2 class="primary-heading">
                <strong>Shoestring™ </strong>fries & <strong>Hand-scooped™</strong> shakes
            </h2>
            <h4 class="secondary-heading" style="color: black;">
                ain’t no other combo like it, we bet!
            </h4>
        </div>
        <div class="sides">
            <img class="sides_image" src="./image/fries-healthy.png" alt="">
            <button class="button">BROWS OUR COMBOS </button>
        </div>
    </section>


    <!--------------------------------------------------------------------Footer-------------------------------------------------------------------->


    <footer class="footer">
        <div class="footer_image">
            <img src="./image/flame-burgers-logo.png" class="footer_image-burger" alt="">
        </div>
        <div class="footer_ending">
            <div class="footer_icon-wrapper">
                <span class="footer_icon">
                    <a href="https://lafka.althemist.com/sushi/#">
                        <i class="fab fa-facebook-f" style="font-size:2rem;color: #fff;"></i>
                    </a>
                </span>
                <span class="footer_icon">
                    <a href="https://lafka.althemist.com/sushi/#">
                        <i class="fab fa-twitter" style="font-size:2rem;color: #fff;padding:0px 2px 0px 5px;"></i>
                    </a>
                </span>
                <span class="footer_icon">
                    <a href="https://lafka.althemist.com/sushi/#">
                        <i class="fab fa-youtube" style="font-size:2rem;color: #fff;padding:0px 2px 0px 5px;"></i>
                    </a>
                </span>
                <span class="footer_icon">
                    <a href="https://lafka.althemist.com/sushi/#">
                        <i class="fab fa-instagram" style="font-size:2rem;color: #fff;padding:0px 2px 0px 5px;"></i>
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