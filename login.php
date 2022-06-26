<?php
session_start();
include("connection.php");
mysqli_select_db($con, 'project1');
$_SESSION;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="login.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

  <title>signup</title>
</head>

<body style="  background: #3494E6;  
background: -webkit-linear-gradient(to right, #EC6EAD, #3494E6);  
background: linear-gradient(to right, #EC6EAD, #3494E6);">
  >

  <!-- <div class="navbar">
    <div class="logo">
        <img src="img/logo2.png" width="125px">
    </div>
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="products.html">Shop</a></li>
            <li><a href="donate.html">Donate</a></li>
           
            <li><a href="signup.html">Signup</a></li>
            
        </ul>
    </nav>
    <a href="cart.html"><img src="img/cart2.png" width="30px" height="30px"></a>
    </div> 
     -->
  <div class="container" id="container">
    <div class="form-container sign-up-container">
      <form action="#" method="post">
        <h1>Create Account</h1>
        <div class="social-container">
          <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <span>or use your email for registration</span>
        <input type="text" name="name" placeholder="Name" />
        <input type="email" name="email" placeholder="Email" />
        <input type="password" name="password" placeholder="Password" />
        <button name="signup_btn" type="signup" id="signup">Sign Up</button>
      </form>
    </div>
    <?php
    if (isset($_POST['signup_btn'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['password'];

      if (!empty($name) && !empty($email)) {
        $query = "select * from sign_up WHERE email='$email'";
        $query_run = mysqli_query($con, $query);

        if (mysqli_num_rows($query_run) > 0) {
          echo '<script type="text/javascript">alert("Email exists try other mail-id")</script>';
        } else {
          $query = "insert into sign_up values('$name','$email','$password')";
          $query_run = mysqli_query($con, $query);
          if ($query_run) {
            echo '<script type="text/javascript">alert( 
                            "Good job!",
                            "You are registered!",
                            "success");
                            window.location = "login.php";
                  </script>';
          } else {
            echo '<script type="text/javascript">
                          alert(
                            "Sorry please try again"
                          )
                          window.location = "login.php";
                          </script>';
          }
        }
      } else {
        echo '<script type="text/javascript">
				alert(
				  "Sorry",
				  "Please enter valid information",
				  "error"
				)
				</script>';
      }
    }
    ?>

    <div class="form-container sign-in-container">
      <form action="#" method="post">
        <h1>Sign in</h1>
        <div class="social-container">
          <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
        </div>
        <span>or use your account</span>
        <input name="email" type="email" placeholder="Email" />
        <input name="password" type="password" placeholder="Password" />
        <a href="#">Forgot your password?</a>
        <button name="submit_btn" type="submit" id="submit"> Login </button>
      </form>
    </div>

    <?php
    if (isset($_POST['submit_btn'])) {
      $email = $_POST['email'];
      $password = $_POST['password'];
      $query = "select * from sign_up WHERE email='$email' AND password= '$password'";

      $query_run = mysqli_query($con, $query);

      if (mysqli_num_rows($query_run) > 0) {
        $user_data = mysqli_fetch_assoc($query_run);
        $_SESSION['email'] = $user_data['email'];

        echo '<script type="text/javascript">
                window.location = "index.php";
                alert("Logged in Successfully")
                </script>';
      } else {
        echo '<script type="text/javascript">
                alert("Wrong email or password")
                  window.location = "login.php";                
                </script>';
      }
    }
    ?>
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <h1>Welcome Back!</h1>
          <p>To keep connected with us please login with your personal info</p>
          <button class="ghost" id="signIn">Sign In</button>
        </div>
        <div class="overlay-panel overlay-right">
          <h1>Hello, Friend!</h1>
          <p>Enter your personal details and start journey with us</p>
          <button class="ghost" id="signUp">Sign Up</button>
        </div>
      </div>
    </div>
  </div>

  <script src="script.js"></script>

</body>

</html>