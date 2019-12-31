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
    <title>ΟΑΣΑ Επικοινωνία</title>  
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
					<h2>Επικοινωνία</h2>
				</div>
			</div>
		</div>
	</div>
    
    <!-- SECTION -->
	<div id="support" class="section wb" style="padding-top:100px;">
        <div class="container">
            <!-- Breadcrumbs -->
			<nav id="breadcrumbs">
				<ul>
					<li><a href="index.php"><i class="fa fa-home global-radius fa-lg"></i></a></li>
					<li>Επικοινωνία</li>
				</ul>
            </nav>
            
            <div class="section-title text-center">
                <h3>Αίτημα για Επικοινωνία</h3>
                <p class="lead">Οποιαδήποτε στιγμή μπορείτε να επικοινωνήσετε μαζί μας είτε τηλεφωνικώς, 
                    είτε μέσω ηλεκτρονικής αλληλογραφίας, email, ακόμη και συμπληρώνοντας την παρακάτω φόρμα παραθέτοντας τον λόγο επικοινωνίας.
                <br>Θα απαντήσουμε στο αίτημα σας όσο το δυνατόν γρηγορότερα και αποτελεσματικά μπορούμε!</p>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactform" class="row" action="php_utils/contactForm.php" name="contactform" method="post">
                            <fieldset class="row-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Επώνυμο" required oninvalid="setCustomValidity('Άδειο πεδίο. Χρειάζεται να εισαχθεί επώνυμο!')" oninput="setCustomValidity('')">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Όνομα" required oninvalid="setCustomValidity('Άδειο πεδίο. Χρειάζεται να εισαχθεί όνομα!')" oninput="setCustomValidity('')">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="example@example.com/gr" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required oninvalid="setCustomValidity('Άδειο πεδίο ή μη έγκυρη διεύθυνση email! Προσθέστε έγκυρη διεύθυνση email.')" oninput="setCustomValidity('')">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="tel" name="phone" id="phone"  pattern="[0-9]{10}" class="form-control" placeholder="Τηλέφωνο" required oninvalid="setCustomValidity('Άδειο πεδίο ή μη έγκυρος αριθμός τηλεφώνου! Προσθέστε έγκυρο δεκαψήφιο αριθμό τηλεφώνου.')" oninput="setCustomValidity('')">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                    <input type="text" name="subject" id="subject" class="form-control" placeholder="Θέμα" required oninvalid="setCustomValidity('Άδειο πεδίο. Προσθέστε θέμα αιτήματος!')" oninput="setCustomValidity('')">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Δώστε λεπτομέρειες..." required oninvalid="setCustomValidity('Άδειο πεδίο. Προσθέστε λεπτομέρειες!')" oninput="setCustomValidity('')"></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                    <button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">Αποστολή αιτήματος!</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
				<div class="col-md-6">
					<div class="right-box-contact">
						<h4>Τηλέφωνο Επικοινωνίας</h4>
						<div class="support-info">
							<div class="info-title">
								<i class="fa fa-phone" aria-hidden="true"></i>
								210 8200999
								<span>Ώρες λειτουργίας: 09:00 - 16:00</span>
							</div>
						</div>
					</div>
					<div class="right-box-contact">
						<h4>Διεύθυνση</h4>
						<div class="support-info">
							<div class="info-title">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
								Διεύθυνση
								<span>Μετσόβου 15, Αθήνα 106 82</span>
							</div>
						</div>
					</div>
					<div class="right-box-contact">
						<h4>Στείλτε μας τα σχόλιά σας</h4>
						<div class="support-info">
							<div class="info-title">
								<i class="fa fa-envelope" aria-hidden="true"></i>
								info@_oasa.gr
								<span>Βοηθήστε μας να βελτιωθούμε!</span>
							</div>
						</div>
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