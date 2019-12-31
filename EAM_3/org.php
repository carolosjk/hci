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
                            <a href="accesibility.php" class="dropbtn">Προσβασιμότητα</a>
                            <div class="dropdown-content">
                                <a href="acs_instrc.php">Οδηγίες Πρόσβασης</a>
                                <a href="acs_points.php">Προσβάσιμα Σημεία</a>
                                <a href="acs_news.php">Ανακοινώσεις</a>
                            </div>
                        </li> 
                        <li class="dropdown" >
                            <a class="active" href="about.php" class="dropbtn">Οργανισμός ΟΑΣΑ</a>
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
					<h2> Προφίλ Οργανισμού ΟΑΣΑ</h2>
				</div>
			</div>
		</div>
    </div>

    <!-- SECTION-->
	<div class="about-box">
    	<div class="container">
            <!-- Breadcrumbs -->
            <nav id="breadcrumbs">
                <ul>
                    <li><a href="index.php"><i class="fa fa-home global-radius fa-lg"></i></a></li>
                    <li><a href="about.php">Οργανισμός ΟΑΣΑ</a></li>
                    <li>Προφίλ Οργανισμού ΟΑΣΑ</li>
                </ul>
            </nav>
            
            <div class="row">
                <div class="item">
					<div class="single-feature" style="margin-top: 50px; pointer-events: none;">
                            <h4 style="text-align: center;">Ιστορία</h4>
                            <p style="text-align: center;">Η Ανώνυμη Εταιρεία με την επωνυμία «ΟΡΓΑΝΙΣΜΟΣ ΑΣΤΙΚΩΝ ΣΥΓΚΟΙΝΩΝΙΩΝ ΑΘΗΝΩΝ» και τον διακριτικό τίτλο «Ο.Α.Σ.Α. Α.Ε.»
                                 είναι δημόσια επιχείρηση κοινωφελούς χαρακτήρα που ιδρύθηκε ως νομικό πρόσωπο ιδιωτικού δικαίου με τον ν.2175/93 (Α΄211) και υπόκειται νομοθετικά στις διατάξεις των ν. 3920/2011 (Α’ 33), ν. 3429/2005 (Α’ 314),
                                ν. 4389/2016 (Α’ 94) και ν. 4548/2018 (Α’ 104), όπως ισχύουν.</p>
					</div> 
				</div>
            </div>

            <div class="row">
                <div class="item">
					<div class="single-feature" style="margin-top: 50px; pointer-events: none;">
                            <h4 style="text-align: center;">Διοικητικό Συμβούλιο</h4>
                            <p style="text-align: center;">Το Διοικητικό Συμβούλιο είναι το Ανώτατο Διοικητικό και το κατ’ εξοχήν Αποφασιστικό Οργανο του Οργανισμού και είναι αρμόδιο να αποφασίζει,
                                 να εποπτεύει και να ασκεί έλεγχο σε κάθε θέμα που αφορά στην οργάνωση, στη διοίκηση, στη λειτουργία, στη διαχείριση της περιουσίας και γενικά στη δραστηριότητα και στην επιδίωξη των σκοπών του Οργανισμού.</p>
					</div> 
				</div>
            </div>

            <div class="row">
                <div class="item">
					<div class="single-feature" style="margin-top: 50px; pointer-events: none;">
                            <h4 style="text-align: center;">Περιοχή Εξυπηρέτησης</h4>
                            <p style="text-align: center;">Η σημερινή Περιοχή Εξυπηρέτησης των Αστικών Συγκοινωνιών έχει καθορισθεί δια νόμου και δεν μπορεί να μεταβληθεί χωρίς αντίστοιχη νομοθετική ρύθμιση.
                                Η περιοχή που εξυπηρετείται σήμερα από αστική συγκοινωνία εκτείνεται Δυτικά μέχρι την Ελευσίνα, Μάνδρα και Μαγούλα (Θριάσιο Πεδίο). Ανατολικά μέχρι την Πεντέλη, την Παλλήνη, τα Σπάτα, τη Λούτσα και το Κορωπί (περιοχή Μεσογείων).
                                Βόρεια μέχρι τη Φυλή, τη Πάρνηθα, το Κρυονέρι, το φράγμα της Λίμνης του Μαραθώνα, το Διόνυσο, τη Σταμάτα και τη Νέα και την Παλαιά Πεντέλη. Νότια μέχρι τη θάλασσα και νοτιοανατολικά μέχρι και την Σαρωνίδα. Η περιοχή αυτή περιλαμβάνει ένα σύνολο 84 δήμων και κοινοτήτων/οικισμών.</p>
                                <p>Σημ.*:Με την εφαρμογή του N.3852/10, ΦΕΚ 87/τ .Α'/2010 «Καλλικράτης» οι 84 υφιστάμενες Τοπικές Αυτοδιοικήσεις συνενώνονται σε 52 Δήμους. (Ημερομηνία Εφαρμογής: 1/1/2011)</p>
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