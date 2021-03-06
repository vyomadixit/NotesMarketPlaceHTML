<?php include "include/db.php"; ?>
<?php session_start(); ?>
<?php 
    
    
if(isset($_POST['submit'])) {
      
      
    
    $EmailID = $_POST["email"];  
    $password = $_POST["password"];  
    $cpassword = $_POST["cpassword"]; 
    $Fname = $_POST["fname"];
    $Lname = $_POST["lname"];
            
    $EmailID = mysqli_real_escape_string($connection, $EmailID);
    $password = mysqli_real_escape_string($connection, $password);
    $Fname = mysqli_real_escape_string($connection, $Fname);
    $Lname = mysqli_real_escape_string($connection, $Lname);


    $query = "SELECT randSalt From users";
    $select_randsalt_query = mysqli_query($connection, $query);
    if(!$select_randsalt_query) {
        die("Query failed". mysqli_error($connection));
    } 
    $row = mysqli_fetch_array($select_randsalt_query);

    $salt = $row['randSalt'];
    
    $sql = "Select * from users where EmailID='$EmailID'"; 
    
    $result = mysqli_query($connection, $sql); 
    
    $num = mysqli_num_rows($result);  
    
    // This sql query is use to check if 
    // the username is already present  
    // or not in our Database 
    if($num == 0) { 

    if($password == $cpassword) { 
    
    $query = "INSERT INTO users (RoleID, FirstName, LastName, EmailID, Password)";
    $query .= "VALUES(1, '{$Fname}', '{$Lname}', '{$EmailID}', '{$password}')";
    $register_user_query = mysqli_query($connection, $query);
    if(!$register_user_query) {
        die("Query Failed". mysqli_error($connection). '' . mysqli_errno($connection));
    }

    $_SESSION['emailid'] =  $EmailID;
    $_SESSION['ffname'] = $Fname;
    header ("Location: 6.email_verification.php");
       
}
else {
    echo "Password different";
}
    }
    else {
        echo "Email Exists";
    }
     
    
}//end if    
    
?> 


<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Important meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0 ,user-scalable=no">


   <!-- Title -->
    <title>SignUp Page</title>

    <!-- Favicon -->
	<link rel="shortcut icon" href="images/Master_images_front/favicon.ico">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap4.5/bootstrap.min.css">

    <!-- Resposnise Tabs CSS -->
    <link rel="stylesheet" href="css/responsive-tabs/5.2 responsive-tabs.min.css.css">

    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="css/magnific-popup/8.1 magnific-popup.min.css.css">

    <!-- Custom CSS Style link -->
    <link rel="stylesheet" href="css/css_pages/login.css">


</head>


<body>
<section>
    <div id="login-page">
    <img src="images/pre-login/banner-with-overlay.jpg" id="back-img" alt="Image">
    
        <div class="logo-img">
        <a href="7.home_page.html"><img src="images/pre-login/top-logo.png" alt="logo"></a>
        </div>

    <div id="login-box">
        <div class="content-box-md">
            <div class="container">
                <div class="row">
                    
                        <div class="login-heading">
                            <p class="login-heading-1">Create an Account</p>
                            <p class="login-heading-2">Enter Your Details to SignUp</p>
                            <p class="sign-heading-3"><img src="images/Notes Details/SUCCESS.png" class="img-fluid rounded-circle"></i> &nbsp; Your account has been successfully created</p>
                        </div>
                       
                    <div class="form-group text-left">
                        <form  action="4.signup-page.php" method="post">
                            <div class="form-email">
                                <label for="exampleInputfirst1">First Name*</label><br>
                                <input type="text" class="form-control" id="exampleInputtext1" name="fname" placeholder="Enter your First Name" required>
                            </div>
                            <div class="form-email">
                                <label for="exampleInputlast1">Last Name*</label><br>
                                <input type="text" class="form-control" id="exampleInputtext2" name="lname" placeholder="Enter your Last Name" required>
                            </div>
                            <div class="form-email">
                                <label for="exampleInputEmail1">Email*</label><br>
                                <input type="email" class="form-control" id="exampleInputEmail1"  name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                            </div>
                            <div class="form-pass">
                                <label for="exampleInputPassword1">Password</label><br>
                                <input class="form-control" id="exampleInputPassword1" name="password" type="password" placeholder="Enter your password" id="myInput">
                                <img toggle="#password-field" class="field-icon toggle-password float-right" src="images/pre-login/eye.png">
                            </div>
                            <div class="form-group form-pass">
                                <label for="exampleInputPassword1">Confirm Password</label><br>
                                <input class="form-control" id="exampleInputPassword1" name="cpassword" type="password" id="myInput" placeholder="Re-enter your password">
                                <img toggle="#password-field" class="field-icon toggle-password float-right" src="images/pre-login/eye.png">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary btn-submit"> Sign up </button>
                        </form>
                        <p class="sign-page">Already have an account? <a href="1.login-page.html">Login</a></p>        
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
<script src="js/bootstrap4.5//bootstrap.min.js"></script>

<!-- Responsive Tabs -->
<script src="js/responsive-tabs/5.4 jquery.responsiveTabs.min.js.js"></script>



</body>
</html>