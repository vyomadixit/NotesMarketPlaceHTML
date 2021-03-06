<?php session_start(); ?>


<?php 
    if(isset($_POST['notes'])) {
        $email = $_SESSION['EmailID'];
        $fname = $_SESSION['FirstName'];

        $_SESSION['Email'] = $email;
        $_SESSION['FName'] = $fname;
        header("Location: 9.notes_details.php");
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
    <title>Search Page</title>

    <!-- Favicon -->
	<link rel="shortcut icon" href="images/Master_images_front/favicon.ico">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="css/bootstrap4.5/bootstrap.min.css">

    <!-- Resposnise Tabs CSS -->
    <link rel="stylesheet" href="css/responsive-tabs/5.2 responsive-tabs.min.css.css">

    <!-- Custom CSS Style link -->
    <link rel="stylesheet" href="css/css_pages/search_page.css">
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

								<li class="nav-item active">
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

								<li class="nav-item">
                                <a href="1.login-page.php"><button class="btn btn-general allBtn" href="#">Logout</a></button>
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
                    <p id="home-heading-1">Search Notes</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Home Ends -->

    <!-- Filter Notes -->
    <section id="filter">
        <div class="container">
        <div id="filter-heading">
            <p>
                Search and Filter Notes
            </p>
        </div>
        <div id="filter-box">
            <form>
                <div class="form-row row1">
                    <div class="input-group col-md-12 col-sm-12 col-12">
                        
                        <div class="input-group-prepend">
                            <div class="input-group-text"><a href="#"><img src="images/Search/search.jpg" class="img-fluid rounded-circle"></a></i></div>
                        </div>
                        <input type="text" class="form-control" id="searchnotes" placeholder="Search for notes here">
                      </div>
                    </div>
                      <div class="form-row">
                      <div class="form-group col-md-4 col-sm-6 col-xl-2">
                    
                    <select id="typeState" class="form-control">
                      <option selected>Select Type</option>
                      <option>...</option>
                    </select>
                  </div>
                  <div class="form-group col-md-4 col-sm-6 col-xl-2">
                    
                    <select id="categoryState" class="form-control">
                      <option selected>Select Category</option>
                      <option>...</option>
                    </select>
                  </div>
                  <div class="form-group col-md-4 col-sm-6 col-xl-2">
                    
                    <select id="universityState" class="form-control">
                      <option selected>Select University</option>
                      <option>...</option>
                    </select>
                  </div>
                  <div class="form-group col-md-4 col-sm-6 col-xl-2">
                    
                    <select id="courseState" class="form-control">
                      <option selected>Select Course</option>
                      <option>...</option>
                    </select>
                  </div>
                  <div class="form-group col-md-4 col-sm-6 col-xl-2">
                    
                    <select id="countryState" class="form-control">
                      <option selected>Select Country</option>
                      <option>...</option>
                    </select>
                  </div>
                  <div class="form-group col-md-4 col-sm-6 col-xl-2">
                    
                    <select id="ratingState" class="form-control">
                      <option selected>Select Rating</option>
                      <option>...</option>
                    </select>
                  </div>
                </div>
            </form>
        </div>
    </div>
    </section>
    <!-- Filter Notes Ends -->

    <!-- Notes section -->
    <section id="notes">
    <form method="post">
        <div class="content-box-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-12 notes-heading">
                        <p>Total 18 Notes</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-box-md">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-sm-12">
                    
                        <div class="notes-books center-block">
                        <a href="9.notes_details.php">
                        <button style="border:none;" name="notes">
                        <img src="images/Search/1.jpg" class="notes-image img-fluid">
                        <div class="notes-box">
                            <div class="note-head">
                                <p>Computer Operating System - Final<br> Exam Book With Paper Solution</p>
                            </div>
                            <div class="note-sub">
                            <div class="row">
                                <div class="col-3 text-center">
                                    <img src="images/Master_images_front/university.png" class="img-fluid">
                                </div>
                                <div class="col-9">
                                    <p>University of California, US</p>
                                </div>
                                <div class="col-3 text-center">
                                    <img src="images/Master_images_front/pages.png" class="img-fluid">
                                </div>
                                <div class="col-9">
                                    <p>204 Pages</p>
                                </div>
                                <div class="col-3 text-center">
                                    <img src="images/Master_images_front/calendar.png" class="img-fluid">
                                </div>
                                <div class="col-9">
                                    <p>Thu, Nov 26 2020</p>
                                </div>
                                <div class="col-3 text-center">
                                    <img src="images/Master_images_front/flag.png" class="img-fluid">
                                </div>
                                <div class="col-9">
                                    <p class="pa-red">5 Users mark this note as inappropriate</p>
                                </div>
                                <div class="col-6 rate">
                                    <img src="images/Master_images_front/star.png" class="img-fluid">
                                    <img src="images/Master_images_front/star.png" class="img-fluid">
                                    <img src="images/Master_images_front/star.png" class="img-fluid">
                                    <img src="images/Master_images_front/star.png" class="img-fluid">
                                    <img src="images/Master_images_front/star.png" class="img-fluid">
                                  </div>
                                  <div class = "col-6 search-review">
                                    <p> 100 reviews</p>
                                </div>
                            </div>
                        </div>
                        </div>
                        
                    </div>
                    </button>
                    </a>
                    </div>
                   
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="notes-books center-block">
                        <a href="9.notes_details.php">
                            <img src="images/Search/2.jpg" class="notes-image img-fluid">
                            <div class="notes-box">
                                <div class="note-head">
                                    <p>Computer Operating System - Final<br> Exam Book With Paper Solution</p>
                                </div>
                                <div class="note-sub">
                                <div class="row">
                                    <div class="col-3 text-center">
                                        <img src="images/Master_images_front/university.png" class="img-fluid">
                                    </div>
                                    <div class="col-9">
                                        <p>University of California, US</p>
                                    </div>
                                    <div class="col-3 text-center">
                                        <img src="images/Master_images_front/pages.png" class="img-fluid">
                                    </div>
                                    <div class="col-9">
                                        <p>204 Pages</p>
                                    </div>
                                    <div class="col-3 text-center">
                                        <img src="images/Master_images_front/calendar.png" class="img-fluid">
                                    </div>
                                    <div class="col-9">
                                        <p>Thu, Nov 26 2020</p>
                                    </div>
                                    <div class="col-3 text-center">
                                        <img src="images/Master_images_front/flag.png" class="img-fluid">
                                    </div>
                                    <div class="col-9">
                                        <p class="pa-red">5 Users mark this note as inappropriate</p>
                                    </div>
                                    <div class="col-6 rate">
                                        <img src="images/Master_images_front/star-white.png" class="img-fluid">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                      </div>
                                      <div class = "col-6 search-review">
                                        <p> 100 reviews</p>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="notes-books center-block">
                        <a href="9.notes_details.php">
                            <img src="images/Search/3.jpg" class="notes-image img-fluid">
                            <div class="notes-box">
                                <div class="note-head">
                                    <p>Computer Operating System - Final<br> Exam Book With Paper Solution</p>
                                </div>
                                <div class="note-sub">
                                <div class="row">
                                    <div class="col-3 text-center">
                                        <img src="images/Master_images_front/university.png" class="img-fluid">
                                    </div>
                                    <div class="col-9">
                                        <p>University of California, US</p>
                                    </div>
                                    <div class="col-3 text-center">
                                        <img src="images/Master_images_front/pages.png" class="img-fluid">
                                    </div>
                                    <div class="col-9">
                                        <p>204 Pages</p>
                                    </div>
                                    <div class="col-3 text-center">
                                        <img src="images/Master_images_front/calendar.png" class="img-fluid">
                                    </div>
                                    <div class="col-9">
                                        <p>Thu, Nov 26 2020</p>
                                    </div>
                                    <div class="col-3 text-center">
                                        <img src="images/Master_images_front/flag.png" class="img-fluid">
                                    </div>
                                    <div class="col-9">
                                        <p class="pa-red">5 Users mark this note as inappropriate</p>
                                    </div>
                                    <div class="col-6 rate">
                                        <img src="images/Master_images_front/star-white.png" class="img-fluid">
                                        <img src="images/Master_images_front/star-white.png" class="img-fluid">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                      </div>
                                      <div class = "col-6 search-review">
                                        <p> 100 reviews</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </div>
                            </a>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="notes-books center-block">
                        <a href="9.notes_details.php">
                            <img src="images/Search/4.jpg" class="notes-image img-fluid">
                            <div class="notes-box">
                                <div class="note-head">
                                    <p>Computer Operating System - Final<br> Exam Book With Paper Solution</p>
                                </div>
                                <div class="note-sub">
                                <div class="row">
                                    <div class="col-3 text-center">
                                        <img src="images/Master_images_front/university.png" class="img-fluid">
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-xl-9">
                                        <p>University of California, US</p>
                                    </div>
                                    <div class="col-3 text-center">
                                        <img src="images/Master_images_front/pages.png" class="img-fluid">
                                    </div>
                                    <div class="col-9">
                                        <p>204 Pages</p>
                                    </div>
                                    <div class="col-3 text-center">
                                        <img src="images/Master_images_front/calendar.png" class="img-fluid">
                                    </div>
                                    <div class="col-9">
                                        <p>Thu, Nov 26 2020</p>
                                    </div>
                                    <div class="col-3 text-center">
                                        <img src="images/Master_images_front/flag.png" class="img-fluid">
                                    </div>
                                    <div class="col-9">
                                        <p class="pa-red">5 Users mark this note as inappropriate</p>
                                    </div>
                                    <div class="col-6 rate">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                      </div>
                                      <div class = "col-6 search-review">
                                        <p> 100 reviews</p>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="notes-books center-block">
                        <a href="9.notes_details.php">
                            <img src="images/Search/5.jpg" class="notes-image img-fluid">
                            <div class="notes-box">
                                <div class="note-head">
                                    <p>Computer Operating System - Final<br> Exam Book With Paper Solution</p>
                                </div>
                                <div class="note-sub">
                                <div class="row">
                                    <div class="col-3 text-center">
                                        <img src="images/Master_images_front/university.png" class="img-fluid">
                                    </div>
                                    <div class="col-9">
                                        <p>University of California, US</p>
                                    </div>
                                    <div class="col-3 text-center">
                                        <img src="images/Master_images_front/pages.png" class="img-fluid">
                                    </div>
                                    <div class="col-9">
                                        <p>204 Pages</p>
                                    </div>
                                    <div class="col-3 text-center">
                                        <img src="images/Master_images_front/calendar.png" class="img-fluid">
                                    </div>
                                    <div class="col-9">
                                        <p>Thu, Nov 26 2020</p>
                                    </div>
                                    <div class="col-3 text-center">
                                        <img src="images/Master_images_front/flag.png" class="img-fluid">
                                    </div>
                                    <div class="col-9">
                                        <p class="pa-red">5 Users mark this note as inappropriate</p>
                                    </div>
                                    <div class="col-6 rate">
                                        <img src="images/Master_images_front/star-white.png" class="img-fluid">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                      </div>
                                      <div class = "col-6 search-review">
                                        <p> 100 reviews</p>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="notes-books center-block">
                        <a href="9.notes_details.php">
                            <img src="images/Search/6.jpg" class="notes-image img-fluid">
                            <div class="notes-box">
                                <div class="note-head">
                                    <p>Computer Operating System - Final<br> Exam Book With Paper Solution</p>
                                </div>
                                <div class="note-sub">
                                <div class="row">
                                    <div class="col-3 text-center">
                                        <img src="images/Master_images_front/university.png" class="img-fluid">
                                    </div>
                                    <div class="col-9">
                                        <p>University of California, US</p>
                                    </div>
                                    <div class="col-3 text-center">
                                        <img src="images/Master_images_front/pages.png" class="img-fluid">
                                    </div>
                                    <div class="col-9">
                                        <p>204 Pages</p>
                                    </div>
                                    <div class="col-3 text-center">
                                        <img src="images/Master_images_front/calendar.png" class="img-fluid">
                                    </div>
                                    <div class="col-9">
                                        <p>Thu, Nov 26 2020</p>
                                    </div>
                                    <div class="col-3 text-center">
                                        <img src="images/Master_images_front/flag.png" class="img-fluid">
                                    </div>
                                    <div class="col-9">
                                        <p class="pa-red">5 Users mark this note as inappropriate</p>
                                    </div>
                                    <div class="col-6 rate">
                                        <img src="images/Master_images_front/star-white.png" class="img-fluid">
                                        <img src="images/Master_images_front/star-white.png" class="img-fluid">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                      </div>
                                      <div class = "col-6 search-review">
                                        <p> 100 reviews</p>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="notes-books center-block">
                        <a href="9.notes_details.php">
                            <img src="images/Search/1.jpg" class="notes-image img-fluid">
                            <div class="notes-box">
                                <div class="note-head">
                                    <p>Computer Operating System - Final<br> Exam Book With Paper Solution</p>
                                </div>
                                <div class="note-sub">
                                <div class="row">
                                    <div class="col-3 text-center">
                                        <img src="images/Master_images_front/university.png" class="img-fluid">
                                    </div>
                                    <div class="col-9">
                                        <p>University of California, US</p>
                                    </div>
                                    <div class="col-3 text-center">
                                        <img src="images/Master_images_front/pages.png" class="img-fluid">
                                    </div>
                                    <div class="col-9">
                                        <p>204 Pages</p>
                                    </div>
                                    <div class="col-3 text-center">
                                        <img src="images/Master_images_front/calendar.png" class="img-fluid">
                                    </div>
                                    <div class="col-9">
                                        <p>Thu, Nov 26 2020</p>
                                    </div>
                                    <div class="col-3 text-center">
                                        <img src="images/Master_images_front/flag.png" class="img-fluid">
                                    </div>
                                    <div class="col-9">
                                        <p class="pa-red">5 Users mark this note as inappropriate</p>
                                    </div>
                                    <div class="col-6 rate">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                      </div>
                                      <div class = "col-6 search-review">
                                        <p> 100 reviews</p>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="notes-books center-block">
                        <a href="9.notes_details.php">
                            <img src="images/Search/2.jpg" class="notes-image img-fluid">
                            <div class="notes-box">
                                <div class="note-head">
                                    <p>Computer Operating System - Final<br> Exam Book With Paper Solution</p>
                                </div>
                                <div class="note-sub">
                                <div class="row">
                                    <div class="col-3 text-center">
                                        <img src="images/Master_images_front/university.png" class="img-fluid">
                                    </div>
                                    <div class="col-9">
                                        <p>University of California, US</p>
                                    </div>
                                    <div class="col-3 text-center">
                                        <img src="images/Master_images_front/pages.png" class="img-fluid">
                                    </div>
                                    <div class="col-9">
                                        <p>204 Pages</p>
                                    </div>
                                    <div class="col-3 text-center">
                                        <img src="images/Master_images_front/calendar.png" class="img-fluid">
                                    </div>
                                    <div class="col-9">
                                        <p>Thu, Nov 26 2020</p>
                                    </div>
                                    <div class="col-3 text-center">
                                        <img src="images/Master_images_front/flag.png" class="img-fluid">
                                    </div>
                                    <div class="col-9">
                                        <p class="pa-red">5 Users mark this note as inappropriate</p>
                                    </div>
                                    <div class="col-6 rate">
                                        <img src="images/Master_images_front/star-white.png" class="img-fluid">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                      </div>
                                      <div class = "col-6 search-review">
                                        <p> 100 reviews</p>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="notes-books center-block">
                        <a href="9.notes_details.php">
                            <img src="images/Search/3.jpg" class="notes-image img-fluid">
                            <div class="notes-box">
                                <div class="note-head">
                                    <p>Computer Operating System - Final<br> Exam Book With Paper Solution</p>
                                </div>
                                <div class="note-sub">
                                <div class="row">
                                    <div class="col-3 text-center">
                                        <img src="images/Master_images_front/university.png" class="img-fluid">
                                    </div>
                                    <div class="col-9">
                                        <p>University of California, US</p>
                                    </div>
                                    <div class="col-3 text-center">
                                        <img src="images/Master_images_front/pages.png" class="img-fluid">
                                    </div>
                                    <div class="col-9">
                                        <p>204 Pages</p>
                                    </div>
                                    <div class="col-3 text-center">
                                        <img src="images/Master_images_front/calendar.png" class="img-fluid">
                                    </div>
                                    <div class="col-9">
                                        <p>Thu, Nov 26 2020</p>
                                    </div>
                                    <div class="col-3 text-center">
                                        <img src="images/Master_images_front/flag.png" class="img-fluid">
                                    </div>
                                    <div class="col-9">
                                        <p class="pa-red">5 Users mark this note as inappropriate</p>
                                    </div>
                                    
                                    <div class="col-6 rate">
                                        <img src="images/Master_images_front/star-white.png" class="img-fluid">
                                        <img src="images/Master_images_front/star-white.png" class="img-fluid">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                        <img src="images/Master_images_front/star.png" class="img-fluid">
                                      </div>
                                      <div class = "col-6 search-review">
                                        <p> 100 reviews</p>
                                    </div>
                                    
                                    </div>
                                </div>
                            </div>
                            </a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </section>
    <!-- Notes section Ends -->

    <!-- Pagination Filter -->
    <section style="margin-bottom: 50px;">
    <div class="content-box-md">
        <div class="container">
            <div class="row">
                <div id="isotope-filters">
                <div class="col-md-12 col-sm-12 col-12">
                    <!-- Portfolio Filters -->
                    <div class="pagination">
                        <a href="#"><img src="images/Master_images_front/left-arrow.png" class="img-fluid"></a>
                        <a href="8.search-page.php" class="active">1</a>
                        <a href="8.ssearch2-page.php">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="8.ssearch2-page.php"><img src="images/Master_images_front/right-arrow.png" class="img-fluid"></a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>  

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