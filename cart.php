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
    <title>cart</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="cart.css">
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


    <!-----cart details-->
    <div class="small-container cart-page">
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>subtotal</th>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="img/s8.jpg">
                        <div>
                            <p>Plant1</p>
                            <small>price : RS 50</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Product - Plant1</td>
                <td><input type="number" value="1"></td>
                <td>RS 50</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="img/s10.jpg">
                        <div>
                            <p>Plant2</p>
                            <small>price : RS 150</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Product - Plant2</td>
                <td><input type="number" value="1"></td>
                <td>RS 150</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="img/s9.jpg">
                        <div>
                            <p>Plant3</p>
                            <small>price : RS 100</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Product - Plant3</td>
                <td><input type="number" value="1"></td>
                <td>RS 100</td>
            </tr>




        </table>
        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td>RS 300</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>RS 10</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>RS 310</td>
                </tr>

            </table>
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