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
    <title>ΟΑΣΑ Οδηγίες Πρόσβασης</title>  
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
					<h2>Οδηγίες Πρόσβασης</h2>
				</div>
			</div>
		</div>
    </div>

    <!-- SECTION -->
    <div class="about-box">
        <div class="container ">
            <!-- Breadcrumbs -->
            <nav id="breadcrumbs">
                <ul>
                    <li><a href="index.php"><i class="fa fa-home global-radius fa-lg"></i></a></li>
                    <li><a href="accesibility.php">Προσβασιμότητα</a></li>
                    <li>Οδηγίες Πρόσβασης</li>
                </ul>
            </nav>

        </br>
        </br>
            <div class="section-title text-center">
                <h3>Αναλυτικά οδηγίες για τα διάφορα μέσα του ΟΑΣΑ</h3>
            </div>

            <div>
                <p style="text-align: center;">
                    Εάν η πρόσβαση προς τις ράμπες επιβίβασης-αποβίβασης των λεωφορείων ή τους σταθμούς εμποδίζονται από παράνομα παρκαρισμένα οχήματα ή έχετε οποιαδήποτε απορία, 
                    παρακαλώ ενημερώστε μας <a href="contact.php" style="color: #00599C;"> εδώ.</a>
                </p>
            </div>
        </br>
        </br>
            <div class="accordion" id="accordion-tab-1">
                <div class="card">
                    <div class="card-header" id="accordion-tab-1-heading-1">
                        <h2 style="font-size: 70%;">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1">
                                ΜΕΤΡΟ (Γραμμή 2, 3):
                            </button>
                        </h2>
                    </div>
                    <div class="collapse" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                        <div class="card-body">
                            <ul style="list-style-type:circle;">
                                <li><b>-</b> Πηγαίνεις στον πλησιέστερο σταθμό της οικίας σου ή της διαδρομής που επιθυμείς.</li>
                                <li><b>-</b> Από τις ράμπες των πεζοδρομίων προσεγγίζεις τον ανελκυστήρα του σταθμού.</li>
                                <li><b>-</b> Εισέρχεσαι στον ανελκυστήρα και κατεβαίνεις στις αποβάθρες των σταθμών. Όλοι οι ανελκυστήρες είναι πλήρως προσβάσιμοι και στην είσοδο και στην έξοδο τους. Εάν αντιμετωπίσεις πρόβλημα χρησιμοποίησε το κουδούνι κινδύνου.</li>
                                <li><b>-</b> Από τις αποβάθρες εισέρχεσαι στους συρμούς είτε μόνος είτε με την βοήθεια του συνοδού σου ή των υπευθύνων των σταθμών, οι οποίοι θα σου παράσχουν κάθε δυνατή βοήθεια, όταν θα τους ζητηθεί. Η επιβίβαση-αποβίβαση για τα αναπηρικά αμαξίδια γίνεται ευκολότερη στο πρώτο ή το τελευταίο βαγόνι, γιατί φέρουν ράμπα για το κενό που υπάρχει μεταξύ αποβάθρας και συρμού και σχετική σήμανση.</li>
                                <li><b>-</b> Εάν έχεις πρόβλημα όρασης ζήτησε βοήθεια από τον υπεύθυνο του σταθμού, ο οποίος θα σε βοηθήσει στην επιβίβαση και θα ενημερώσει τον υπεύθυνο του σταθμού που θα αποβιβασθείτε για να σε βοηθήσει.</li>
                              </ul>
                        </div>
                    </div>
                </div>
                <hr class="hr4">
                <div class="card">
                    <div class="card-header" id="accordion-tab-1-heading-2">
                        <h2 style="font-size: 70%;">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2">
                                ΗΛΕΚΤΡΙΚΟΣ ΣΙΔΗΡΟΔΡΟΜΟΣ (Γραμμή 1 του ΜΕΤΡΟ):
                            </button>
                        </h2>
                    </div>
                    <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                        <div class="card-body">
                            <ul>
                                <li><b>-</b> Ακολούθησε όλες τις παραπάνω οδηγίες, καρτέλα "ΜΕΤΡΟ (Γραμμή 2, 3)" γιατί όλοι οι σταθμοί του ΗΣΑΠ έχουν ανακαινισθεί για πλήρη πρόσβαση (Ράμπες, Ανελκυστήρες, Φύλακες κ.λ.π.).</li>
                                <li><b>-</b> Εισέρχεσαι στους συρμούς από την πρώτη πόρτα του πρώτου βαγονιού, όπου υπάρχει και σχετική σήμανση.</li>
                                <li><b>-</b> Στους σταθμούς Άγ. Νικολάου, Ομόνοιας, Μοναστηράκι καλέστε τους φύλακες να φέρουν την κινητή ράμπα και να σας βοηθήσουν, αφού την τοποθετήσουν, επειδή στους παραπάνω σταθμούς υπάρχει μεγάλο κενό μεταξύ αποβάθρας και συρμών. Υπάρχει σχετική σήμανση στα βαγόνια των συρμών και ηχητική ενημέρωση στους παραπάνω σταθμούς.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="hr4">
                <div class="card">
                    <div class="card-header" id="accordion-tab-1-heading-3">
                        <h2 style="font-size: 70%;">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-3" aria-expanded="false" aria-controls="accordion-tab-1-content-3">
                               ΛΕΩΦΟΡΕΙΑ/ΤΡΟΛΕΙ:
                            </button>
                        </h2>
                    </div>
                    <div class="collapse" id="accordion-tab-1-content-3" aria-labelledby="accordion-tab-1-heading-3" data-parent="#accordion-tab-1">
                        <div class="card-body">
                            <ul>
                                <li><b>-</b> Πλησιάζεις την κοντινότερη στάση της λεωφορειακής γραμμής/γραμμής τρόλει που χρησιμοποιείς μόνος ή με την βοήθεια συνοδού.</li>
                                <li><b>-</b> Να προτιμήσετε τις στάσεις με προεξοχές που έχουν τοποθετηθεί για εξυπηρέτηση των ατόμων με κινητικά προβλήματα, ηλικιωμένων και Αμεα.</li>
                                <li><b>-</b> Όταν πλησιάζει το λεωφορείο/τρόλει σου, ο οδηγός όταν σταματήσει είναι υποχρεωμένος να χρησιμοποιήσει την επιγονάτηση ή την ράμπα, εάν έχει το λεωφορείο/τρόλει. Σχεδόν όλα τα λεωφορεία/τρόλει έχουν επιγονάτηση, ενώ το 1/4 αυτών φέρει ράμπες.</li>
                                <li><b>-</b> Με την βοήθεια του συνοδού σου, των επιβατών ή του οδηγού επιβιβάζεσαι. Όλοι οι οδηγοί έχουν ενημερωθεί να παρέχουν κάθε βοήθεια.</li>              
                            </ul>    
                        </div>
                    </div>
                </div>
                <hr class="hr4">
            </div>
        </div>
    </div>
    <!-- end of SECTION -->

    <!--FOOTER-->
    <?php include 'footer.php'; ?>

</body>
</html>