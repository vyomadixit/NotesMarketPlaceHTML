<?php include "include/db.php"; ?>
<?php session_start(); ?>

<?php 
    if(isset($_POST['submit'])) {

        $EmailID = $_POST['email'];
        
        $EmailID = mysqli_real_escape_string($connection, $EmailID);
        
    
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

        if($EmailID !== $db_emailid) {
            echo "email does not exists";
           header("2.forget-password.php");
        }
       
        else if ($EmailID == $db_emailid) {
           $newpass = 'abc123';
            $_SESSION['EmailID'] = $db_emailid;
            $_SESSION['FirstName'] = $db_user_first;
            $_SESSION['LastName'] = $db_user_last;
            $_SESSION['password1'] = $newpass;

            $sql = "UPDATE users SET Password='abc123' WHERE ID = $db_id";
            $select_user_query1 = mysqli_query($connection, $sql);
            if(!$select_user_query1) {
            die("Query Failed". mysqli_error($connection));
        }
        
            

            header("Location: email/forget.php");
        
            
        }
        else {
            header("Location: 1.login_page.php");
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
    <title>Forget Password Page</title>

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
    
        <div class="forget-img">
        <a href="7.home_page.html"><img src="images/pre-login/top-logo.png" alt="logo"></a>
        </div>

    <div id="forget-box">
        <div class="content-box-md">
            <div class="container">
                <div class="row">
                    <div class="text-center">
                        <div class="forget-heading">
                            <p class="forget-heading-1">Forget Password? </p>
                            <p class="forget-heading-2">Enter Your Email to reset your password</p>
                        </div> 
                       
                    <div class="form-group form-email-pass text-left">
                        <form   action="2.forget-password.php" method="post">
                            <div class="form-group form-email">
                                <label for="exampleInputEmail1">Email*</label><br>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" placeholder="Enter email" required>
                            </div>
                            <button name="submit" class="btn btn-primary btn-submit">submit</button>
                        </form>        
                    </div>
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

<!-- Responsive Tabs -->
<script src="js/responsive-tabs/5.4 jquery.responsiveTabs.min.js.js"></script>

<!-- Bootstrap -->
<script src="js/bootstrap4.5/bootstrap.min.js"></script>


</body>

</html>