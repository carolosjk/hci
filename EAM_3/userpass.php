<?php
    session_start();
    if ( isset( $_SESSION['user_id']))
    {
        header('Location: userProfile.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>ΟΑΣΑ Είσοδος/Εγγραφή</title>  
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
                        <li><a href="contact.php">Επικοινωνία</a></li>
                        <li class="search-option">
                            <button class="search tran3s dropdown-toggle" id="searchDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search" aria-hidden="true"></i></button>
                            <form action="#" class="p-color-bg dropdown-menu tran3s" aria-labelledby="searchDropdown">
                                <input type="text" placeholder="Αναζήτηση...">
                                <button class="p-color-bg"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                    </li> 
                    </ul>
                </div>
                <!--end of NAV-BAR-->
            </div>
        </nav>
    </header>
    <!--end of HEADER-->
	
    <!-- SECTION -->
	<div id="support" class="section wb">
        <div class="container" style="padding-top: 5%;">
            <div class="row">
            <?php
                if (isset($_GET['error'])) 
                {
                    if ($_GET['error'] == 'invalidcredentials') 
                        { echo "</br><div class='section-title text-center'> <h4><b>Ανεπιτυχής είσοδος! Δοκιμάστε ξανά.</b></h4></br>"; }
                    else if ($_GET['error'] == 'emailinuse')  
                        { echo "</br><div class='section-title text-center'> <h4><b>Ανεπιτυχής εγγραφή! Το email που εισήχθει χρησιμοποιείται ήδη.</b></h4></br>"; }
                }
            ?>
                <!-- in order to center nav-pills  -->
                <div class="col-md-4 wow hidden-xs hidden-sm"></div>

                <div class="col-md-4 wow hidden-xs hidden-sm">

                <ul class="nav nav-pills" id="mynav" style="position: center;">
                    <li class="active"><a data-toggle="pill" href="#login">Είσοδος</a></li>
                    <li><a data-toggle="pill" href="#signin">Εγγραφή</a></li>
                </ul>
    
                <div class="tab-content">
                    <div id="login" class="tab-pane fade in active">
                        <div class="contact_form" style="margin-bottom:50px;">
                            <form id="login-form" method="post" action="authen_login.php">
                                <input type="email" style="margin-bottom: 5px;" name="user_id" class="username form-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required oninvalid="setCustomValidity('Άδειο πεδίο ή μη έγκυρο email! Προσθέστε έγκυρο email.')" oninput="setCustomValidity('')"/>
                                <a href="" style="color: #00599C; float:right; font-size:14px;"> Ξέχασα email</a>
                                </br>
                                <input type="password" style="margin-bottom: 5px;" name="user_pass" class="password form-control" placeholder="Συνθηματικό" pattern=".{6,}"  required oninvalid="setCustomValidity('Άδειο πεδίο ή συνθηματικό με λιγότερο από 6 χαρακτήρες! Προσθέστε έγκυρο συνθηματικό.')" oninput="setCustomValidity('')"/>
                                <a href="" style="color: #00599C; float:right; font-size:14px;"> Ξέχασα συνθηματικό</a>
                                </br>
                                <button id="submit" class="btn login" type="submit" value="SEND" style="background-color:#00599C;">Είσοδος</button>
                            </form>
                        </div>
                    </div>
    
                    <div id="signin" class="tab-pane fade">
                        <div class="contact_form" style="margin-bottom:50px;">
                            <form id="register-form" method="post" action="register.php">
                                <input type="text" name="username" class="username form-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required oninvalid="setCustomValidity('Άδειο πεδίο ή μη έγκυρο email! Προσθέστε έγκυρο email.')" oninput="setCustomValidity('')"/>
                                <input type="password" name="password1" class="password form-control" placeholder="Συνθηματικό" pattern=".{6,}" required oninvalid="setCustomValidity('Άδειο πεδίο ή συνθηματικό με λιγότερο από 6 χαρακτήρες! Προσθέστε έγκυρο συνθηματικό.')" oninput="setCustomValidity('')"/>
                                <input type="password" name="password2" class="password form-control" placeholder="Επανάληψη Συνθηματικού" pattern=".{6,}" required oninvalid="setCustomValidity('Άδειο πεδίο ή συνθηματικό με λιγότερο από 6 χαρακτήρες! Επανάβετε το έγκυρο συνθηματικό.')" oninput="setCustomValidity('')"/>
                                <!-- !! confirm password here, in a way gamo to spiti toy rather than in register.php -->
                                
                                <!-- onkeyup="check(this); in input tag"
                                <script>
                                   var check = function() {
                                        if (document.getElementById('password1').value ==
                                            document.getElementById('password2').value) {
                                            document.getElementById('message').style.color = 'green';
                                            document.getElementById('message').innerHTML = 'matching';
                                        } else {
                                            document.getElementById('message').style.color = 'red';
                                            document.getElementById('message').innerHTML = 'not matching';
                                        }
                                    }
                                </script> -->
                                <input type="text" name="name" class="username form-control" placeholder="Όνομα" required oninvalid="setCustomValidity('Άδειο πεδίο! Προσθέστε όνομα.')" oninput="setCustomValidity('')"/>
                                <input type="text" name="surname" class="username form-control" placeholder="Επώνυμο" required oninvalid="setCustomValidity('Άδειο πεδίο! Προσθέστε επώνυμο.')" oninput="setCustomValidity('')"/>
                                <input type="text" name="address" class="username form-control" placeholder="Διεύθυνση" required oninvalid="setCustomValidity('Άδειο πεδίο! Προσθέστε διεύθυνση.')" oninput="setCustomValidity('')"/>
                                <button id="submit" class="btn login" type="submit" value="SEND" style="background-color:#00599C; margin-right:65px;">Εγγραφή</button>
                                <button id="reset" class="btn login" type="reset" style="background-color:#00599C;">Εκκαθάριση</button>
                            </form>
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