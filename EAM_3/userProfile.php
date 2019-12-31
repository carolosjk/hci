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
    <title>ΟΑΣΑ Προφίλ</title>  
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
    <?php include 'utils/uheader.php'; ?>

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
        
            <div id="userProf_DIV_1" style="padding-top: 20px;">
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
                                            <a href="changeMail.php" id="userProf_A_14">Αλλαγή</a>
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
                                            <a href="changePassword.php" id="userProf_A_20">Αλλαγή</a>
                                            <h4 id="userProf_H4_21">
                                                <strong id="userProf_STRONG_22">Συνθηματικό</strong>
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
                                            <a href="php_utils/deleteAccount.php" id="userProf_A_31">Διαγραφή Λογαριασμού</a>
                                        </li>
                                    </ul>
                                    <ul id="userProf_UL_29">
                                        <li id="userProf_LI_30">
                                            <a href="php_utils/logout.php" id="userProf_A_31">Αποσύνδεση</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>    
        </div>
    </div>

    
    <!-- end of SECTION -->

    <!--FOOTER-->
    <?php include 'utils/footer.php'; ?>

</body>
</html>