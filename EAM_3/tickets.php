<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>ΟΑΣΑ Εισιτήρια-Κάρτες</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Colors CSS -->
    <link rel="stylesheet" href="css/colors.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="realestate_version">

    <!-- LOADER -->
    <div id="preloader">
        <span class="loader"><span class="loader-inner"></span></span>
    </div><!-- end loader -->
    <!-- END LOADER -->

    <!-- HEADER -->
    <?php include 'utils/header.php'; ?>

    <div class="all-title-box">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Εισιτήρια-Κάρτες</h2>
				</div>
			</div>
		</div>
    </div>
    
    <!-- SECTION -->
	<div class="about-box">
		<div class="container">
            <div class="row">
                <!-- Breadcrumbs -->
                <nav id="breadcrumbs">
                    <ul>
                        <li><a href="index.php"><i class="fa fa-home global-radius fa-lg"></i></a></li>
                        <li>Εισιτήρια-Κάρτες</li>
                    </ul>
                </nav>
            </div>
			
            <div class="row">
                <div class="col-md-4 wow slideInLeft hidden-xs hidden-sm" style="margin-right:150px;">
                    <div class="item">
                        <div class="single-feature" style="margin-top: 50px;">
                            <div class="icon"><i class="fa fa-ticket fa-4x" style="height: 20%; width: 20%; float:left; margin-right:5%;"></i>
                                <h4 style="text-align: left;"><a href="ticket_prices.php">Κόμιστρα εισιτηρίων-καρτών</a></h4 style="text-align: left;">
                                <p style="text-align: left;"> Ενημερωθείτε σχετικά με τις τιμές των εισιτηρίων.</p>
                            </div>
                        </div> 
                    </div>

                    <div class="item">
                        <div class="single-feature" style="margin-top: 50px;">
                            <div class="icon"><i class="fa fa-map-marker fa-4x" style="height: 20%; width: 20%; float:left; margin-right:5%;"></i>
                                <h4 style="text-align: left;"><a href="ticket_maps.php">Σημεία έκδοσης/επαναφόρτωσης εισιτηρίων-καρτών</a></h4 style="text-align: left;">
                                <p style="text-align: left;"> Δείτε τα σημεία όπου μπορείτε να αγοράσετε ή/και να επαναφορτίσετε το εισιτήριο ή την κάρτα σας.</p>
                            </div>
                        </div> 
                    </div>
                </div>

                <hr class="hr1">

                <div class="col-md-6 wow slideInRight hidden-xs hidden-sm">
                    <div class="post-media wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <a href="tickets_purchase.php"> <img src="uploads/ticktick.png" alt="" class="img-responsive"></a>                       
                    </div>
                </div>

			</div>
		</div>
    </div>
    <!-- end of SECTION -->
   
    <!--FOOTER-->
    <?php include 'utils/footer.php'; ?>

</body>
</html>