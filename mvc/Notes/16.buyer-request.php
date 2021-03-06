
<?php include "include/db.php";?>

<?php session_start(); ?>

<?php
$limit = 4;
           

if(isset($_POST['submit'])){
    $search_text=$_POST['text'];
    
    $result_db = mysqli_query($connection,"SELECT COUNT(ID) FROM downloads WHERE NoteTitle LIKE '%$search_text%'");
            $row_db = mysqli_fetch_row($result_db);
            $records = $row_db[0];
            $total_pages = ceil($records / $limit);
      $query="SELECT downloads.NoteTitle,downloads.NoteCategory,referencedata.Value,downloads.PurchasedPrice, downloads.AttachmentDownloadedDate FROM 
      downloads LEFT JOIN referencedata ON downloads.IsPaid=referencedata.ID WHERE downloads.NoteTitle LIKE '%$search_text%' 
      LIMIT  $start_from,$limit";
      $buyer=mysqli_query($connection,$query);
      $_SESSION['buyer'] =  $buyer;
}
else {
    
    $result_db = mysqli_query($connection,"SELECT COUNT(ID) FROM downloads");
            $row_db = mysqli_fetch_row($result_db);
            $records = $row_db[0];
            $total_pages = ceil($records / $limit);
      $query="SELECT downloads.NoteTitle,downloads.NoteCategory,referencedata.Value,downloads.PurchasedPrice, downloads.AttachmentDownloadedDate 
      FROM downloads LEFT JOIN referencedata ON downloads.IsPaid=referencedata.ID  LIMIT  $start_from,$limit ";
      $buyer = mysqli_query($connection,$query);
      
      $_SESSION['buyer'] =  $buyer;
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
    <title>Buyer Requests</title>

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
                                        <a class="dropdown-item clr-blue" href="7.home_page.php">LOGOUT</a>
									</div>
								</li>

								<li class="nav-item">
									<button class="btn btn-general allBtn" href="#"><a href="7.home_page.php">Logout</a></button>
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
                                        <a class="dropdown-item clr-blue" href="7.home_page.php">LOGOUT</a>
									</div>
                                </li><br>
                                <li><a class="smooth-scroll" href="7.home_page.php">Logout</a></li><br>
                                
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

   

        <!-- Downloads Section -->
        <section id="progress">
            <div class="container">
                <div class="section-top">
                <div class="row section-top">
                    <div class="col-md-6 col-sm-12 section-heading">
                        Buyer Requests
                    </div>
    
                    <div class="col-md-6 col-sm-12">
    
                        <form class="form-inline float-right" method="post">
                            <div class="form-group has-search">
                            
                                <input type="text" name="text" class="form-control" placeholder='Search'>
                                <button type="submit" name="submit" class="btn btn-general allBtn btn-search">SEARCH</button>
                            </div>
                           
                        
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
                                        <th>SR. NO.</th>
                                        <th>NOTE TITLE</th>
                                        <th>CATEGORY</th>
                                        <th>BUYER</th>
                                        <th>PHONE NO.</th>
                                        <th>SELL TYPE</th>
                                        <th>PRICE</th>
                                        <th>DOWNLOADED DATE/TIME</th>
                                        <th></th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                       

                          <?php 
                         $id=1;
                            while($row = mysqli_fetch_assoc($_SESSION['buyer'])){
                                
                                $title=$row['NoteTitle'];
                                $category=$row['NoteCategory'];
                                $type=$row['IsPaid'];
                                $price=$row['PurchasedPrice'];
                                $downloaded_date=$row['AttachmentDownloadedDate'];
                                
                                echo "<tr>";
                                echo "<td>$$id</td>";
                                echo "<td>$title</td>";
                                echo "<td>$category</td>";
                                echo "<td>testing123@gmail.com</td>";
                                echo "<td>+91&nbsp;9874563527</td>";
                                echo "<td>$type</td>";
                                echo "<td>$price</td>";
                                echo "<td>$downloaded_date</td>";
                                echo "
                                <td>
                                <img src='images/Master_images_front/eye.png'>&nbsp;
                                <div class='dropdown'>
                                    <button class= 'dropbtn dropleft btn-general'>
                                        <img src='images/Master_images_front/dots.png'>
                                    </button>
                                    <div class='dropdown-content drop-sell'>
                                        <a href='#'>Allow Download</a>
                                
                                    </div>
                                </div>
                                
                            </td>";

                                echo "</tr>";
                                $id++;
                            }
                            ?>
                            
                        </tbody>
                    </table>
                </div>
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
