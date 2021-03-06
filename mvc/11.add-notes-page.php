<?php include "include/db.php"; ?>

<?php 
    if(isset($_POST['submit'])) {

        $title = $_POST['title'];
        $dp = $_POST['dp'];
        $type = $_POST['type'];
        $category = $_POST['category'];
        $unotes = $_POST['unotes'];
        $nopage = $_POST['nopage'];
        $describe = $_POST['describe'];
        $country = $_POST['country'];
        $college = $_POST['college'];
        $cname = $_POST['cname'];
        $ccode = $_POST['ccode'];
        $prof = $_POST['prof'];
        $price = $_POST['price'];
        $unotes1 = $_POST['unotes1'];

        $title = mysqli_real_escape_string($connection, $title);
        $dp = mysqli_real_escape_string($connection, $dp);
        $type = mysqli_real_escape_string($connection, $type);
        $category = mysqli_real_escape_string($connection, $category);
        $unotes = mysqli_real_escape_string($connection, $unotes);
        $nopage = mysqli_real_escape_string($connection, $nopage);
        $describe = mysqli_real_escape_string($connection, $describe);
        $country = mysqli_real_escape_string($connection, $country);
        $college = mysqli_real_escape_string($connection, $college);
        $cname = mysqli_real_escape_string($connection, $cname);
        $ccode = mysqli_real_escape_string($connection, $ccode);
        $prof = mysqli_real_escape_string($connection, $prof);
        $price = mysqli_real_escape_string($connection, $price);
        $unotes1 = mysqli_real_escape_string($connection, $unotes1);
        
        $query = "SELECT randSalt From sellernotes";
        $select_randsalt_query = mysqli_query($connection, $query);
         if(!$select_randsalt_query) {
        die("Query failed". mysqli_error($connection));
         } 
        $row = mysqli_fetch_array($select_randsalt_query);

        $salt = $row['randSalt'];

        $query = "INSERT INTO sellernotes (Title, , NoteType, Category, NumberofPages, Description, Country, 
        UniversityName, Course, CourseCode, Professor, SellingPrice)";
        $query .= "VALUES($title, $type, $category, $nopage, $describe, $country,
         $college, $cname, $ccode, $prof, $price)";
        $register_user_query = mysqli_query($connection, $query);
        if(!$register_user_query) {
        die("Query Failed". mysqli_error($connection). '' . mysqli_errno($connection));
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
    <link rel="stylesheet" href="css/style.css">

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
									<a class="nav-link activea" href="11.add-notes-page.html">Sell Your Notes</a>
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
                                <li><a class="smooth-scroll" href="7.home_page.html">Logout</a></li><br>
                                
                            </ul>
                        </div>
                    </div>
					</div>
				</div>
			</div>
		</nav>
	</header>
    <!-- Header Ends -->
    
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
                    <p id="home-heading-1">Add Notes</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Ends -->

    <!-- Note Details -->
    <section id="profile">
        <div class="container">
            <div class="profile-heading">
                <p>Basic Note Details</p>
            </div>
            <div class="row">
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="form-group form-email-pass text-left">
                        <form action="11.add-notes-page.php" method="post">
                            <div class="form-group form-email">
                                <label for="exampleInputtile">Title*</label><br>
                                <input type="text" name="title" class="form-control" id="exampleInputtitle" placeholder="Enter your notes Title" required>
                            </div>
                            <div class="form-group form-email form-picture">
                                <label for="usrpic">Display Picture</label><br>
                                <input name="dp" type="file" class="form-control-2 form-control" id="usrpic" placeholder="Upload a picture"> 
                                <center><img src="images/User-Profile/upload.png" class="upload-profile"></center>
                            </div>
                            <div class="form-group form-email">
                                <label for="categorytypebook">Type</label><br>
                                <select id="categorytypebook" name="type" class="form-control">
                                    <option selected>Select Your note Type</option>
                                      <option>Novels</option>
                                      <option>Books</option>
                                      <option>Essays</option>
                                </select>
                             </div>
                        
                  </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="form-group form-email-pass text-left">
                        
                            <div class="form-group form-email">
                                <label for="categorynotes">Category*</label><br>
                                <select id="categorynotes" name="category" class="form-control">
                                    <option selected>Select Your Category</option>
                                      <option>Computer Science</option>
                                      <option>AI</option>
                                      <option>Social Studies</option>
                                </select> 
                             </div>
                             <div class="form-group form-email form-picture">
                                <label for="usrnotes">Upload Notes</label><br>
                                <input name="unotes" type="file" class="form-control-2 form-control" id="usrnotes" placeholder="Upload a file"> 
                                <center><img src="images/Master_images_front/upload-note.png" class="upload-profile"></center>
                            </div>
                            <div class="form-group form-email">
                                <label for="exampleInputnoofpages">Number of Pages</label><br>
                                <input type="text" name="nopage" class="form-control" id="exampleInputnoofpages" placeholder="Enter Number of Pages">
                            </div>
                        
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group form-email-pass text-left">
                        
                            <div class="form-group form-email">
                                <label for="usrnotesdescription">Description*</label><br>
                                <input name="describe" class="form-control-2 form-control" id="usrnotesdescription" required> 
                            
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Note Details Ends -->

    <!-- College Details -->
    <section id="profile">
        <div class="container">
            <div class="profile-heading1">
                <p>Institution Information</p>
            </div>
            <div class="row">
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="form-group form-email-pass text-left">
                        
                    <div class="form-group form-email">
                        <label for="categorycountry">Country*</label><br>
                        <select id="categorycountry" name="country" class="form-control">
                            <option selected>Select Your Country</option>
                              <option>India</option>
                              <option>England</option>
                              <option>America</option>
                        </select>
                      </div>
                      
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="form-group form-email-pass text-left">
                    
                            <div class="form-group form-email">
                                <label for="Institutionname">Institution Name</label><br>
                                <input name="college" class="form-control" id="Institutionname" placeholder="Enter your Institution Name"> 
                            </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- College Details Ends -->

    <!-- Course Details -->
    <section id="profile">
        <div class="container">
            <div class="profile-heading1">
                <p>Course Details</p>
            </div>
            <div class="row">
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="form-group form-email-pass text-left">
                        
                            <div class="form-group form-email">
                                <label for="Coursename">Course Name</label><br>
                                <input name="cname" class="form-control" id="Coursename" placeholder="Enter your course Name"> 
                            </div>
                            <div class="form-group form-email">
                                <label for="professorname">Professor / Lecturer</label><br>
                                <input name="prof" class="form-control" id="professornname" placeholder="Enter your professor Name"> 
                            </div>
                      
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="form-group form-email-pass text-left">
                        
                            <div class="form-group form-email">
                                <label for="Coursecode">Course Code</label><br>
                                <input name="ccode" class="form-control" id="Coursecode" placeholder="Enter your course code"> 
                            </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Course Details Ends -->

     <!-- Selling Details -->
     <section id="profile">
        <div class="container">
            <div class="profile-heading1">
                <p>Selling Information</p>
            </div>
            <div class="row">
                <div class="col-xl-6 col-md-6 col-sm-12">                          
                    <div class="form-group">
                        <label class="info-label" for="">Sell For *</label>
                        <div class="row no-gutters free-paid-radio-wrapper">

                            <label class="purple-radio-input">
                                <input type="radio" name="sell" id="sell">
                                <span class="checkmark"></span>
                              </label>
                            <label class="info-label" for="sell">Free</label>
                            <label class="purple-radio-input">
                                <input type="radio" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <label class="info-label" for="sell">Paid</label>

                                                                  
                        </div>                                        
                    </div>
                                <div class="form-group form-email-pass text-left">
                                
                            <div class="form-group form-email">
                                <label for="price">Sell Price*</label><br>
                                <input name="price" class="form-control" id="price" placeholder="Enter your price" required> 
                            </div>
                      
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="form-group form-email-pass text-left">
                        
                            <div class="form-group form-email form-picture">
                                <label for="usrnotes">Upload Notes</label><br>
                                <input name="unotes1" type="file" class="form-control-2 form-control" id="usrnotes" placeholder="Upload a file"> 
                                <center><img src="images/Master_images_front/upload-note.png" class="upload-profile"></center>
                            </div>
                      
                    </div>
                </div>
            </div>
            <div class="row" >
                <div class="col-xl-2 col-md-3 col-sm-6" style="margin-bottom: 80px;">
                    <button class="btn btn-general allBtn specialbtn" href="#"><a href="#">save</a></button>
                </div>
                <div class="col-xl-2 col-md-3 col-sm-6">
                    <button name="submit" class="btn btn-general allBtn specialbtn" href="#">Publish</button>
                </div>
                </form>
                <div class="col-xl-8 col-md-6"></div>&nbsp;&nbsp;&nbsp;&nbsp;

            </div>
        </div>
    </section>
    <div class="boxes"></div>
    <!-- Selling Details Ends -->

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