<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Important meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0 ,user-scalable=no">

   <!-- Title -->
    <title>Change Password Page</title>

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
        <a href="7.home_page.html"><img src="images/pre-login/top-logo.png" alt="logo"></a>
        </div>

    <div id="login-box">
        <div class="content-box-md">
            <div class="container">
                <div class="row">
                    <div class="text-center">
                        <div class="login-heading">
                            <p class="login-heading-1">Change Password</p>
                            <p class="forget-heading-2">Enter Your New Password to Change your Password</p>
                        </div>
                       
                    <div class="form-group form-email-pass text-left">
                        <form>
                            <div class="form-group form-pass">
                                <label for="exampleInputPassword1">Old Password</label><br>
                                <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Enter your old password" id="myInput">
                                <img toggle="#password-field" class="field-icon toggle-password float-right" src="images/pre-login/eye.png">
                            </div>
                            <div class="form-group form-pass">
                                <label for="exampleInputPassword1">New Password</label><br>
                                <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Enter your new password" id="myInput">
                                <img toggle="#password-field" class="field-icon toggle-password float-right" src="images/pre-login/eye.png">
                            </div>
                            <div class="form-group form-pass">
                                <label for="exampleInputPassword1">Confirm Password</label>
                                <input class="form-control" id="exampleInputPassword1" type="password" id="myInput" placeholder="Enter your confirm password">
                                <img toggle="#password-field" class="field-icon toggle-password float-right" src="images/pre-login/eye.png">
                            </div>
                            <a href="#">
                            <button type="submit" class="btn btn-primary btn-submit"> Submit </button></a>
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

<!-- Bootstrap JS -->
<script src="js/bootstrap4.5/bootstrap.min.js"></script>

<!-- Responsive Tabs -->
<script src="js/responsive-tabs/5.4 jquery.responsiveTabs.min.js.js"></script>

</body>
</html>