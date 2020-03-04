<?php
    /*
        Front End of the webpage is made by Nazanin Reyhani
                website: https://codepen.io/nazaninrey
        Back End of the webpage is made by Asif Rasheed
                website: https://github.com/asifrasheed6
        Rights Reserved to the Authors
     */
    include 'config.php'; // DBMS Connection
    
    $username_err = "";
    $password_err = "";
    $email_err = "";
    $username = "";
    
    if(isset($_COOKIE['username'])){
        $username = $_COOKIE['username']; // If the user chose to set remind me
    }
    
    // Checks if the user has already logged in or not
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true){
        if((time())-$_SESSION['last_activity']>=600){
            session_unset();
            session_destroy();
            exit;
        }
        else{
            $id = $_SESSION['id'];
            $row = mysqli_fetch_array(mysqli_query($database,'SELECT * FROM `USER` WHERE `ID` = $id'));
            // If the user is admin, redirect to admin panel
            if($row['Admin'])
                header('location: postmaster.php');
            else
                header('location: home.php');
            exit;
        }
    }
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        /*
            If the request method is post then we will look for the button value.
            In my case, the button is named enter and if the value is login, the login.
            Else register the user and sent verification email.
         */
        if($_POST['enter']=='login'){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $hash = md5($password);
            $query = mysqli_query($database, "SELECT * FROM `USER` WHERE `USERNAME` LIKE '$username' AND `PASSWORD` LIKE '$password'");

            if(mysqli_num_rows($query)==0){
                $password_err = "invalid username or password!";
            }else{
                $row = mysqli_fetch_array($query);
                $_SESSION['loggedin'] = true;
                $_SESSION['id'] = $row['id'];
                $_SESSION['last_activity'] = time();
                /*
                    Always identify the user using the user id number because the username can
                        change but the user id remains the same.
                 */
                if($row['Admin'])
                    header('location: postmaster.php');
                else
                    header('location: home.php');
            }
        }
        else{
            
        }
    }
?>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Log-in / Sign-up</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-signup l-attop" id="login">
  <div class="login-signup-title">
    LOG IN
  </div>
  <form id = "form-login" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
  <div class="login-signup-content">
    <div class="input-name">
      <h2>Username</h2>
    </div>
    <input type="text" name="username" value="<?php echo $username ?>" class="field-input" required/>
    <div class="input-name input-margin"><?php echo '<span style="color:#FF0000;">'.$username_err.'</span>';?>
      <h2>Password</h2>

    </div>
    <input type="password" name="password" value="" class="field-input" required/>
    <div class="input-r"><?php echo '<span style="color:#FF0000;">'.$password_err.'</span>';?>


      <div class="check-input">
        <input type="checkbox" id="remember-me-2" name="rememberme" value="remember" class="checkme">
        <label class="remmeberme-blue" for="remember-me-2"></label>
      </div>
      <div class="rememberme"><label for="remember-me-2">Remind Me</label></div>
    </div>
    <button class="submit-btn" name="enter" value="login">
          Enter
        </button>
    </form>


    <div class="forgot-pass">
      <a href="#">Forgot Password?</a>
    </div>

  </div>
</div>


<div class="login-signup s-atbottom" id="signup">
  <div class="login-signup-title">
    SIGN UP
  </div>
  <form id = "form-signup" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
  <div class="login-signup-content">
    <div class="input-name">
      <h2>Name</h2>

    </div>
    <input type="text" name="name" value="" class="field-input" required/>
    <div class="input-name input-margin">
      <h2>Username</h2>

    </div>
    <input type="text" name="username" value="" class="field-input" required/><?php echo '<span style="color:#FF0000;">'.$username_err.'</span>';?>
    <div class="input-name input-margin">
      <h2>E-Mail</h2>
    </div>
    <input type="text" name="email" value="" class="field-input" required/><?php echo '<span style="color:#FF0000;">'.$email_err.'</span>';?>
    <div class="input-name input-margin">
      <h2>Password</h2>

    </div>
    <input type="text" name="password" value="" class="field-input" required/>

    <button class="submit-btn" type="submit" name="enter" value="register">
              Enter
            </button>
    </form>


  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
