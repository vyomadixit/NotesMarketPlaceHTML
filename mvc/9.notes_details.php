<?php session_start(); ?>

<?php 
if($_SESSION['FName'] == 0) {
    $abc = 'LOGIN';
}
if($_SESSION['FName'] > 0) {
    $abc = 'LOGOUT';
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
    <title>Notes Details Page</title>

    <!-- Favicon -->
	<link rel="shortcut icon" href="images/Master_images_front/favicon.ico">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="css/bootstrap4.5/bootstrap.min.css">

    <!-- Resposnise Tabs CSS -->
    <link rel="stylesheet" href="css/responsive-tabs/5.2 responsive-tabs.min.css.css">

    <!-- Custom CSS Style link -->
    <link rel="stylesheet" href="css/css_pages/notes_page.css">


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

								<li class="nav-item">
									<a class="nav-link" href="17.faq-page.php">FAQ</a>
                                </li>
                                
                                <li class="nav-item">
									<a class="nav-link" href="18.contact-page.php">Contact Us</a>
                                </li>
                                
                                <li class="nav-item dropdown">

									<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<img src="images/Master_images_front/user-img.png" class="img-fluid rounded-circle">
									</a>

									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="5.user_profile.php">My Profile</a>
										<a class="dropdown-item" href="12.my-downloads-page.php">My Downloads</a>
										<a class="dropdown-item" href="14.my-sold-notes.php">My Sold Notes</a>
										<a class="dropdown-item" href="15.my-rejected-notes.php">My Rejected Notes</a>
                                        <a class="dropdown-item" href="3.change-password.php">Change Password</a>
                                        <a class="dropdown-item clr-blue" href="1.login-page.php"><?php echo $abc; ?></a>
									</div>
								</li>

								<li class="nav-item">
									<button class="btn btn-general allBtn" href="#"><a href="1.login-page.php"><?php echo $abc; ?></a></button>
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
                                    <li class="dropdown">
                                        <a class="nav-link smooth-scroll" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="images/Master_images_front/user-img.png" class="img-fluid rounded-circle" style="height: 70px;">
                                        </a>
    
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="5.user_profile.php">My Profile</a>
                                            <a class="dropdown-item" href="12.my-downloads-page.php">My Downloads</a>
                                            <a class="dropdown-item" href="14.my-sold-notes.php">My Sold Notes</a>
                                            <a class="dropdown-item" href="15.my-rejected-notes.php">My Rejected Notes</a>
                                            <a class="dropdown-item" href="3.change-password.php">Change Password</a>
                                            <a class="dropdown-item clr-blue" href="1.login-page.php"><?php echo $abc; ?></a>
                                        </div>
                                    </li><br>
                                    <li><a class="smooth-scroll" href="1.login-page.php"><?php echo $abc; ?></a></li><br>
                                    
                                </ul>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</nav>
	</header>
    <!-- Header Ends -->
    
    <!-- Notes Details -->
    <section id="details">
        <div class="notes-heading container">
            <p>Notes Details</p>
        </div>
        <div class="content-box-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xl-6">
                        <div class="row">
                            <div class="col-md-4 col-sm-12 col-xl-4">
                                <img src="images/Notes Details/1.jpg" class="img-fluid notes-image">
                            </div>
                            <div class="col-md-8 col-sm-12 col-xl-8">
                                <p class="note-heading">Computer Science</p>
                                <p class="sub-heading">Sciences</p>
                                <p class="note-pa">Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                    Magnam, eos deserunt. Atque, aliquid, alias provident tempora totam temporibus, omnis eos
                                    </p>
                                    <button class="btn btn-general btn-details allBtn" data-toggle="modal" data-target="#exampleModalCenter">
                                         Download / $15 
                                    </button>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xl-6 notes-right">
                        <div class="row">
                            
                            <div class="col-">
                                <p>Institution:</p>
                                <p>Country:</p>
                                <p>Course Name:</p>
                                <p>Course Code:</p>
                                <p>Professor:</p>
                                <p>No. of Pages:</p>
                                <p>Approved Date:</p>
                                <p>Rating:</p>
                            </div>
                            <div class="col-7 blue-pa">
                                <p>University of Califorina</p>
                                <p>United State</p>
                                <p>Computer Engineering</p>
                                <p>248705</p>
                                <p>Mr. Richard Brown</p>
                                <p>277</p>
                                <p>November 25 2020</p>
                                <p>
                                    <div class="row">
                                        <div class="col-7 rate">
                                        <img src="images/Master_images_front/star-white.png" class="img-fluid">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                        </div>
                                    <div class = "col-5 text-left">
                                    <p> 100 Reviews</p>
                                    </div>
                                 </div>
                                </p>
                            </div>
                        </div>
                        <div class="red-pa text-center"><p>5 Users marked this note as inappropriate</p></div>
                        
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Notes Details Ends -->
    <hr>
    
    <!-- preview -->
    <section id="preview">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <p class="notes-preview-heading">Notes Preview</p>
                    <div id="Iframe-Cicis-Menu-To-Go" class="set-margin-cicis-menu-to-go set-padding-cicis-menu-to-go set-border-cicis-menu-to-go set-box-shadow-cicis-menu-to-go center-block-horiz">
                        <div class="responsive-wrapper 
                        responsive-wrapper-padding-bottom-90pct"
                        style="-webkit-overflow-scrolling: touch; overflow: auto;">
                        <iframe src="http://unec.edu.az/application/uploads/2014/12/pdf-sample.pdf">
                            <p style="font-size: 110%;"><em><strong>ERROR: </strong>  
                    An &#105;frame should be displayed here but your browser version does not support &#105;frames.</em> Please update your browser to its most recent version and try again, or access the file <a href="http://unec.edu.az/application/uploads/2014/12/pdf-sample.pdf">with this link.</a></p>
                        </iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <p class="notes-preview-heading head-space">Customers Review</p>
                    <div class="row">
                        <div class="review-box">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-3">
                                    <img src="images/Master_images_front/reviewer-1.png" class="rounded-circle img-fluid review-img">
                                </div>
                                <div class="col-md-9 col-sm-9 col-xl-9">
                                        <div class="review-name">
                                            <p class="re-name-1">Richard Brown</p>
                                            <div class="rate">
                                                <img src="images/Master_images_front/star.png" class="img-fluid">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                        <img src="images/Master_images_front/star-white.png" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-0 col-xl-3">
                                    
                                    </div>
                                    <div class="col-md-9 col-sm-12 col-xl-9">
                                        <div class="review-para">
                                            <p class="re-name-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, unde odit. 
                                            Voluptatem architecto corporis 
                                            ?</p> 
                                        </div>
                                    </div>
                                </div>
                        </div>

                        <div class="review-box">
                                <div class="row">
                                <div class="col-md-3 col-sm-3 col-xl-3">
                                    <img src="images/Master_images_front/reviewer-2.png" class="rounded-circle img-fluid review-img">
                                </div>
                                <div class="col-md-9 col-sm-9 col-xl-9">
                                    <div class="review-name">
                                        <p class="re-name-1">Alice Ortiaz</p>
                                            <div class="rate">
                                                <img src="images/Master_images_front/star.png" class="img-fluid">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                        <img src="images/Master_images_front/star-white.png" class="img-fluid">
                                            </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-0 col-xl-3">
                                    
                                </div>
                                <div class="col-md-9 col-sm-12 col-xl-9">
                                    <div class="review-para">
                                        <p class="re-name-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, unde odit. 
                                            Voluptatem architecto corporis 
                                            </p> 
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="review-box">
                                    <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xl-3">
                                        <img src="images/Master_images_front/reviewer-3.png" class="rounded-circle img-fluid review-img">
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-xl-9">
                                        <div class="review-name">
                                            <p class="re-name-1">Sara Passmore</p>
                                                <div class="rate">
                                                    <img src="images/Master_images_front/star.png" class="img-fluid">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                        <img src="images/Master_images_front/star-white.png" class="img-fluid">
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-0 col-xl-3">
                                        
                                    </div>
                                    <div class="col-md-9 col-sm-12 col-xl-9">
                                        <div class="review-para">
                                            <p class="re-name-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, unde odit. 
                                                Voluptatem architecto corporis 
                                                </p> 
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <!-- preview Ends -->
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

    <!-- PopUp -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <button type="button" class="close text-right" data-dismiss="modal" aria-label="Close">
                <img src="images/Master_images_front/close.png">
              </button>
              <div class="modal-box">
            <div class="text-center">
                <img src="images/Notes Details/SUCCESS.png">
              <br><p class="modal-title" id="exampleModalCenterTitle">Thank you for purchasing!</p>
            </div>
            <div class="modal-body">
              <p class="salution">Dear <?php echo $_SESSION['FName']; ?>, </p>
              <p class="modal-para">As this is paid notes-you need to pay to seller Rahil Shah offline. We will send him an email that you want
            to download this note. He may contact you further for payment process completion.<br><br>
            In case, you have urgency. Please contact us on +9195377345959.<br><br>
            Once he receives the payment and acknowledge us selected notes you can see over my downloads tab for download.<br><br>
            Have a good day.</p>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- PopUp Ends -->

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    
    <!-- Bootstrap JS -->
    <script src="js/bootstrap4.5/bootstrap.min.js"></script>

    <!-- Responsive Tabs -->
    <script src="js/responsive-tabs/5.4 jquery.responsiveTabs.min.js.js"></script>

    <!-- JavaScript -->
    <script src="js/js_pages/notes_page.js"></script>

</body>
</html>