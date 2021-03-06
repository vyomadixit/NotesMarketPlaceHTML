<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Important meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0 ,user-scalable=no">

    <!-- Title -->
    <title>Dashboard</title>

    <!-- Favicon -->
	<link rel="shortcut icon" href="images/Master_images_front/favicon.ico">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="css/bootstrap4.5/bootstrap.min.css">

    <!-- Resposnise Tabs CSS -->
    <link rel="stylesheet" href="css/responsive-tabs/5.2 responsive-tabs.min.css.css">

    <!-- Custom CSS Style link -->
    <link rel="stylesheet" href="css/css_pages/dashboard.css">


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
						<a class="navbar-brand" href="7.home_page.html">
							<img src="images/Homepage/logo_new.png" alt="Logo" >
						</a>
					</div>

					<div class="">
						<!-- Main Menu-->
						<div class="collapse navbar-collapse">
							<ul class="navbar-nav ">

								<li class="nav-item">
									<a class="nav-link" href="8.search-page.html">Search Notes</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" href="11.add-notes-page.html">Sell Your Notes</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" href="17.faq-page.html">FAQ</a>
                                </li>
                                
                                <li class="nav-item">
									<a class="nav-link" href="18.contact-page.html">Contact Us</a>
                                </li>
                                
                                <li class="nav-item dropdown">

									<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<img src="images/Master_images_front/user-img.png" class="img-fluid rounded-circle">
									</a>

									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="5.user_profile.html">My Profile</a>
										<a class="dropdown-item" href="12.my-downloads-page.html">My Downloads</a>
										<a class="dropdown-item" href="14.my-sold-notes.html">My Sold Notes</a>
										<a class="dropdown-item" href="15.my-rejected-notes.html">My Rejected Notes</a>
                                        <a class="dropdown-item" href="3.change-password.html">Change Password</a>
                                        <a class="dropdown-item clr-blue" href="7.home_page.html">LOGOUT</a>
									</div>
								</li>

								<li class="nav-item">
									<button class="btn btn-general allBtn" href="#"><a href="7.home_page.html">Logout</a></button>
								</li>

							</ul>
                        </div>
                          <!-- Mobile Menu -->
                         <div id="mobile-nav">
                        <!-- Mobile Menu Close Button -->
                        <span id="mobile-nav-close-btn">&times;</span>

                        <div id="mobile-nav-content">
                            <ul class="">
                                <li><a class="" href="8.search-page.html">Search Notes</a></li><br>
                                <li><a class="" href="11.add-notes-page.html">Sell Your Notes</a></li><br>
                                <li><a class="" href="17.faq-page.html">FAQ</a></li><br>
                                <li><a class="" href="18.contact-page.html">Contact Us</a></li><br>
                                <li class="dropdown">
                                    <a class="nav-link smooth-scroll" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<img src="images/Master_images_front/user-img.png" class="img-fluid rounded-circle" style="height: 70px;">
									</a>

									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="5.user_profile.html">My Profile</a>
										<a class="dropdown-item" href="12.my-downloads-page.html">My Downloads</a>
										<a class="dropdown-item" href="14.my-sold-notes.html">My Sold Notes</a>
										<a class="dropdown-item" href="15.my-rejected-notes.html">My Rejected Notes</a>
                                        <a class="dropdown-item" href="3.change-password.html">Change Password</a>
                                        <a class="dropdown-item clr-blue" href="7.home_page.html">LOGOUT</a>
									</div>
                                </li><br>
                                <li><a class="" href="1.login-page.html">Logout</a></li><br>
                                
                            </ul>
                        </div>
                    </div>
					</div>
				</div>
			</div>
		</nav>
	</header>
    <!-- Header Ends -->
