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
   
    <!--HEADER-->
    <header class="header header_style_01">
        <nav class="megamenu navbar navbar-default">
            <div class="container-fluid">
            <!--NAV-HEADER (logo button to index.php)-->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logos/oasa_logo2.png" alt="image"></a>
                </div>
                <!--end of NAV HEADER-->

                <!--NAV-BAR-->
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Αρχική</a></li>
                        <li><a href="status.php">Κατάσταση Μέσων</a></li>
                        <li><a href="#">Χάρτες</a></li>
                        <li class="dropdown" >
                            <a href="#" class="dropbtn">Εισιτήρια-Κάρτες</a>
                            <div class="dropdown-content">
                                <a href="#">Σημεία Έκδοσης/Επαναφόρτισης</a>
                                <a href="#">Τιμές Εισιτηρίων</a>
                                <a href="#">Online Αγορά Εισιτηρίων</a>
                            </div>
                        </li>
                        <li class="dropdown" >
                            <a href="accesibility.php" class="dropbtn">Προσβασιμότητα</a>
                            <div class="dropdown-content">
                                <a href="acs_instrc.php">Οδηγίες Πρόσβασης</a>
                                <a href="acs_points.php">Προσβάσιμα Σημεία</a>
                                <a href="acs_news.php">Ανακοινώσεις</a>
                            </div>
                        </li> 
                        <li class="dropdown" >
                            <a href="about.php" class="dropbtn">Οργανισμός ΟΑΣΑ</a>
                            <div class="dropdown-content">
                                <a href="news.php">Νέα-Ανακοινώσεις</a>
                                <a href="org.php">Προφίλ Οργανισμού</a>
                            </div>
                        </li>   
                        <li><a class="active" href="contact.php">Επικοινωνία</a></li>
                        <li class="search-option">
                            <button class="search tran3s dropdown-toggle" id="searchDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search" aria-hidden="true"></i></button>
                            <form action="#" class="p-color-bg dropdown-menu tran3s" aria-labelledby="searchDropdown">
                                <input type="text" placeholder="Αναζήτηση...">
                                <button class="p-color-bg"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                    </li> 
                    <li>
                        <div id="myModal" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <button data-dismiss="modal" class="close">&times;</button>
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active">
                                                <a href="#home" aria-controls="home" role="tab" data-toggle="tab">Σύνδεση</a>
                                            </li>
                                            <li role="presentation"><a href="#next" aria-controls="next" role="tab" data-toggle="tab">Εγγραφή</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="home">
                                                <form>
                                                    <input type="text" name="username" class="username form-control" placeholder="Email"/>
                                                    <input type="password" name="password" class="password form-control" placeholder="Συνθηματικό"/>
                                                    <input class="btn login" type="submit" value="Είσοδος"/>
                                                </form>
                                            </div>
                                            <div role="tabpanel" class="tab-pane" id="next">
                                                <form>
                                                    <input type="text" name="username" class="username form-control" placeholder="Email"/>
                                                    <input type="password" name="password" class="password form-control" placeholder="Συνθηματικό"/>
                                                    <input type="password" name="password" class="password form-control" placeholder="Επανάληψη Συνθηματικού"/>
                                                    <input class="btn login" type="submit" value="Εγγραφή"/>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="login-trigger" onclick="javascript:$('#myModal').modal('show');"><i class="fa fa-user" aria-hidden="true"></i></button>
                        </li>
                    </ul>
                </div>
                <!--end of NAV-BAR-->
            </div>
        </nav>
    </header>
    <!--end of HEADER-->
	
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
	<div id="support" class="section wb">
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
                        <form id="contactform" class="row" action="contactForm.php" name="contactform" method="post">
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
    <?php include 'footer.php'; ?>

</body>
</html>