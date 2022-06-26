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
    <title>Donate</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,700italic,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="donate.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


</head>
<style>
    .buttonDonate {
        border-radius: 20px;
        border: 1px solid #FF4B2B;
        background-color: #C1D82F;
        color: #FFFFFF;
        font-size: 12px;
        font-weight: bold;
        padding: 12px 45px;
        letter-spacing: 1px;
        text-transform: uppercase;
        transition: transform 80ms ease-in;
        cursor: pointer;
    }
</style>
<script type="text/javascript" src="donate.js"> </script>

<body style="  background: #3494E6;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #EC6EAD, #3494E6);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #EC6EAD, #3494E6);">



    <div class="navbar">
        <div class="logo">
            <img src="img/logo2.png" width="125px">
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php">Shop</a></li>
                <li><a href="donate.php">Donate</a></li>
                <li><a href="login.php">Logout</a></li>
                <li>Hello, <?php echo $user_data['name'] ?></li>
            </ul>
        </nav>
        <img src="img/cart2.png" width="30px" height="30px">
    </div>

    <div class="donation-container">

        <div class="donation-box">
            <div class="title">Donation Information</div>
            <form action="#" method="post">
                <div class="fields">
                    <input type="text" name="first_name" id="first_name" placeholder="First Name"> </input>
                    <input type="text" name="last_name" id="last_name" placeholder="Last Name"> </input>
                    <input type="text" name="email" id="email" placeholder="Email"> </input>
                </div>

                <div class="amount">
                    <!-- <div class="button">RS 1</div>
                    <div class="button">RS 10</div>
                    <div class="button">RS 100</div> -->
                    <div class="button">RS<input type="number" name="amount" class="set-amount" placeholder=""> </input></div>
                </div>


                <div class="donate-button"><button class="buttonDonate" name="donate_btn" type="donate_btn" id="donate_btn"><i class="fa fa-credit-card">Donate Now</i></button></div>
            </form>
            <!-- <script>
        function Donate() {
            if (confirm("Are you sure you want to donate") == true) { -->

        </div>
    </div>
    <?php
    if (isset($_POST['donate_btn'])) {
        $first_name = $_POST['first_name'];
        $_SESSION['first_name'] = $first_name;
        $last_name = $_POST['last_name'];
        $_SESSION['last_name'] = $last_name;
        $email = $_POST['email'];
        $_SESSION['email'] = $email;
        $amount = $_POST['amount'];
        $_SESSION['amount'] = $amount;
        $receipt_no = rand(1000, 99999);
        $_SESSION['receipt_no'] =  $receipt_no;
        if (!empty($first_name) && !empty($last_name) && !empty($email) && !empty($amount)) {
            $query = "insert into donate values('$first_name','$last_name','$email','$amount','$receipt_no')";
            $query_run = mysqli_query($con, $query);
            if ($query_run) {
                echo '<script>alert("thank You for donating")
                window.location = "donate_print.php";</script>';
            } else {
                echo '<script>alert("Unable to donate")
                window.location = "donate.php";</script>';
            }
        }
    }
    ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://raw.githubusercontent.com/jerryluk/jquery.autogrow/master/jquery.autogrow-min.js"></script>

</body>

</html>