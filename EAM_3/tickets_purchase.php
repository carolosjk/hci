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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

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
                <div class="" style="margin-top:10%;margin-bottom:2%;display:center;margin-left:30%;margin-right:30%;">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactform" class="row" action="php_utils/purchase_tickets.php" name="contactform" method="post">
                            <fieldset class="row-fluid">    
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                    <select id='tkt' name="end" data-live-search="true" title="" data-live-search-placeholder="" class="form-control" onchange="admSelectCheck(this);" required oninvalid="setCustomValidity('Δεν έχει γίνει καμία επιλογή! Επιλέξτε μία ενέργεια.')" oninput="setCustomValidity('')">
                                        <option selected disabled hidden value="">Επιθυμητή ενέργεια</option>
                                        <option value="αγορά">Αγορά</option>
                                        <option id="admOption" value="φόρτιση">Φόρτιση</option>
                                    </select>
                                </div>
                                <div id="admDivCheck" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="display:none;">
                                    <input type="tel" style="margin-top:0px;" name="code" id="code"  pattern="[0-9]{12}" class="form-control" placeholder="Αριθμός Εισιτηρίου" required oninvalid="setCustomValidity('Άδειο πεδίο ή μη έγκυρος αριθμός εισιτηρίου! Προσθέστε έγκυρο 12ψήφιο αριθμό εισιτηρίου.')" oninput="setCustomValidity('')">
                                </div>
                                <script> 
                                   function admSelectCheck(nameSelect)
                                    {
                                        if(nameSelect)
                                        {
                                            admOptionValue = document.getElementById("admOption").value;
                                            if(admOptionValue == nameSelect.value)
                                            { 
                                                if (document.getElementById("tickets").style.display == "block")
                                                    { document.getElementById("tickets").style.display = "none"; } 
                                                document.getElementById("admDivCheck").style.display = "block"; 
                                                document.getElementById("tickets_red").style.display = "block"; 
                                            }
                                            else
                                            { 
                                                if (document.getElementById("tickets_red").style.display == "block")
                                                    { document.getElementById("tickets_red").style.display = "none"; } 
                                                document.getElementById("admDivCheck").style.display = "none"; 
                                                document.getElementById("tickets").style.display = "block"; 
                                            }
                                        }
                                        else
                                        { 
                                            document.getElementById("admDivCheck").style.display = "none"; 
                                            document.getElementById("tickets_red").style.display = "none"; 
                                            document.getElementById("tickets").style.display = "none"; 
                                        }
                                    }       
                                </script>

                            </fieldset>
                            <!-- dont show tickets of reduced value which come only with charge of ticket and not purchase of one -->
                            <fieldset class="row-fluid" id="tickets" style="display:none;">    
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="padding-bottom:5px;">
                                    <select class="form-control" id="selectC" required oninvalid="setCustomValidity('Δεν έχει γίνει καμία επιλογή! Επιλέξτε ένα τύπο εισιτηρίου.')" oninput="setCustomValidity('')">
                                        <option selected disabled hidden value="">Είδος Εισιτηρίου</option>    
                                        <option id="candy1">Ενιαίο Εισιτήριο</option>
                                        <option id="candy2">Πολλαπλό Εισιτήριο</option>
                                        <option id="candy3">Γραμμών Αεροδρομίου</option>
                                        <option id="candy4">Χρονικού Διαστήματος</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="float:left;">
                                    <div id="noCandy1" style="display:none;">
                                    <select class="form-control" id="selectC1" style="font-size:14px;margin-top:0px;" required oninvalid="setCustomValidity('Δεν έχει γίνει καμία επιλογή! Επιλέξτε ένα από τα προσφερόμενα εισιτήρια.')" oninput="setCustomValidity('')">
                                        <option selected disabled hidden value="">Επιλέξτε...</option>    
                                        <?php  
                                            require('php_utils/db_connect.php');
                                            $sql = mysqli_query($connection, "SELECT * FROM `tickets`");
                                            $c = 0;
                                            while ($row = $sql->fetch_assoc()){
                                               if ($c != 3) { echo "<option value=". $row['ΕΝΙΑΙΑ ΕΙΣΙΤΗΡΙΑ'] .">" . $row['ΕΝΙΑΙΑ ΕΙΣΙΤΗΡΙΑ'] . "</option>"; $c=$c+1;}
                                               else { $c=$c+1; }
                                            }
                                        ?>
                                    </select>
                                    </div>
                                    <div id="noCandy2" style="display:none;">
                                    <select class="form-control" id="selectC2" style="font-size:14px;margin-top:0px;" required oninvalid="setCustomValidity('Δεν έχει γίνει καμία επιλογή! Επιλέξτε ένα από τα προσφερόμενα εισιτήρια.')" oninput="setCustomValidity('')">
                                        <option selected disabled hidden value="">Επιλέξτε...</option>    
                                        <?php  
                                            require('php_utils/db_connect.php');
                                            $sql = mysqli_query($connection, "SELECT * FROM `new_ticket_prices`");
                                            $count = mysqli_num_rows($sql);
                                            $c = 0;
                                            while ($row = $sql->fetch_assoc()){
                                                if ($c % 2 == 0)
                                                {echo "<option value=". $row['ΠΡΟΙΟΝ'] .">" . $row['ΠΡΟΙΟΝ'] . "</option>"; $c=$c+1;}
                                                else { $c=$c+1; }
                                            }
                                        ?>
                                    </select>
                                    </div>
                                    <div id="noCandy3" style="display:none;">
                                    <select class="form-control" id="selectC3" style="font-size:14px;margin-top:0px;"  required oninvalid="setCustomValidity('Δεν έχει γίνει καμία επιλογή! Επιλέξτε ένα από τα προσφερόμενα εισιτήρια.')" oninput="setCustomValidity('')">
                                        <option selected disabled hidden value="">Επιλέξτε...</option>    
                                        <?php  
                                            require('php_utils/db_connect.php');
                                            $sql = mysqli_query($connection, "SELECT * FROM `tickets_airport`");
                                            while ($row = $sql->fetch_assoc()){
                                                if ($row['ΕΙΣΙΤΗΡΙΑ ΓΡΑΜΜΩΝ ΑΕΡΟΔΡΟΜΙΟΥ'] == "ΜΕΙΩΜΕΝΟ ΕΙΣΙΤΗΡΙΟ ΑΕΡΟΔΡΟΜΙΟΥ ΑΠΟ & ΠΡΟΣ ΤΟΥΣ ΣΤΑΘΜΟΥΣ ΠΑΛΛΗΝΗ - ΚΑΝΤΖΑ - ΚΟΡΩΠΙ ΜΕΤΡΟ" ||
                                                    $row['ΕΙΣΙΤΗΡΙΑ ΓΡΑΜΜΩΝ ΑΕΡΟΔΡΟΜΙΟΥ']  == "ΜΕΙΩΜΕΝΟ ΕΙΣΙΤΗΡΙΟ ΛΕΩΦΟΡΕΙΩΝ EXPRESS" || $row['ΕΙΣΙΤΗΡΙΑ ΓΡΑΜΜΩΝ ΑΕΡΟΔΡΟΜΙΟΥ'] == "ΜΕΙΩΜΕΝΟ ΕΙΣΙΤΗΡΙΟ ΜΕΤΡΟ") 
                                                    { continue; }
                                                else    
                                                    { echo "<option value=". $row['ΕΙΣΙΤΗΡΙΑ ΓΡΑΜΜΩΝ ΑΕΡΟΔΡΟΜΙΟΥ'] .">" . $row['ΕΙΣΙΤΗΡΙΑ ΓΡΑΜΜΩΝ ΑΕΡΟΔΡΟΜΙΟΥ'] . "</option>"; }
                                            }
                                        ?>
                                    </select>
                                    </div>
                                    <div id="noCandy4" style="display:none;">
                                    <select class="form-control" id="selectC4" style="font-size:14px;margin-top:0px;"  required oninvalid="setCustomValidity('Δεν έχει γίνει καμία επιλογή! Επιλέξτε ένα από τα προσφερόμενα εισιτήρια.')" oninput="setCustomValidity('')">
                                        <option selected disabled hidden value="">Επιλέξτε...</option>   
                                        <option value="30">30 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ</option>
                                        <option value="31">30 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ ΑΠΟ ΚΑΙ ΠΡΟΣ ΤΟ ΑΕΡΟΔΡΟΜΙΟ</option>
                                        <option value="90">90 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ</option>
                                        <option value="91">90 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ ΑΠΟ ΚΑΙ ΠΡΟΣ ΤΟ ΑΕΡΟΔΡΟΜΙΟ</option>
                                        <option value="180">180 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ</option>
                                        <option value="181">180 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ ΑΠΟ ΚΑΙ ΠΡΟΣ ΤΟ ΑΕΡΟΔΡΟΜΙΟ</option>
                                        <option value="365">365 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ</option>
                                        <option value="366">365 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ ΑΠΟ ΚΑΙ ΠΡΟΣ ΤΟ ΑΕΡΟΔΡΟΜΙΟ</option>
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
                                    <input type='number' style="float:center;width: 60%;margin-left:16px; margin-top:10px; text-align:center;" onKeyDown="return false" min="1" step="1" max="12" name='qty' id='qty' placeholder="Ποσότητα" required/>
                                    <input type='button' style="float:right;margin-top:10px;" name='add' onclick='javascript:  if (document.getElementById("qty").value < 12) document.getElementById("qty").value++;' value='+'/>
                                    <input type='button' style="float:left;margin-top:10px;" name='subtract' onclick='javascript: if (document.getElementById("qty").value > 1) document.getElementById("qty").value--;' value='-'/>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="padding-bottom:5px;">
                                    
                                </div>
                            </fieldset> 
                            <fieldset class="row-fluid" id="tickets_red" style="display:none;">    
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="padding-bottom:5px;">
                                    <select class="form-control" id="sselectC" required oninvalid="setCustomValidity('Δεν έχει γίνει καμία επιλογή! Επιλέξτε ένα τύπο εισιτηρίου.')" oninput="setCustomValidity('')">
                                        <option selected disabled hidden value="">Είδος Εισιτηρίου</option>    
                                        <option id="ccandy1">Ενιαίο Εισιτήριο</option>
                                        <option id="ccandy2">Πολλαπλό Εισιτήριο</option>
                                        <option id="ccandy3">Γραμμών Αεροδρομίου</option>
                                        <option id="ccandy4">Χρονικού Διαστήματος</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="float:left;">
                                    <div id="nnoCandy1" style="display:none;">
                                    <select class="form-control" id="sselectC1" style="font-size:14px;margin-top:0px;" required oninvalid="setCustomValidity('Δεν έχει γίνει καμία επιλογή! Επιλέξτε ένα από τα προσφερόμενα εισιτήρια.')" oninput="setCustomValidity('')">
                                        <option selected disabled hidden value="">Επιλέξτε...</option>    
                                        <?php  
                                            require('php_utils/db_connect.php');
                                            $sql = mysqli_query($connection, "SELECT * FROM `tickets`");
                                            while ($row = $sql->fetch_assoc()){
                                                echo "<option value=". $row['ΕΝΙΑΙΑ ΕΙΣΙΤΗΡΙΑ'] .">" . $row['ΕΝΙΑΙΑ ΕΙΣΙΤΗΡΙΑ'] . "</option>";
                                            }
                                        ?>
                                    </select>
                                    </div>
                                    <div id="nnoCandy2" style="display:none;">
                                    <select class="form-control" id="sselectC2" style="font-size:14px;margin-top:0px;" required oninvalid="setCustomValidity('Δεν έχει γίνει καμία επιλογή! Επιλέξτε ένα από τα προσφερόμενα εισιτήρια.')" oninput="setCustomValidity('')">
                                        <option selected disabled hidden value="">Επιλέξτε...</option>    
                                        <?php  
                                            require('php_utils/db_connect.php');
                                            $sql = mysqli_query($connection, "SELECT * FROM `new_ticket_prices`");
                                            while ($row = $sql->fetch_assoc()){
                                                echo "<option value=". $row['ΠΡΟΙΟΝ'] .">" . $row['ΠΡΟΙΟΝ'] . "</option>";
                                            }
                                        ?>
                                    </select>
                                    </div>
                                    <div id="nnoCandy3" style="display:none;">
                                    <select class="form-control" id="sselectC3" style="font-size:14px;margin-top:0px;"  required oninvalid="setCustomValidity('Δεν έχει γίνει καμία επιλογή! Επιλέξτε ένα από τα προσφερόμενα εισιτήρια.')" oninput="setCustomValidity('')">
                                        <option selected disabled hidden value="">Επιλέξτε...</option>    
                                        <?php  
                                            require('php_utils/db_connect.php');
                                            $sql = mysqli_query($connection, "SELECT * FROM `tickets_airport`");
                                            while ($row = $sql->fetch_assoc()){
                                                echo "<option value=". $row['ΕΙΣΙΤΗΡΙΑ ΓΡΑΜΜΩΝ ΑΕΡΟΔΡΟΜΙΟΥ'] .">" . $row['ΕΙΣΙΤΗΡΙΑ ΓΡΑΜΜΩΝ ΑΕΡΟΔΡΟΜΙΟΥ'] . "</option>";
                                            }
                                        ?>
                                    </select>
                                    </div>
                                    <div id="nnoCandy4" style="display:none;">
                                    <select class="form-control" id="sselectC4" style="font-size:14px;margin-top:0px;"  required oninvalid="setCustomValidity('Δεν έχει γίνει καμία επιλογή! Επιλέξτε ένα από τα προσφερόμενα εισιτήρια.')" oninput="setCustomValidity('')">
                                        <option selected disabled hidden value="">Επιλέξτε...</option>   
                                        <option value="30">30 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ</option>
                                        <option value="31">30 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ ΑΠΟ ΚΑΙ ΠΡΟΣ ΤΟ ΑΕΡΟΔΡΟΜΙΟ</option>
                                        <option value="90">90 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ</option>
                                        <option value="91">90 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ ΑΠΟ ΚΑΙ ΠΡΟΣ ΤΟ ΑΕΡΟΔΡΟΜΙΟ</option>
                                        <option value="180">180 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ</option>
                                        <option value="181">180 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ ΑΠΟ ΚΑΙ ΠΡΟΣ ΤΟ ΑΕΡΟΔΡΟΜΙΟ</option>
                                        <option value="365">365 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ</option>
                                        <option value="366">365 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ ΑΠΟ ΚΑΙ ΠΡΟΣ ΤΟ ΑΕΡΟΔΡΟΜΙΟ</option>
                                        <option value="300">ΜΕΙΩΜΕΝΟ 30 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ</option>
                                        <option value="301">ΜΕΙΩΜΕΝΟ 30 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ ΑΠΟ ΚΑΙ ΠΡΟΣ ΤΟ ΑΕΡΟΔΡΟΜΙΟ</option>
                                        <option value="900">ΜΕΙΩΜΕΝΟ 90 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ</option>
                                        <option value="901">ΜΕΙΩΜΕΝΟ 90 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ ΑΠΟ ΚΑΙ ΠΡΟΣ ΤΟ ΑΕΡΟΔΡΟΜΙΟ</option>
                                        <option value="1800">ΜΕΙΩΜΕΝΟ 180 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ</option>
                                        <option value="1801"> ΜΕΙΩΜΕΝΟ 180 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ ΑΠΟ ΚΑΙ ΠΡΟΣ ΤΟ ΑΕΡΟΔΡΟΜΙΟ</option>
                                        <option value="3650">ΜΕΙΩΜΕΝΟ 365 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ</option>
                                        <option value="3651">ΜΕΙΩΜΕΝΟ 365 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ ΑΠΟ ΚΑΙ ΠΡΟΣ ΤΟ ΑΕΡΟΔΡΟΜΙΟ</option> 
                                    </select>
                                    </div>
                                    <script> 
                                        // Function to add event listener to table
                                        var el = document.getElementById("sselectC");
                                        el.addEventListener("change", function() {
                                        var elems = document.querySelectorAll('#nnoCandy1,#nnoCandy2,#nnoCandy3,#nnoCandy4,#qq')
                                        for (var i = 0; i < elems.length; i++) {
                                            elems[i].style.display = 'none'
                                        }
                                        if (this.selectedIndex === 1) {
                                            document.querySelector('#nnoCandy1').style.display = 'block';
                                            document.querySelector('#qq').style.display = 'block';
                                        } else if (this.selectedIndex === 2) {
                                            document.querySelector('#nnoCandy2').style.display = 'block';
                                            document.querySelector('#qq').style.display = 'block';
                                        }else if (this.selectedIndex === 3) {
                                            document.querySelector('#nnoCandy3').style.display = 'block';
                                            document.querySelector('#qq').style.display = 'block';
                                        }
                                        else if (this.selectedIndex === 4) {
                                            document.querySelector('#nnoCandy4').style.display = 'block';
                                            document.querySelector('#qq').style.display = 'block';
                                        }
                                        }, false);
                                    </script>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="qq" style="display:none;" onchage>
                                <input id="alice" type="number" style="float:center;width: 75%;margin-left:15px; margin-top:12px; text-align:center;" onKeyDown="return false" min="1" step="1" max="12" name='qqty' id='qqty' placeholder="Ποσότητα" value="" required oninvalid="setCustomValidity('Δεν έχει γίνει καμία επιλογή! Επιλέξτε ποσότητα εισιτηρίων.')" oninput="setCustomValidity('')"/>
                                <script> 
                                    jQuery(function($) {

                                        $('#alice').on('input', function() {
                                            $('#mirror').show();
                                            document.getElementById("myamount").innerHTML = $('#alice').val();;
                                        });
                                    });
                                </script>
                                </div>
                            </fieldset>
                            <fieldset class="row-fluid" id="mirror" style="display:none;">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                    <p>Έχετε επιλέξει <span id="myamount"></span> εισιτήρια</p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Επώνυμο" required oninvalid="setCustomValidity('Άδειο πεδίο. Χρειάζεται να εισαχθεί επώνυμο!')" oninput="setCustomValidity('')">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Όνομα" required oninvalid="setCustomValidity('Άδειο πεδίο. Χρειάζεται να εισαχθεί όνομα!')" oninput="setCustomValidity('')">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="example@example.com/gr" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required oninvalid="setCustomValidity('Άδειο πεδίο ή μη έγκυρη διεύθυνση email! Προσθέστε έγκυρη διεύθυνση email.')" oninput="setCustomValidity('')">
                                </div>
                            </fieldset> 
                            <fieldset class="row-fluid">     
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <button type="submit" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block" style="font-size:14px;padding-left:20px; margin-top:10px;">Ολοκλήρωση!</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="accordion" id="accordion-tab-1" style="display:center;margin-left:30%;margin-right:30%;">
                    <div class="card">
                        <div class="card-header" id="accordion-tab-1-heading-2">
                            <h2 style="font-size: 70%;">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2">
                                    Χρειάζεστε βοήθεια;
                                </button>
                            </h2>
                        </div>
                        <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                            <div class="card-body">
                                <p>
                                    <b>-</b> Επιλέξτε την ενέργεια που επιθυμείτε να κάνετε, αγορά ή φόρτιση εισιτηρίων. Μπορεί να γίνει μόνο φόρτιση των εισιτηρίων μειωμένου κομίστρου και όχι αγορά.<br>   
                                    <b>-</b> Επιλέξτε είδος εισιτηρίου, ενα εκ των προσφερόμενων εισιτηρίων αυτού και την ποσότητα που επιθυμείτε. <br>
                                    <b>-</b> Με την ολοκλήρωση των παραπάνω βημάτων, έχετε εμφανείς εν τέλει τις λεπτομέρειες για την ενέργεια που επιθυμείτε να κάνετε, τύπος εισιτηρίου και την ποσότητα που επιλέξατε και την συνολική τιμή των επιλογών σας.<br>
                                    <b>-</b> Προκειμένου να ολοκληρωθεί επιτυχώς η διαδικασία χρειάζεται, εφόσον δεν είστε εγγεγραμμένος χρήστης, να εισάγετε τα στοιχεία απαραίτητα για την χρέωση και αποστολή απόδειξης των εισιτηρίων που αποκτήσατε. Aν επιθυμείτε μπορείτε να εγραφτείτε αργότερα. 
                                    Αν είστε ήδη εγγεγραμμένος, και είστε ήδη συνδεδεμένος δεν χρειάζεται να εισάγετε κάποιο στοιχείο, αλλά αν δεν είστε συνδεδεμένος έχετε την δυνατότητα να το κάνετε.<br>
                                    <b>-</b> Μετά την ολοκλήρωση θα λάβετε ενημερωτικό μήνυμα για την αγορά/φόρτιση που εκτελέσατε.
                                </p>
                            </div>
                        </div>
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