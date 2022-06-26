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
    <title>produts</title>
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

        </div>
    </div>


    <!-------products-->
    <div class="container">
        <div class="row row-2">
            <h2>ALL PLANTS</h2>
            <select name="" id="">
                <option value="">Default</option>
                <option value="">Sort by price</option>
                <option value="">Sort by rating</option>

            </select>
        </div>

        <div class="row">
            <div class="col-4">
                <a href="singleproduct.php"><img src="img/s8.jpg"></a>
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
                <a href="singleproduct.php"><img src="img/s9.jpg"></a>
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
                <a href="singleproduct.php"><img src="img/s10.jpg"></a>
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
                <a href="singleproduct.php"><img src="img/s11.jpg"></a>
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
                <a href="singleproduct.php"><img src="img/s12.jpg"></a>
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
                <a href="singleproduct.php"><img src="img/s13.jpg"></a>
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
                <a href="singleproduct.php"><img src="img/s14.jpg"></a>
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
                <a href="singleproduct.php"><img src="img/s11.jpg"></a>
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