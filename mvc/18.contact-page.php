
<?php session_start(); ?>

<?php 
    if(isset($_POST['submit'])) {

        $to = $_POST['fname'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $Body = "Hello,". $_POST['body'] . "Regards," . $to;

        $_SESSION['emailto'] = $email;
        $_SESSION['fname'] = $to;
        $_SESSION['subject'] = $subject;
        $_SESSION['body'] = $Body;

        
        header("Location: email/contact.php");
        
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
    <title>Contact Us Page</title>

    <!-- Favicon -->
	<link rel="shortcut icon" href="images/Master_images_front/favicon.ico">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="css/bootstrap4.5/bootstrap.min.css">

    <!-- Resposnise Tabs CSS -->
    <link rel="stylesheet" href="css/responsive-tabs/5.2 responsive-tabs.min.css.css">

    <!-- Custom CSS Style link -->
    <link rel="stylesheet" href="css/css_pages/contact_page.css">

    

</head>


<body>

      <!-- Header -->
	<header>
		<nav class="navbar fixed-top navbar-expand-lg">
			<div class="container">
				<div class="row">
					<div class="navbar-header">
                        <!-- Mobile Menu Open Button -->
                        <span id="mobile-nav-open-btn" class="float-right">&#9776;</span>
            <!-- Logo -->
            <a class="navbar-brand" href="7.home_page.php">
              <img src="images/Homepage/logo_new.png" alt="Logo" >
            </a>
            </div>
            
            <div class="">
            <!-- Main Menu-->
						<div class="collapse navbar-collapse">
							<ul class="navbar-nav ">

								<li class="nav-item">
									<a class="nav-link" href="8.search-page.php">Search Notes</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" href="11.add-notes-page.php">Sell Your Notes</a>
								</li>

								<li class="nav-item ">
									<a class="nav-link" href="17.faq-page.php">FAQ</a>
                                </li>
                                
                                <li class="nav-item active">
									<a class="nav-link" href="18.contact-page.php">Contact Us</a>
								</li>

								<li class="nav-item">
									<button class="btn btn-general allBtn" href="#"><a href="1.login-page.php">Login</a></button>
								</li>

							</ul>
						</div>
					<!-- Mobile Menu -->
                    <div id="mobile-nav">
                        <!-- Mobile Menu Close Button -->
                        <span id="mobile-nav-close-btn">&times;</span>
          
                        <div id="mobile-nav-content">
                            <ul class="">
                                <li><a class="" href="8.search-page.php">Search Notes</a></li><br>
                                <li><a class="" href="11.add-notes-page.php">Sell Your Notes</a></li><br>
                                <li><a class="" href="17.faq-page.php">FAQ</a></li><br>
                                <li><a class="" href="18.contact-page.php">Contact Us</a></li><br>
                                <li><a class="" href="1.login-page.php">Login</a></li><br>
                                
                            </ul>
                        </div>
                    </div>
                              </div>
                          </div>
                      </div>
          
                  </nav>
    </header>

     <!-- Home -->
     <section id="home">
        <!-- Background Image -->
        <div id="home-overlay">
            <img src="images/Homepage/banner-with-overlay_all.jpg" class="home-overlay-img">
        </div>
            <!-- Home Content -->
        <div id="home-content">
            <div id="home-content-inner">
                <div id="home-heading">
                    <p id="home-heading-1">Contact Us</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Ends -->

    <!-- Contact form -->
    <div id="contact-form" style="margin-bottom: 90px;">
        <div class="container">
            <div class="contact-heading">
                <p class="contact-heading-1">Get in Touch</p>
                <p class="contact-heading-2">Let us know how to get back to you</p>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-6 col-sm-12">
                    <div class="form-group form-email-pass text-left">
                        <form action="18.contact-page.php" method="post">
                            <div class="form-group form-email">
                                <label for="exampleInputtext">Full Name*</label><br>
                                <input type="text" name="fname" class="form-control" id="exampleInputtext" placeholder="Enter your Full Name" required>
                            </div>
                            <div class="form-group form-email">
                                <label for="exampleInputEmail1">Email*</label><br>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email" required>
                            </div>
                            <div class="form-group form-email">
                                <label for="examplesubject">Subject*</label><br>
                                <input type="text" name="subject" class="form-control" id="examplesubject" placeholder="Enter your subject" required>
                            </div>
                        
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xl-6">
                        <div class="form-group form-comment">
                        <label for="usrcomment">Comments/Questions*</label><br>
                        <textarea name="body" id="usrcomment" class="form-control" placeholder="comment"></textarea>
                </div>
                
                </div>
                <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button name="submit" class="btn btn-general allBtn btn-contact" href="#">SUBMIT</button>
                </form>
            </div>
            </div>
        </div>
    </div>
    <!-- Contact form Ends -->

    <!-- Footer -->
    <footer class="social-footer">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    Copyright &copy; Tatvasoft All Rights Reserved. 
                </div>
                <div class="col-6">
                    <ul class="social-list float-right">
                        <li>
                            <a href="https://www.facebook.com/"><img src="images/Homepage/facebook-iOS-icon.png" class="img-fluid rounded-circle"></a>
                        </li>
                        <li>
                            <a href="https://mobile.twitter.com/login"><img src="images/Homepage/twitter.jpg" class="img-fluid rounded-circle"></a>
                        </li>
                        <li>
                            <a href="#"><img src="images/Homepage/google.jpg" class="img-fluid rounded-circle"></a>
                        </li>
                    </ul>
                </div>
            </div>
               
            </div>
        </div>
    </footer>
    <!-- Footer Ends -->

    <!-- JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    
    <!-- Bootstrap JS -->
    <script src="js/bootstrap4.5/bootstrap.min.js"></script>

    <!-- Responsive Tabs -->
    <script src="js/responsive-tabs/5.4 jquery.responsiveTabs.min.js.js"></script>

    <script src="js/js_pages/login_password.js"></script>

</body>
</html>