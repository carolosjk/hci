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
    <title>ΟΑΣΑ Προσβασιμότητα</title>  
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
					<h2>Προσβασιμότητα</h2>
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
                        <li>Προσβασιμότητα</li>
                    </ul>
                </nav>
            
				<div class="item">
					<div class="single-feature" style="margin-top: 50px;">
                        <div class="icon"><i class="fa fa-universal-access fa-4x" style="height: 20%; width: 20%; float:left; padding-bottom: 30px;"></i>
                            <h4 style="text-align: left;"><a href="acs_instrc.php">Οδηγίες Πρόσβασης</a></h4 style="text-align: left;">
                            <p style="text-align: left;"> Οι οδηγίες απευθύνονται σε Αμεα, ηλικιωμένους και άτομα με κινητικά προβλήματα
                            και αφορούν την πρόσβαση αυτών σε στάσεις λεωφορείων/τρόλει και σε σταθμούς μετρό.</p>
                        </div>
					</div> 
				</div>
			</div>
			<div class="row">
                <div class="single-feature" style="margin-top: 50px;">
                    <div class="icon"><i class="fa fa-info-circle fa-4x" style="height: 20%; width: 20%; float:left; padding-bottom: 30px;"></i>
                        <h4 style="text-align: left;"><a href="acs_points.php">Προσβάσιμα Σημεία</a></h4 style="text-align: left;">
                        <p style="text-align: left;"> Πληροφορίες για Αμεα, ηλικιωμένους και άτομα με κινητικά προβλήματα σχετικά με ποιες στάσεις λεωφορείων/τρόλει
                             και ποιοι σταθμοί μετρό μπορούν να χρησιμοποιήσουν για να διευκολυνθούν κατά την μετακίνησή τους με τα μέσα.</p>
                    </div>
                </div> 
            </div>	
            <div class="row">
                <div class="single-feature" style="margin-top: 50px;">
                    <div class="icon"><i class="fa fa-info fa-4x" style="height: 20%; width: 20%; float:left;"></i>
                        <h4 style="text-align: left;"><a href="acs_news.php">Ανακοινώσεις</a></h4 style="text-align: left;">
                        <p style="text-align: left;"> Ενημερωθείτε για προβλήματα στα διάφορα προσβάσιμα σημεία, στάσεις λεωφορείων/τρόλει και σταθμών μετρό.</p>
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