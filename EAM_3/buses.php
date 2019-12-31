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
    <title>ΟΑΣΑ Λεωφορεία</title>  
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.1/moment-with-locales.js"></script>
    <script src="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/d004434a5ff76e7b97c8b07c01f34ca69e635d97/src/js/bootstrap-datetimepicker.js"></script>

    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/d004434a5ff76e7b97c8b07c01f34ca69e635d97/build/css/bootstrap-datetimepicker.css" rel="stylesheet">

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
                        <li><a class="active" href="index.php">Αρχική</a></li>
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
					<h2>Λεωφορεία</h2>
				</div>
			</div>
		</div>
    </div>

    <!--SECOND SECTION-->
	<div class="about-box">
		<div class="container">
                <!-- Breadcrumbs -->
                <nav id="breadcrumbs">
                    <ul>
                        <li><a href="index.php"><i class="fa fa-home global-radius fa-lg"></i></a></li>
                        <li>Λεωφορεία</li>
                    </ul>
                </nav>

            <div class="row">
                <div class="col-md-4 wow hidden-xs hidden-sm">

                    <ul class="nav nav-pills" id="mynav">
                        <li class="active"><a data-toggle="pill" href="#lines">Γραμμές</a></li>
                        <li><a data-toggle="pill" href="#stops">Στάσεις</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="lines" class="tab-pane fade in active">
                            <div class="contact_form">
                                <h2>Πληροφορίες Γραμμής</h2>
                                <form id="contactform1" class="row" name="contactform" method="post">
                                    <fieldset class="row-fluid">
                                        <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                            <br/><h4>Επιλέξτε γραμμή:</h4>
                                            <select name="select_bus" id="select_bus" class="selectpicker form-control" data-style="btn-white">
                                            <!--<input type="text" name="line" id="line" class="form-control" style="margin-top:5px;" placeholder="">-->
                                                <?php  

                                                require('db_connect.php');
                                                $sql = mysqli_query($connection, "SELECT * FROM `buses`");
                                                while ($row = $sql->fetch_assoc()){
                                                    echo "<option value=\"bus1\">" . $row['id'] . " : " . $row['start'] . " - " . $row['end'] . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                            <h4>ή διεύθυνση:</h4>
                                            <input type="text" name="address1" id="address1" class="form-control" style="margin-top:5px;" placeholder="">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-lg-offset-8 text-center">
                                            <input type="button" value=">>" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block" onclick="selectedLine()">

                                            <script>
                                                function selectedLine() {
                                                    var selected = $('#select_bus option:selected').text();
                                                    var selectedNum = selected.split(' : ')[0];
                                                    window.location.hash = 'lineDetails_'+selectedNum;
                                                    $('.item').empty();
                                                    //have line info slide in???
                                                }
                                            </script>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>

                        <div id="stops" class="tab-pane fade">
                            <div class="contact_form">
                                <h2>Πληροφορίες Στάσης</h2>
                                <form id="contactform1" class="row" name="contactform" method="post">
                                    <fieldset class="row-fluid">
                                        <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                            <br/><h4>Επιλέξτε στάση:</h4>
                                            <select name="select_station" id="select_station" class="selectpicker form-control" data-style="btn-white">
                                                <?php  

                                                require('db_connect.php');
                                                $sql = mysqli_query($connection, "SELECT * FROM `stations`");
                                                while ($row = $sql->fetch_assoc()){
                                                    echo "<option value=\"stop1\">" . $row['station'] . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                            <h4>ή διεύθυνση:</h4>
                                            <input type="text" name="address2" id="address2" class="form-control" style="margin-top:5px;" placeholder="">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-lg-offset-8 text-center">
                                            <button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">>></button>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>

                <div class="col-md-8">
					<div class="item" id="item1">
                        <div class="single-feature" style="pointer-events: none;">
                            <h1 style="text-align: left;"><i class="fa fa-question-circle"></i> Οδηγίες</h1>
                            <h5 style="text-align: left;">Για πληροφορίες σχετικά με τον προγραμματισμό, χρησιμοποιήστε το εργαλείο <strong>"Πληροφορίες Γραμμής"</strong>.</h5>
                            <h5 style="text-align: left;">Για πληροφορίες σχετικά με αφίξεις, χρησιμοποιήστε το εργαλείο <strong>"Πληροφορίες Στάσης"</strong>.</h5>
                        </div>
                    </div>

					<div class="item" id="item2">
                        <div class="single-feature" style="margin-top:50px;">
                            <h1 style="text-align: left;"><i class="fa fa-info-circle"></i><a href="contact.php"> Στοιχεία επικοινωνίας</a></h1>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--END OF SECOND SECTION-->

    <!--FOOTER-->
    <?php include 'footer.php'; ?>

</body>
</html>