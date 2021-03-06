<?php session_start(); ?>
<?php 
$_SESSION['email'] = $_SESSION['emailid'];
$_SESSION['fname'] = $_SESSION['ffname'];
if(isset($_POST['verify'])) {
    header("Location: email/verifyuser.php");
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
    <title>Notes Page</title>

    <!-- Favicon -->
	<link rel="shortcut icon" href="images/Master_images_front/favicon.ico">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="css/bootstrap4.5/bootstrap.min.css">

    <!-- Resposnise Tabs CSS -->
    <link rel="stylesheet" href="css/responsive-tabs/5.2 responsive-tabs.min.css.css">

    <style>
        body {
            font-family: "Open Sans";
            font-size: 16px;
            font-weight: 400;
            line-height: 20px;
            color: #333333;
        }
        table {
            border: 1px solid #000;
            margin-left: auto;
            margin-right: auto;
            margin-top: 150px;
        }
        .btn-general {
            width: 540px;
            height: 50px;
            border-radius: 3px;
            margin: 30px;
            color: #fff;
        }
        .btn-general a {
            color: #fff;
            font-size: 18px;
            font-weight: 600;
            line-height: 22px;
            border: none;
            text-decoration: none;
            text-transform: uppercase;
        }
        .allBtn {
            background-color: #6255a5;
        }
        .logo img {
            margin-top: 30px;
            margin-left: 30px;
        }
        .heading td {
            padding-top: 50px;
            font-size: 26px;
            font-weight: 600;
            line-height: 30px;
            color: #6255a5;
            padding-left: 30px;
        }
        .salution td {
            font-size: 18px;
            font-weight: 600;
            line-height: 22px;
            padding: 30px 0 20px 30px;
        }
        .line1 td {
            padding-bottom: 20px;
            padding-left: 30px;
        }
        @media only screen and (min-width:609px) and (max-width:768px) {
            table {
                margin-left: -90px;
            }
        }
        @media only screen and (min-width:400px) and (max-width:608px) {
            .btn-general {
                width: 320px;
            }
            table {
                margin-left: -5px;
            }
        }
        @media only screen and (max-width:399px) {
            .btn-general {
                width: 230px;
            }
            table {
                margin-left: -5px;
            }
            .logo img {
                margin-top: 10px;
                margin-left: 10px;
                width: 220px;
            }
            body {
                font-size: 14px;
                line-height: 20px;
            }
            .btn-general {
                margin: 10px;
            }
            .salution td {
                font-size: 16px;
                padding: 10px 0 10px 10px;
            }
            .heading td {
                padding-top: 30px;
                font-size: 20px;
                font-weight: 600;
                line-height: 24px;
                color: #6255a5;
                padding-left: 10px;
            }
            .line1 td {
                padding-bottom: 0;
                padding-left: 10px;
            }
            .btn-general a {
                color: #fff;
                font-size: 16px;
                font-weight: 600;
                line-height: 22px;     
            }
        }
    </style>

</head>

<body>
<form   action="6.email_verification.php" method="post">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-2 col-xl-3"></div>
            <div class="col-md-8 col-sm-10 col-xl-6">
        <table>
        <tr class="logo">
          <td><img src="images/Homepage/logo_new.png"></td>
        </tr>
        <tr class="heading">
            <td>Email Verification</td>
          </tr>
          <tr class="salution">
            <td>Dear <?php echo $_SESSION['ffname'] ?>,</td>
          </tr>
          <tr class="line1">
            <td><p>Thanks for Signing up!</p><p>Simply click below for email verification.</p></td>
          </tr>
          </tr>
          <tr class="email">
            <td><button class="btn btn-general allBtn" name="verify" href="#"><a src="#">Verify Email Address</a></button></td>
          </tr>
      </table>
    </div>
    <div class="col-md-2 col-xl-3"></div>
    </div>
    </div>
</form>
       <!-- jquery -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
       </script>
       
       <!-- Bootstrap JS -->
       <script src="js/bootstrap4.5/bootstrap.min.js"></script>
   
       <!-- Responsive Tabs -->
       <script src="js/responsive-tabs/5.4 jquery.responsiveTabs.min.js.js"></script>
</body>
</html>