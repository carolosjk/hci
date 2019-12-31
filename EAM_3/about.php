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
    <title>ΟΑΣΑ Οργανισμός</title>  
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
					<h2>Ενημερωθείτε μέσα από Νέα, Ανακοινώσεις και Πληροφορίες για τον ΟΑΣΑ</h2>
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
                        <li>Οργανισμός ΟΑΣΑ</li>
                    </ul>
                </nav>
            
				<div class="item">
					<div class="single-feature" style="margin-top: 50px;">
                        <div class="icon"><i class="fa fa-info fa-4x" style="height: 20%; width: 20%; float:left;"></i>
                            <h4 style="text-align: left;"><a href="news.php">Νέα-Ανακοινώσεις</a></h4 style="text-align: left;">
                            <p style="text-align: left;"> Ενημερωθείτε σχετικά με την κατάσταση των μέσων που υπάγονται στον οργανισμό ΟΑΣΑ και με τα νέα του οργανισμού.</p>
                        </div>
					</div> 
				</div>
			</div>
			
			<hr class="hr1">
			
			<div class="row">
				<div class="col-md-6">
                    <div class="post-media wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <img src="uploads/oasa-marathon-1200x600.jpg" alt="" class="img-responsive">                        
                    </div><!-- end media -->
                </div>
				<div class="col-md-6">
					<div class="message-box right-ab">
                        <h4>Η Ανωνυμη Εταιρεια με την επωνυμια «ΟΡΓΑΝΙΣΜΟΣ ΑΣΤΙΚΩΝ ΣΥΓΚΟΙΝΩΝΙΩΝ ΑΘΗΝΩΝ» και τον διακριτικο τιτλο «Ο.Α.Σ.Α. Α.Ε.»</h4>
                        <h2>Ο.Α.Σ.Α.</h2>
                        <p>Η Ο.Α.Σ.Α. Α.Ε. είναι ο μοναδικός μέτοχος των εταιρειών παροχής συγκοινωνιακού έργου, «ΟΔΙΚΕΣ ΣΥΓΚΟΙΝΩΝΙΕΣ» (Ο.ΣΥ. Α.Ε) αρμόδια για τη λειτουργία των Λεωφορείων και των Τρόλεϊ και «ΣΤΑΘΕΡΕΣ ΣΥΓΚΟΙΝΩΝΙΕΣ» (ΣΤΑ.ΣΥ. Α.Ε), 
                            αρμόδια για τη λειτουργία των γραμμών 1 (πρώην ηλεκτρικός σιδηρόδρομος), 2 & 3 του ΜΕΤΡΟ και του Τραμ. Οι τρεις εταιρείες αποτελούν τον Όμιλο Ο.Α.Σ.Α.</p>
						<a href="org.php" class="btn btn-light btn-radius grd1 btn-brd"> Μάθετε Περισσότερα!</a>
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