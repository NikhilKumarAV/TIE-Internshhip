<?php
session_start();
include("functions.php");
include("connection.php");

$_SESSION;
$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Leafnow</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="header">




        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="img/logo2.png" width="125px">
                </div>
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="products.php">Shop</a></li>
                        <li><a href="donate.php">Donate</a></li>
                        <li><a href="login.php">Logout</a></li>
                        <li>Hello, <?php echo $user_data['name'] ?></li>

                    </ul>
                </nav>
                <a href="cart.php"><img src="img/cart2.png" width="30px" height="30px"></a>
            </div>
            <div class="row">
                <div class="col-2">
                    <h1>To Plant a garden <br> to belive in tomorrow</h1>
                    <p>"The true meaning of life is to plant trees,<br> under whose shade you do not expect to sit."</p>
                    <a href="donate.php" class="btn">Donate Now &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="img/man.png">

                </div>
            </div>
        </div>
    </div>

    <!------shop------>
    <div class="categories">
        <div class="small-container"></div>
        <div class="row">
            <div class="col-3">
                <img src="img/s3.jpg">
            </div>
            <div class="col-3">
                <img src="img/s7.jpg">
            </div>
            <div class="col-3">
                <img src="img/s6.jpg">
            </div>
        </div>
    </div>
    <!-------products-->
    <div class="container">
        <h2 class="title" id="shop">Verified Sellers</h2>
        <div class="row">
            <div class="col-4">
                <img src="img/s8.jpg">
                <h4>Plant1</h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <p>RS 50</p>

            </div>
            <div class="col-4">
                <img src="img/s9.jpg">
                <h4>Plant1</h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <p>RS 50</p>

            </div>
            <div class="col-4">
                <img src="img/s10.jpg">
                <h4>Plant1</h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <p>RS 50</p>

            </div>
            <div class="col-4">
                <img src="img/s11.jpg">
                <h4>Plant1</h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <p>RS 50</p>

            </div>
            <div class="col-4">
                <img src="img/s12.jpg">
                <h4>Plant1</h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <p>RS 50</p>

            </div>
            <div class="col-4">
                <img src="img/s13.jpg">
                <h4>Plant1</h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <p>RS 50</p>

            </div>
            <div class="col-4">
                <img src="img/s14.jpg">
                <h4>Plant1</h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <p>RS 50</p>

            </div>
            <div class="col-4">
                <img src="img/s11.jpg">
                <h4>Plant1</h4>
                <div class="rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                </div>
                <p>RS 50</p>

            </div>
        </div>
    </div>
    <!----review-->
    <div class="review">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <span class="fa fa-quote-left"></span>
                    <p>Dynamics of pectic homogalacturonan in cellular morphogenesis and adhesion, wall integrity sensing and plant development</p>
                    <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <h3>User</h3>
                </div>
                <div class="col-3">
                    <span class="fa fa-quote-left"></span>
                    <p>Dynamics of pectic homogalacturonan in cellular morphogenesis and adhesion, wall integrity sensing and plant development</p>
                    <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <h3>User</h3>
                </div>
                <div class="col-3">
                    <span class="fa fa-quote-left"></span>
                    <p>Dynamics of pectic homogalacturonan in cellular morphogenesis and adhesion, wall integrity sensing and plant development</p>
                    <div class="rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <h3>User</h3>
                </div>

            </div>
        </div>
    </div>

    <!--------logos-->
    <div class="logos">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="img/who.png" alt="">
                </div>
                <div class="col-5">
                    <img src="img/uni.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!----footer-->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <a href="donate.php">
                        <h3>DONATE NOW</h3>
                    </a>
                </div>
                <div class="footer-col-2">
                    <a href="donate.php"> <img src="img/donate.png"></a>
                </div>
                <div class="footer-col-3">
                    <h3>Contact us</h3>
                </div>
                <div class="footer-col-4">
                    <h3>Useful links</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>

                    </ul>
                </div>


            </div>
        </div>
    </div>
</body>

</html>