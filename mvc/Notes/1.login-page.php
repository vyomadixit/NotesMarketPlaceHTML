<?php include "include/db.php"; ?>
<?php session_start(); ?>

<?php 
    if(isset($_POST['submit'])) {

        $EmailID = $_POST['email'];
        $Password = $_POST['password'];

        $EmailID = mysqli_real_escape_string($connection, $EmailID);
        $Password = mysqli_real_escape_string($connection, $Password);
    
        $query = "SELECT * FROM users WHERE EmailID = '{$EmailID}'";
        $select_user_query = mysqli_query($connection, $query);
        if(!$select_user_query) {
            die("Query Failed". mysqli_error($connection));
        }
        
        while($row = mysqli_fetch_array($select_user_query)) {

            $db_id = $row['ID'];
            $db_Role = $row['RoleID'];
            $db_password = $row['Password'];
            $db_user_first = $row['FirstName'];
            $db_user_last = $row['LastName'];
            $db_emailid = $row['EmailID'];
        }

        if ($EmailID == $db_emailid && $Password !== $db_password) {
           echo "Password  is Wrong";

        }
        else if ($EmailID == $db_emailid && $Password == $db_password) {

             $_SESSION['EmailID'] = $db_emailid;
             $_SESSION['FirstName'] = $db_user_first;
             $_SESSION['LastName'] = $db_user_last;
            


            if ($db_Role == 1 ) {
                header ("Location: 8.search-page.php");
            }
            else if ($db_Role == 2) {
                header ("Location: admin/3.dashboard_page.php");
            }
            else {
                echo "Wrong";
            }
            
        }
        else {
            echo "User does not exixts please Signin";
        }
   
   
   
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Important meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0 ,user-scalable=no">

   <!-- Title -->
    <title>Login Page</title>

    <!-- Favicon -->
	<link rel="shortcut icon" href="images/Master_images_front/favicon.ico">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="css/bootstrap4.5/bootstrap.min.css">

    <!-- Resposnise Tabs CSS -->
    <link rel="stylesheet" href="css/responsive-tabs/5.2 responsive-tabs.min.css.css">

    <!-- Custom CSS Style link -->
    <link rel="stylesheet" href="css/css_pages/login.css">

</head>


<body>
<section>
    <div id="login-page">
    <img src="images/pre-login/banner-with-overlay.jpg" id="back-img" alt="Image">
    
        <div class="logo-img">
        <a href="7.home_page.php"><img src="images/pre-login/top-logo.png" alt="logo"></a>
        </div>

    <div id="login-box">
        <div class="content-box-md">
            <div class="container">
                <div class="row">
                    
                        <div class="login-heading">
                            <p class="login-heading-1">Login</p>
                            <p class="login-heading-2">Enter Your Email Address and Password to Login</p>
                        </div>
                       
                    <div class="form-group form-email-pass text-left">
                        <form action="1.login-page.php" method="post"> 
                            <div class="form-group form-email">
                                <label for="exampleInputEmail1">Email*</label><br>
                                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="notesmarketplace@gmail.com" required>
                            </div>
                            <div class="form-group form-pass">
                                <label for="exampleInputPassword1">Password<a href="2.forget-password.php" class="forget-link">Forget Password?</a></label><br>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" aria-describedby="passHelp" placeholder="Enter your password">
                                <img toggle="#password-field" class="field-icon toggle-password float-right"  src="images/pre-login/eye.png">
                                
                            </div>
                            <div class="form-group form-check form-boxes">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1"> &nbsp; Remember Me </label>
                            </div>
                            <a href=""><button type="submit" name="submit" class="btn btn-primary btn-submit"> Login </button></a>
                        </form>
                        <p class="sign-page">Don't have an account? <a href="4.signup-page.php">Sign Up</a></p>        
                    </div>
                
            </div>
        </div>
    </div>
    </div> 
</div>
</section>

<!-- JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
</script>

<!-- Bootstrap JS -->
<script src="js/bootstrap4.5/bootstrap.min.js"></script>

<!-- Responsive Tabs -->
<script src="js/responsive-tabs/5.4 jquery.responsiveTabs.min.js.js"></script>

</body>
</html>