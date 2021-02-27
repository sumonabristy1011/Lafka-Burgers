<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacts– Lafka Burger</title>
  <link rel="apple-touch-icon" sizes="180x180" href="./image/favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./image/favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./image/favicon_io/favicon-16x16.png">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="sass/pages/simple-grid.min.css">
  <link rel="stylesheet" href="fontawesome/css/all.css">
  <script defer src="fontawesome/js/all.js"></script>
  <script src="https://kit.fontawesome.com/c82a8213c7.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./sass/pages/contact.css">
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
    <!-- </Replicate> -->
    <div class="hero-content">
      <h5 class="hero-content_breadcrumb">
        HOME / CONTACTS
      </h5>
      <h1 class="hero-content_title">CONTACTS</h1>

    </div>
  </header>
  <Section id="burger_contact">
    <div class="container">
      <div class="row">
        <div class="col-5">
          <h1 class="address">Head Office</h1>
          <p style="color:#888;font-size:20px;padding:5px 10px 5px 10px;">For more information regarding your shopping experience or current promotions:</p>
          <p style="color:#22272d;font-size:19px;padding:5px 10px 5px 10px;">122 Collins Street West,
            <br>
            Melbourne, Victoria
            <br>
            +61.3.8476.6487
          </p>
        </div>

        <div class="col-7">
          <div class="body container">
            <form id="contact" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
              <h3>Something on your mind?<strong>We value your feedback.</strong></h3>
              <h4>Fill out the form below and we’ll get back to you sometime soon.</h4>
              <fieldset>
                <input placeholder="Your name" name="name" type="text" tabindex="1" required autofocus>
              </fieldset>
              <fieldset>
                <input placeholder="Your Email Address" name="email" type="email" tabindex="2" required>
              </fieldset>
              <fieldset>
                <input placeholder="Your Phone Number" name="phone" type="tel" tabindex="3" required>
              </fieldset>
              <fieldset>
                <textarea placeholder="Type your Message Here...." name="message" tabindex="5" required></textarea>
              </fieldset>
              <fieldset>
                <input name="submit" type="submit" id="contact-submit" data-submit="...Sending" value="Submit">
              </fieldset>
            </form>
            <?php
            if (isset($_POST["submit"])) {

              $name = $_POST["name"];
              $email = $_POST["email"];
              $phone = $_POST["phone"];
              $message = $_POST["message"];

              $servername = "localhost";
              $username = "root";
              $password = "";
              $dbname = "lafka_burger";

              //! Create connection
              $conn = new mysqli($servername, $username, $password, $dbname);


              $sql = "INSERT INTO contact (name, email, phone, message) VALUES ('$name','$email','$phone','$message')";
              if ($conn->query($sql) === TRUE) {
                echo "Table Students created successfully";
              } else {
                echo "Error creating table: " . $conn->error;
              }
            
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </Section>
  <!---------------------------------------------------------------------Footer--------------------------------------------------------------->
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