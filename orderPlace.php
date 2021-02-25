<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Burger™ – Lafka Burger</title>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="sass/pages/simple-grid.min.css">
  <link rel="stylesheet" href="fontawesome/css/all.css">
  <script defer src="fontawesome/js/all.js"></script>
  <script src="https://kit.fontawesome.com/c82a8213c7.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./sass/pages/contact.css">
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
    <!-- </Replicate> -->
    <div class="hero-content">
      <h5 class="hero-content_breadcrumb">
        HOME / CONTACTS
      </h5>
      <h1 class="hero-content_title">CONTACTS</h1>
    </div>
  </header>
  <Section>
    <div class="container">
      <div class="title">
        <h2>Product Order Form</h2>
      </div>
      <div class="d-flex">
        <form action="" method="">
          <label>
            <span class="fname">First Name <span class="required">*</span></span>
            <input type="text" name="fname">
          </label>
          <label>
            <span class="lname">Last Name <span class="required">*</span></span>
            <input type="text" name="lname">
          </label>
          <label>
            <span>Company Name (Optional)</span>
            <input type="text" name="cn">
          </label>
          <label>
            <span>Country <span class="required">*</span></span>
            <select name="selection">
              <option value="select">Select a country...</option>
              <option value="AFG">Afghanistan</option>
              <option value="ALA">Åland Islands</option>
              <option value="ALB">Albania</option>
              <option value="DZA">Algeria</option>
              <option value="ASM">American Samoa</option>
              <option value="AND">Andorra</option>
            </select>
          </label>
          <label>
            <span>Street Address <span class="required">*</span></span>
            <input type="text" name="houseadd" placeholder="House number and street name" required>
          </label>
          <label>
            <span>&nbsp;</span>
            <input type="text" name="apartment" placeholder="Apartment, suite, unit etc. (optional)">
          </label>
          <label>
            <span>Town / City <span class="required">*</span></span>
            <input type="text" name="city">
          </label>
          <label>
            <span>State / County <span class="required">*</span></span>
            <input type="text" name="city">
          </label>
          <label>
            <span>Postcode / ZIP <span class="required">*</span></span>
            <input type="text" name="city">
          </label>
          <label>
            <span>Phone <span class="required">*</span></span>
            <input type="tel" name="city">
          </label>
          <label>
            <span>Email Address <span class="required">*</span></span>
            <input type="email" name="city">
          </label>
        </form>
        <div class="Yorder">
          <table>
            <tr>
              <th colspan="2">Your order</th>
            </tr>
            <tr>
              <td>Product Name x 2(Qty)</td>
              <td>$88.00</td>
            </tr>
            <tr>
              <td>Subtotal</td>
              <td>$88.00</td>
            </tr>
            <tr>
              <td>Shipping</td>
              <td>Free shipping</td>
            </tr>
          </table><br>
          <div>
            <input type="radio" name="dbt" value="dbt" checked> Direct Bank Transfer
          </div>
          <p>
            Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
          </p>
          <div>
            <input type="radio" name="dbt" value="cd"> Cash on Delivery
          </div>
          <div>
            <input type="radio" name="dbt" value="cd"> Paypal <span>
              <img src="https://www.logolynx.com/images/logolynx/c3/c36093ca9fb6c250f74d319550acac4d.jpeg" alt="" width="50">
            </span>
          </div>
          <button type="button">Place Order</button>
        </div><!-- Yorder -->
      </div>
    </div>
  </Section>
</body>

</html>