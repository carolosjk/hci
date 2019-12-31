<?php
    session_start();
    if (!isset( $_SESSION['user_id']))
    {
        header('Location: userpass.php');
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

    <div class="all-title-box">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Προφίλ Χρήστη</h2>
				</div>
			</div>
		</div>
	</div>
    
    <!-- SECTION -->
	<div id="userProfile" class="section wb">
        <div class="container">
            <!-- Breadcrumbs -->
			<nav id="breadcrumbs">
				<ul>
					<li><a href="index.php"><i class="fa fa-home global-radius fa-lg"></i></a></li>
					<li>Προφίλ Χρήστη</li>
				</ul>
            </nav>
        </div>
    <div id="userProf_DIV_1">
	<section id="userProf_SECTION_2">
		<div id="userProf_DIV_3">
			<div id="userProf_DIV_4">
				<div id="userProf_DIV_5">
					<ul id="userProf_UL_6">
						<li id="userProf_LI_7">
							<div id="userProf_DIV_8">
								<h4 id="userProf_H4_9">
									<strong id="userProf_STRONG_10">Όνομα</strong>
                                </h4><br id="userProf_BR_11" /> 
                                    <?php
                                        echo $_SESSION["name"];
                                    ?>
							</div>
                        </li>
                        <li id="userProf_LI_7">
							<div id="userProf_DIV_8">
								<h4 id="userProf_H4_9">
									<strong id="userProf_STRONG_10">Επώνυμο</strong>
                                </h4><br id="userProf_BR_11" /> 
                                    <?php
                                        echo $_SESSION["surname"];
                                    ?>
							</div>
                        </li>
                        <li id="userProf_LI_7">
							<div id="userProf_DIV_8">
								<h4 id="userProf_H4_9">
									<strong id="userProf_STRONG_10">Διεύθυνση</strong>
                                </h4><br id="userProf_BR_11" /> 
                                    <?php
                                        echo $_SESSION["address"];
                                    ?>
							</div>
						</li>
						<li id="userProf_LI_12">
							<div id="userProf_DIV_13">
								 <a href="https://www.insomnia.gr/settings/email/" id="userProf_A_14">Αλλαγή</a>
								<h4 id="userProf_H4_15">
									<strong id="userProf_STRONG_16">Διεύθυνση email </strong>
                                </h4><br id="userProf_BR_17" /> 
                                <?php
                                    echo $_SESSION["user_id"];
                                ?>
							</div>
						</li>
						<li id="userProf_LI_18">
							<div id="userProf_DIV_19">
								 <a href="https://www.insomnia.gr/settings/password/" id="userProf_A_20">Αλλαγή</a>
								<h4 id="userProf_H4_21">
									<strong id="userProf_STRONG_22">Password</strong>
								</h4><br id="userProf_BR_23" /> ********
							</div>
						</li>
					</ul>
				</div>
				<div id="userProf_DIV_24">
					<div id="userProf_DIV_25">
						<h3 id="userProf_H3_26">
							Άλλες ρυθμίσεις
						</h3><br id="userProf_BR_27" /><br id="userProf_BR_28" />
						<ul id="userProf_UL_29">
							<li id="userProf_LI_30">
								<a href="https://www.insomnia.gr/settings/_deletemyaccount/" id="userProf_A_31">Διαγραφή Λογαριασμού</a>
							</li>
                        </ul>
                        <ul id="userProf_UL_29">
							<li id="userProf_LI_30">
								<a href="logout.php" id="userProf_A_31">Αποσύνδεση</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

    
    <!-- end of SECTION -->

    <!--FOOTER-->
    <?php include 'footer.php'; ?>

</body>
</html>