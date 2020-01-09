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
    <title>ΟΑΣΑ</title>  
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
    <!DOCTYPE html>
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
                    <a class="navbar-brand"><img src="images/logos/oasa_logo2.png" alt="image"></a>
                </div>
                <!--end of NAV HEADER-->
            </div>
        </nav>
    </header>
	
    <!-- SECTION -->
	<div id="support" class="section wb" style="padding-top:100px;">
        <div class="container">
            <div class="row">
                <div class="" style="margin-top:5%;display:center;margin-left:30%;margin-right:30%;">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactform" class="row" action="php_utils/purchase_tickets.php" name="contactform" method="post">
                            <!-- <fieldset class="row-fluid">
                            <p style="font-size:13px; margin-left:5%;"><b> Παρακαλώ εισάγετε στοιχεία χρέωσης και αποστολής εισιτηρίων και απόδειξης πριν προβείτε σε οποιαδήποτε ενέργεια.</b></p>
                            </fieldset> -->
                            <fieldset class="row-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" <?php if (isset($_SESSION['user_id'])) { echo "style='display:none;'"; } ?>>
                                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Επώνυμο" required oninvalid="setCustomValidity('Άδειο πεδίο. Χρειάζεται να εισαχθεί επώνυμο!')" oninput="setCustomValidity('')">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" <?php if (isset($_SESSION['user_id'])) { echo "style='display:none;'"; } ?>>
                                    <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Όνομα" required oninvalid="setCustomValidity('Άδειο πεδίο. Χρειάζεται να εισαχθεί όνομα!')" oninput="setCustomValidity('')">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" <?php if (isset($_SESSION['user_id'])) { echo "style='display:none;'"; } ?>>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="example@example.com/gr" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required oninvalid="setCustomValidity('Άδειο πεδίο ή μη έγκυρη διεύθυνση email! Προσθέστε έγκυρη διεύθυνση email.')" oninput="setCustomValidity('')">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                    <select id='tkt' name="end" data-live-search="true" title="Ενέργεια" data-live-search-placeholder="" class="form-control" onchange="admSelectCheck(this);">
                                        <option selected disabled hidden value=1>Επιθυμητή ενέργεια</option>
                                        <option value="αγορά">Αγορά</option>
                                        <option id="admOption" value="φόρτιση">Φόρτιση</option>
                                    </select>
                                </div>
                                <div id="admDivCheck" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="display:none;">
                                    <input type="tel" style="margin-top:0px;" name="code" id="code"  pattern="[0-9]{12}" class="form-control" placeholder="Αριθμός Εισιτηρίου" required oninvalid="setCustomValidity('Άδειο πεδίο ή μη έγκυρος αριθμός εισιτηρίου! Προσθέστε έγκυρο δωδεκαψήφιο αριθμό εισιτηρίου.')" oninput="setCustomValidity('')">
                                </div>
                                <script> 
                                   function admSelectCheck(nameSelect)
                                    {
                                        if(nameSelect)
                                        {
                                            admOptionValue = document.getElementById("admOption").value;
                                            if(admOptionValue == nameSelect.value)
                                                { document.getElementById("admDivCheck").style.display = "block"; }
                                            else
                                                { document.getElementById("admDivCheck").style.display = "none"; }
                                        }
                                        else
                                            { document.getElementById("admDivCheck").style.display = "none"; }
                                    }       
                                </script>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="padding-bottom:5px;">
                                    <select class="form-control" id="selectC">
                                        <option selected disabled hidden value=1>Είδος Εισιτηρίου</option>    
                                        <option id="candy1">Ενιαίο Εισιτήριο</option>
                                        <option id="candy2">Πολλαπλό Εισιτήριο</option>
                                        <option id="candy3">Γραμμών Αεροδρομίου</option>
                                        <option id="candy4">Χρονικού Διαστήματος</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="float:left;">
                                    <div id="noCandy1" style="display:none;">
                                    <select class="form-control" id="selectC1" style="font-size:14px;margin-top:0px;">
                                        <option selected disabled hidden value=1>Επιλέξτε...</option>    
                                        <?php  
                                            require('php_utils/db_connect.php');
                                            $sql = mysqli_query($connection, "SELECT * FROM `tickets`");
                                            while ($row = $sql->fetch_assoc()){
                                                echo "<option value=". $row['ΕΝΙΑΙΑ ΕΙΣΙΤΗΡΙΑ'] .">" . $row['ΕΝΙΑΙΑ ΕΙΣΙΤΗΡΙΑ'] . "</option>";
                                            }
                                        ?>
                                    </select>
                                    </div>
                                    <div id="noCandy2" style="display:none;">
                                    <select class="form-control" id="selectC2" style="font-size:14px;margin-top:0px;">
                                        <option selected disabled hidden value=1>Επιλέξτε...</option>    
                                        <?php  
                                            require('php_utils/db_connect.php');
                                            $sql = mysqli_query($connection, "SELECT * FROM `new_ticket_prices`");
                                            while ($row = $sql->fetch_assoc()){
                                                echo "<option value=". $row['ΠΡΟΙΟΝ'] .">" . $row['ΠΡΟΙΟΝ'] . "</option>";
                                            }
                                        ?>
                                    </select>
                                    </div>
                                    <div id="noCandy3" style="display:none;">
                                    <select class="form-control" id="selectC3" style="font-size:14px;margin-top:0px;">
                                        <option selected disabled hidden value=1>Επιλέξτε...</option>    
                                        <?php  
                                            require('php_utils/db_connect.php');
                                            $sql = mysqli_query($connection, "SELECT * FROM `tickets_airport`");
                                            while ($row = $sql->fetch_assoc()){
                                                echo "<option value=". $row['ΕΙΣΙΤΗΡΙΑ ΓΡΑΜΜΩΝ ΑΕΡΟΔΡΟΜΙΟΥ'] .">" . $row['ΕΙΣΙΤΗΡΙΑ ΓΡΑΜΜΩΝ ΑΕΡΟΔΡΟΜΙΟΥ'] . "</option>";
                                            }
                                        ?>
                                    </select>
                                    </div>
                                    <div id="noCandy4" style="display:none;">
                                    <select class="form-control" id="selectC4" style="font-size:14px;margin-top:0px;">
                                        <option selected disabled hidden value=1>Επιλέξτε...</option>   
                                        <option value="30 ΗΜΕΡΩΝ">30 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ</option>
                                        <option value="30 ΗΜΕΡΩΝ_Α">30 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ ΑΠΟ ΚΑΙ ΠΡΟΣ ΤΟ ΑΕΡΟΔΡΟΜΙΟ</option>
                                        <option value="90 ΗΜΕΡΩΝ">90 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ</option>
                                        <option value="90 ΗΜΕΡΩΝ_Α">30 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ ΑΠΟ ΚΑΙ ΠΡΟΣ ΤΟ ΑΕΡΟΔΡΟΜΙΟ</option>
                                        <option value="180 ΗΜΕΡΩΝ">180 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ</option>
                                        <option value="180 ΗΜΕΡΩΝ_Α">180 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ ΑΠΟ ΚΑΙ ΠΡΟΣ ΤΟ ΑΕΡΟΔΡΟΜΙΟ</option>
                                        <option value="365 ΗΜΕΡΩΝ">365 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ</option>
                                        <option value="180 ΗΜΕΡΩΝ_Α">30 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ ΑΠΟ ΚΑΙ ΠΡΟΣ ΤΟ ΑΕΡΟΔΡΟΜΙΟ</option>
                                    </select>
                                    </div>
                                    <script> 
                                        // Function to add event listener to table
                                        var el = document.getElementById("selectC");
                                        el.addEventListener("change", function() {
                                        var elems = document.querySelectorAll('#noCandy1,#noCandy2,#noCandy3,#noCandy4,#q')
                                        for (var i = 0; i < elems.length; i++) {
                                            elems[i].style.display = 'none'
                                        }
                                        if (this.selectedIndex === 1) {
                                            document.querySelector('#noCandy1').style.display = 'block';
                                            document.querySelector('#q').style.display = 'block';
                                        } else if (this.selectedIndex === 2) {
                                            document.querySelector('#noCandy2').style.display = 'block';
                                            document.querySelector('#q').style.display = 'block';
                                        }else if (this.selectedIndex === 3) {
                                            document.querySelector('#noCandy3').style.display = 'block';
                                            document.querySelector('#q').style.display = 'block';
                                        }
                                        else if (this.selectedIndex === 4) {
                                            document.querySelector('#noCandy4').style.display = 'block';
                                            document.querySelector('#q').style.display = 'block';
                                        }
                                        }, false);
                                    </script>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="q" style="display:none;" onchage>
                                    <input type='text' style="float:center;width: 60%;margin-left:16px; margin-top:10px; text-align:center;" name='qty' id='qty' placeholder="Ποσότητα"/>
                                    <input type='button' style="float:right;margin-top:10px;" name='add' onclick='javascript:  if (document.getElementById("qty").value < 12) document.getElementById("qty").value++;' value='+'/>
                                    <input type='button' style="float:left;margin-top:10px;" name='subtract' onclick='javascript: if (document.getElementById("qty").value > 0) document.getElementById("qty").value--;' value='-'/>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="padding-bottom:5px;">
                                    
                                </div>
                            </fieldset> 
                            <fieldset class="row-fluid">     
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block" style="font-size:14px;padding-left:20px; margin-top:10px;">Ολοκλήρωση!</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of SECTION -->

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