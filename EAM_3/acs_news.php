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
    <title>ΟΑΣΑ Ανακοινώσεις</title>  
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

    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/themes/smoothness/jquery-ui.css">
    <script src="http://code.jquery.com/jquery-1.12.4.js" type="text/javascript"></script>
    <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js" type="text/javascript"></script>

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
                            <a class="active" href="accesibility.php" class="dropbtn">Προσβασιμότητα</a>
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
                        <li><a href="contact.php">Επικοινωνία</a></li>
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
					<h2>Ανακοινώσεις</h2>
				</div>
			</div>
		</div>
    </div>

    <!-- SECTION -->
	<div class="about-box">
		<div class="container">
            <!-- Breadcrumbs -->
            <nav id="breadcrumbs">
                <ul>
                    <li><a href="index.php"><i class="fa fa-home global-radius fa-lg"></i></a></li>
                    <li><a href="accesibility.php">Προσβασιμότητα</a></li>
                    <li>Ανακοινώσεις</li>
                </ul>
            </nav>

            <div>
                Ανακοινώσεις
            </div>
        </div>    
    
    </div>
    <!-- end of SECTION -->

    <!--FOOTER-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <img src="images/logos/oasa_logo2.png" alt="image">
                        </div>
                        <p> Η Ανώνυμη Εταιρεία με την επωνυμία «ΟΡΓΑΝΙΣΜΟΣ ΑΣΤΙΚΩΝ ΣΥΓΚΟΙΝΩΝΙΩΝ ΑΘΗΝΩΝ» και τον διακριτικό τίτλο «Ο.Α.Σ.Α. Α.Ε.» είναι δημόσια επιχείρηση κοινωφελούς χαρακτήρα που ιδρύθηκε ως νομικό πρόσωπο ιδιωτικού δικαίου.</p>
                        <p> Σκοπός του Ο.Α.Σ.Α. είναι ο στρατηγικός και επιχειρησιακός σχεδιασμός, ο συντονισμός και ο έλεγχος του συγκοινωνιακού έργου που εκτελείται από τα μέσα (επίγεια και υπόγεια) μαζικής μεταφοράς στην περιφέρεια Αττικής.</p>
                    </div><!-- end clearfix -->
                </div><!-- end col -->

                <div class="col-md-2 col-sm-3 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Πληροφορίες</h3>
                        </div>

                        <ul class="twitter-widget footer-links">
                            <li><a href="status.php">Κατάσταση μέσων</a></li>
                            <li><a href="#">Χάρτες</a></li>
                            <li><a href="#">Εισιτήρια-Κάρτες</a></li>
							<li><a href="accesibility.php">Προσβασιμότητα</a></li>
							<li><a href="about.php">Οργανισμός ΟΑΣΑ</a></li>
							<li><a href="contact.php">Επικοινωνία</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
				<div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Επικοινωνία</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="mailto:#">_oasa@oasa.gr</a></li>
                            <li><a href="index.php">_oasa.gr</a></li>
                            <li>Μετσόβου 15, Αθήνα 106 82</li>
                            <li>210 8200999</li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Μέσα Δικτύωσης</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="https://www.facebook.com/OASA.GR" target="_blank"><i class="fa fa-facebook"></i> Facebook</a></li>
                            <li><a href="https://www.instagram.com/OASA.GR/" target="_blank"><i class="fa fa-instagram"></i> Instagram</a></li>
                            <li><a href="https://www.linkedin.com/company/athenspublictransportoasa/about/" target="_blank"><i class="fa fa-linkedin"></i> Linkedin</a></li>
                            <li><a href="https://www.youtube.com/channel/UC0XdkZnOHhRLc3NE9tm4NUQ" target="_blank"><i class="fa fa-youtube"></i> Youtube</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
				
            </div><!-- end row -->
        </div><!-- end container -->
    </footer>
    <!--end of FOOTER-->

    <!-- COPYRIGHTS -->
    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">
                    <p class="footer-company-name">2018 &copy;<a href="index.php"> ΟΑΣΑ</a>  Σχεδιασμός: <a href="https://html.design/">html design</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div>
    <!-- end of COPYRIGHTS -->

    <!--SCROLL TO TOP-->
    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
    <!--end of SCROLL TO-->

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="js/hoverdir.js"></script>    
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
   <!-- MAP & CONTACT -->
    <script src="js/map.js"></script>

</body>
</html>