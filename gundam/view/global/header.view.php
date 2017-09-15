<html>
<head>
    <link rel="stylesheet" href="css/mini.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

        <div class="container" style="min-width:1243px">

     <!--<img src="img/banner6.jpg"></img>-->
     <div style="height: 200px; width:100%; display: block; background: url(img/banner6.jpg) center center;"></div>
    <header>
          <a href="home.php" class="logo"><img src="img/logo.jpg"></img></a>
          <a href="home.php" class="button">Home</a>
          <a href="product.php" class="button">Product</a>
          <button>About</button>
          <a href="contact.php" class="button">Contact</a>

    </header>

            <div class="row">
                <div class="col-sm-12 col-md-2" style="background: #aaa;">
                    <h2>WELCOME TO GUNDAM SHOP</h2>
                    <?php
                        if( isLogin() ){
                            echo 'Welcome, ', $_SESSION['user']['user_firstname'];?>

                    <ul>
                    <li><a href='logout.php'>logout</a></li>
                    <li><a href="confirmation.php">Confirm Payment</a></li>
                    <li><a href="payment.php">How To Pay</a></li>
                    </ul>
                    Items in Cart:  <a href="cart.php"><img src="img/cart.png"></img></a>
                    <?php } else {?>
                     <ul>
                         <li><a href='login.php'>login</a></li>
                        <li><a href="register.php">Register</a></li>
                        <li><a href="payment.php">How To Pay</a></li>
                    </ul>
                    <?php } ?>

                </div>
                <div class="col-sm-12 col-md-10" style="background: #eee;">