<br><br><br><br><br>

    <!-- Dashboard Section -->
    <section id="dashboard">
        <div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-12">
					<div class="dash-heading">Dashboard</div>
				</div>
				<div class="col-md-4 col-sm-12">
					<button class="btn btn-general allBtn btn-search btn-add-home float-right" href="11.add-notes-page.html">
						Add Note</button>
				</div>
			</div>
            
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="row">
                    <div class="dash-box col-md-4 col-sm-12 text-center">
                        <img src="images/Master_images_front/my-earning.png">
                        <p class="head-dash">My Earning</p>
                    </div>
                    <a name="soldnotes" href="14.my-sold-notes.php" style="text-decoration:none;">
					<div class="dash-boxes col-md-4 col-sm-12 text-center">
                        <div class="head-dash">100</div></a>
                        <div class="para-head">Number of Notes Sold</div>
                    </div>
					<a name="soldnotes" href="14.my-sold-notes.php" style="text-decoration:none;">
                    <div class="dash-boxes special-box col-md-4 col-sm-12 text-center">
                        <div class="head-dash">$10,00,000</div></a>
                        <div class="para-head">Money Earned</div>
                    </div>
                </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-md-1"></div>
						<a name="soldnotes" href="12.my-downloads-page.php" style="text-decoration:none;">
                        <div class="dash-box col-md-3 col-sm-12 text-center">
                            <div class="head-dash">38</div></a>
                            <div class="para-head">My Downloads</div>
                        </div>
						
                        <div class="col-md-1"></div>
						<a name="soldnotes" href="15.my-rejected-notes.php" style="text-decoration:none;">
                        <div class="dash-box col-md-3 col-sm-12 text-center">
                            <div class="head-dash">12</div></a>
                            <div class="para-head">My Rejected Notes</div>
                        </div>
                        <div class="col-md-1"></div>
						<a name="soldnotes" href="16.buyer-request.php" style="text-decoration:none;">
                        <div class="dash-box col-md-3 col-sm-12 text-center">
                            <div class="head-dash">102</div></a>
                            <div class="para-head">Buyer Requests</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Dashboard Section Ends -->

    <!-- In Progress Section -->
    <section id="progress">
        <div class="container">
            <div class="section-top">
            <div class="row section-top">
                <div class="col-md-5 col-sm-12 section-heading">
                    In Progress Notes
                </div>
                <div class="col-md-7 col-sm-12 float-right">
                    
                        <form class="form-inline float-right">
                            <div class="form-group has-search">
                                <img src="images/Master_images_front/search-icon.png"><span class="form-control-feedback"></span>
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-general allBtn btn-search">SEARCH</button>
                        
                    </form> 
                    
                </div>
            </div>
        </div>
        </div>
        <div class="container">
            <div class="row notes-under-review-table">

				<div class="col-md-12">
					<div class="table table-responsive">
						<table class="table text-nowrap">
							<thead>
								<tr>
									<th>ADDED DATE</th>
									<th>TITLE</th>
									<th>CATEGORY</th>
									<th>STATUS</th>
									<th>ACTIONS</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>09-10-2020</td>
									<td>Data Science</td>
									<td>Science</td>
									<td>Draft</td>
                                    <td><img src="images/Master_images_front/edit.png">&nbsp;
                                        <img src="images/Master_images_front/delete.png"></td>
									
								</tr>
								<tr>
									<td>10-10-2020</td>
									<td>Accounts</td>
									<td>Commerce</td>
									<td>In Review</td>
									<td><img src="images/Master_images_front/eye.png"></td>
									
								</tr>
								<tr>
									<td>11-10-2020</td>
									<td>Social Studies</td>
									<td>Social</td>
									<td>Submitted</td>
									<td><img src="images/Master_images_front/eye.png"></td>
									
								</tr>
								<tr>
									<td>12-10-2020</td>
									<td>AI</td>
									<td>IT</td>
									<td>Submitted</td>
									<td><img src="images/Master_images_front/eye.png"></td>
									
								</tr>
								<tr>
									<td>13-10-2020</td>
									<td>Lorem ipsum dolor</td>
									<td>Lorem</td>
									<td>Draft</td>
                                    <td><img src="images/Master_images_front/edit.png">&nbsp;
                                        <img src="images/Master_images_front/delete.png"></td>
									
								</tr>
							</tbody>
						</table>
					</div>
				</div>

            </div>
            <div class="row paging">
				<div class="col-md-12 text-center">
					<div class="pagination isotope-filters">
						<a href="#"><img src="images/Master_images_front/left-arrow.png"></a>
						<a href="#" class="active">1</a>
						<a href="#">2</a>
						<a href="#">3</a>
						<a href="#">4</a>
						<a href="#">5</a>
						<a href="#"><img src="images/Master_images_front/right-arrow.png"></a>
					</div>
				</div>
			</div>
        </div>
    </section>
    <!-- In Progress Section Ends -->

    <!-- In Published Section -->
    <section id="progress">
        <div class="container">
            <div class="section-top">
            <div class="row section-top">
                <div class="col-md-6 col-sm-12 section-heading">
                    Published Section
                </div>

                <div class="col-md-6 col-sm-12">

					<form class="form-inline float-right">
                        <div class="form-group has-search">
                            <span class="form-control-feedback"><img src="images/Master_images_front/search-icon.png"></span>
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-general allBtn btn-search">SEARCH</button>
                    
                </form> 

				</div>
            </div>
        </div>
        </div>
        <div class="container">
            <div class="row notes-under-review-table">

				<div class="col-md-12">
					<div class="table table-responsive">
						<table class="table text-nowrap">
							<thead>
								<tr>
									<th>ADDED DATE</th>
									<th>TITLE</th>
									<th>CATEGORY</th>
                                    <th>SELL TYPE</th>
                                    <th>PRICE</th>
									<th>ACTIONS</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>10-10-2020</td>
									<td>Data Science</td>
									<td>Commerce</td>
                                    <td>Paid</td>
                                    <td>$575</td>
									<td><img src="images/Master_images_front/eye.png"></td>
									
								</tr>
								<tr>
									<td>10-10-2020</td>
									<td>Accounts</td>
									<td>Commerce</td>
                                    <td>Free</td>
                                    <td>$0</td>
									<td><img src="images/Master_images_front/eye.png"></td>
									
								</tr>
								<tr>
									<td>11-10-2020</td>
									<td>Social Studies</td>
									<td>Social</td>
                                    <td>Free</td>
                                    <td>$0</td>
									<td><img src="images/Master_images_front/eye.png"></td>
									
								</tr>
								<tr>
									<td>12-10-2020</td>
									<td>AI</td>
									<td>IT</td>
                                    <td>Paid</td>
                                    <td>$3542</td>
									<td><img src="images/Master_images_front/eye.png"></td>
									
								</tr>
								<tr>
									<td>12-10-2020</td>
									<td>Lorem ipsum dolor</td>
									<td>IT</td>
                                    <td>Free</td>
                                    <td>$0</td>
									<td><img src="images/Master_images_front/eye.png"></td>
									
								</tr>
							</tbody>
						</table>
					</div>
				</div>

            </div>
            <div class="row paging" style="margin-bottom: 60px;">
				<div class="col-md-12 text-center">
					<div class="pagination isotope-filters">
						<a href="#"><img src="images/Master_images_front/left-arrow.png"></a>
						<a href="#" class="active">1</a>
						<a href="#">2</a>
						<a href="#">3</a>
						<a href="#">4</a>
						<a href="#">5</a>
						<a href="#"><img src="images/Master_images_front/right-arrow.png"></a>
					</div>
				</div>
			</div>
        </div>
    </section>
    <!-- In Published Section Ends -->


    <!-- Footer -->
	<footer class="social-footer" style="padding-bottom: 20px;">
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


    
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    
    <!-- Bootstrap JS -->
    <script src="js/bootstrap4.5/bootstrap.min.js"></script>

    <!-- Responsive Tabs -->
	<script src="js/responsive-tabs/5.4 jquery.responsiveTabs.min.js.js"></script>
	
	<script src="js/js_pages/login_password.js"></script>


</body>
</html>