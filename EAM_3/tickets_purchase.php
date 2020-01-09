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
                        <form id="contactform" class="row" action="php_utils/purchaseticketsForm.php" name="contactform" method="post">
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

                                        $('#mirror').hide();
                                        $('#mmirror').hide();
                                        var elems = document.querySelectorAll('#noCandy1,#noCandy2,#noCandy3,#noCandy4,#q')
                                        for (var i = 0; i < elems.length; i++) {
                                            elems[i].style.display = 'none'
                                        }
                                        elems = document.querySelectorAll('#nnoCandy1,#nnoCandy2,#nnoCandy3,#nnoCandy4,#qq') 
                                        for (var i = 0; i < elems.length; i++) {
                                            elems[i].style.display = 'none'
                                        }

                                        $("#selectC").val("");
                                        $("#sselectC").val("");
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
                                    <script> 
                                        jQuery(function($) {

                                            $('#selectC').on('change', function() {
                                                document.getElementById("myticket").innerHTML = "";
                                                document.getElementById("myticketprice").innerHTML = "";
                                                document.getElementById("myamount").innerHTML = "";
                                                document.getElementById("x").innerHTML = "";
                                                document.getElementById("alice").value = "";
                                                document.getElementById("eq").innerHTML = "";
                                                document.getElementById("cur").innerHTML = "";
                                                document.getElementById("total").innerHTML = "";                                                
                                            });
                                        });
                                    </script>                                    
                                </div>

                                <script>
                                    function multiply() { 
                                        const multiplicand = document.getElementById('myamount').innerHTML || 0; 
                                        const multiplier = document.getElementById('myticketprice').innerHTML || 0; 
                                        const product = parseFloat(multiplicand) * parseFloat(multiplier); 
                                        document.getElementById('total').innerHTML = product.toFixed(1); 
                                    }                                
                                </script>
                                <div id="opt" class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="float:left;">
                                    <div id="noCandy1" style="display:none;">
                                        <select class="form-control" id="selectC1" style="font-size:14px;margin-top:0px;" required oninvalid="setCustomValidity('Δεν έχει γίνει καμία επιλογή! Επιλέξτε ένα από τα προσφερόμενα εισιτήρια.')" oninput="setCustomValidity('')">
                                            <option selected disabled hidden value="">Επιλέξτε...</option>    
                                            <?php  
                                                require('php_utils/db_connect.php');
                                                $sql = mysqli_query($connection, "SELECT * FROM `tickets`");
                                                $c = 0;
                                                while ($row = $sql->fetch_assoc()){
                                                if ($c != 3) { echo "<option value=". $row['ΛΕΩΦΟΡΕΙΑ / ΤΡΟΛΕY / ΤΡΑΜ / ΜΕΤΡΟ (€)'] .">" . $row['ΕΝΙΑΙΑ ΕΙΣΙΤΗΡΙΑ'] . "</option>"; $c=$c+1;}
                                                else { $c=$c+1; }
                                                }
                                            ?>
                                        </select>
                                        <script> 
                                            jQuery(function($) {

                                                $('#selectC1').on('change', function() {
                                                    $('#mirror').show();
                                                    document.getElementById("myticket").innerHTML = $('#selectC1 :selected').text();
                                                    document.getElementById("myticketprice").innerHTML = $('#selectC1').val();
                                                    multiply();
                                                });
                                            });
                                        </script>                                        
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
                                                    {echo "<option value=". $row['ΤΙΜΗ (€)'] .">" . $row['ΠΡΟΙΟΝ'] . "</option>"; $c=$c+1;}
                                                    else { $c=$c+1; }
                                                }
                                            ?>
                                        </select>
                                        <script> 
                                            jQuery(function($) {

                                                $('#selectC2').on('change', function() {
                                                    $('#mirror').show();
                                                    document.getElementById("myticket").innerHTML = $('#selectC2 :selected').text();
                                                    document.getElementById("myticketprice").innerHTML = $('#selectC2').val();
                                                    multiply();
                                                });
                                            });
                                        </script>                                        
                                    </div>
                                    <div id="noCandy3" style="display:none;">
                                        <select class="form-control" id="selectC3" style="font-size:14px;margin-top:0px;"  required oninvalid="setCustomValidity('Δεν έχει γίνει καμία επιλογή! Επιλέξτε ένα από τα προσφερόμενα εισιτήρια.')" oninput="setCustomValidity('')">
                                            <option selected disabled hidden value="">Επιλέξτε...</option>    
                                            <?php  
                                                require('php_utils/db_connect.php');
                                                $sql = mysqli_query($connection, "SELECT * FROM `tickets_airport`");
                                                $c = 0;
                                                while ($row = $sql->fetch_assoc()){
                                                    if ($row['ΕΙΣΙΤΗΡΙΑ ΓΡΑΜΜΩΝ ΑΕΡΟΔΡΟΜΙΟΥ'] == "ΜΕΙΩΜΕΝΟ ΕΙΣΙΤΗΡΙΟ ΑΕΡΟΔΡΟΜΙΟΥ ΑΠΟ & ΠΡΟΣ ΤΟΥΣ ΣΤΑΘΜΟΥΣ ΠΑΛΛΗΝΗ - ΚΑΝΤΖΑ - ΚΟΡΩΠΙ ΜΕΤΡΟ" ||
                                                        $row['ΕΙΣΙΤΗΡΙΑ ΓΡΑΜΜΩΝ ΑΕΡΟΔΡΟΜΙΟΥ']  == "ΜΕΙΩΜΕΝΟ ΕΙΣΙΤΗΡΙΟ ΛΕΩΦΟΡΕΙΩΝ EXPRESS" || $row['ΕΙΣΙΤΗΡΙΑ ΓΡΑΜΜΩΝ ΑΕΡΟΔΡΟΜΙΟΥ'] == "ΜΕΙΩΜΕΝΟ ΕΙΣΙΤΗΡΙΟ ΜΕΤΡΟ") 
                                                        { continue; $c=$c+1;}
                                                    else        
                                                    { 
                                                        if ($c == 0) { echo "<option value=". $row['ΜΕΤΡΟ (€)'] .">" . $row['ΕΙΣΙΤΗΡΙΑ ΓΡΑΜΜΩΝ ΑΕΡΟΔΡΟΜΙΟΥ'] . "</option>";  }
                                                        else if ($c == 1) { echo "<option value=". $row['ΛΕΩΦΟΡΕIA (€)'] .">" . $row['ΕΙΣΙΤΗΡΙΑ ΓΡΑΜΜΩΝ ΑΕΡΟΔΡΟΜΙΟΥ'] . "</option>";  }
                                                        else if ($c == 2) { echo "<option value=". $row['ΜΕΤΡΟ (€)'] .">" . $row['ΕΙΣΙΤΗΡΙΑ ΓΡΑΜΜΩΝ ΑΕΡΟΔΡΟΜΙΟΥ'] . "</option>";  }
                                                        $c=$c+1;
                                                    }
                                                }
                                            ?>
                                        </select>
                                        <script> 
                                            jQuery(function($) {

                                                $('#selectC3').on('change', function() {
                                                    $('#mirror').show();
                                                    document.getElementById("myticket").innerHTML = $('#selectC3 :selected').text();
                                                    document.getElementById("myticketprice").innerHTML = $('#selectC3').val();  
                                                    multiply();                                                  
                                                });
                                            });
                                        </script>                                        
                                    </div>
                                    <div id="noCandy4" style="display:none;">
                                        <select class="form-control" id="selectC4" style="font-size:14px;margin-top:0px;"  required oninvalid="setCustomValidity('Δεν έχει γίνει καμία επιλογή! Επιλέξτε ένα από τα προσφερόμενα εισιτήρια.')" oninput="setCustomValidity('')">
                                            <option selected disabled hidden value="">Επιλέξτε...</option> 
                                            <?php
                                                require('php_utils/db_connect.php');
                                                $sql = mysqli_query($connection, "SELECT * FROM `timed_tickets`");
                                                $c = 0;
                                                while ($row = $sql->fetch_assoc()){
                                                    if ($c == 0 )
                                                    { 
                                                        echo "<option value=". $row['30 ΗΜΕΡΩΝ'] ."> 30 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ </option>";  
                                                        echo "<option value=". $row['90 ΗΜΕΡΩΝ'] ."> 90 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ </option>";
                                                        echo "<option value=". $row['180 ΗΜΕΡΩΝ'] ."> 180 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ </option>";
                                                        echo "<option value=". $row['365 ΗΜΕΡΩΝ'] ."> 365 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ </option>";
                                                    }   
                                                    else
                                                    {
                                                        echo "<option value=". $row['30 ΗΜΕΡΩΝ'] ."> 30 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ ΑΠΟ ΚΑΙ ΠΡΟΣ ΤΟ ΑΕΡΟΔΡΟΜΙΟ </option>";  
                                                        echo "<option value=". $row['90 ΗΜΕΡΩΝ'] ."> 90 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ ΑΠΟ ΚΑΙ ΠΡΟΣ ΤΟ ΑΕΡΟΔΡΟΜΙΟ </option>";
                                                        echo "<option value=". $row['180 ΗΜΕΡΩΝ'] ."> 180 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ ΑΠΟ ΚΑΙ ΠΡΟΣ ΤΟ ΑΕΡΟΔΡΟΜΙΟ </option>";
                                                        echo "<option value=". $row['365 ΗΜΕΡΩΝ'] ."> 365 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ ΑΠΟ ΚΑΙ ΠΡΟΣ ΤΟ ΑΕΡΟΔΡΟΜΙΟ </option>";
                                                    }
                                                    $c=$c+1;
                                                }
                                            ?>  
                                        </select>
                                        <script> 
                                            jQuery(function($) {

                                                $('#selectC4').on('change', function() {                                                    
                                                    $('#mirror').show();
                                                    document.getElementById("myticket").innerHTML = $('#selectC4 :selected').text();
                                                    document.getElementById("myticketprice").innerHTML = $('#selectC4').val();
                                                    multiply();                                                  
                                                });
                                            });
                                        </script>                                        
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
                                    <input id="alice" type="number" style="float:center;width: 75%;margin-left:15px; margin-top:12px; text-align:center;" onKeyDown="return false" min="1" step="1" max="12" name='qqty' id='qqty' placeholder="Ποσότητα" value="" required oninvalid="setCustomValidity('Δεν έχει γίνει καμία επιλογή! Επιλέξτε ποσότητα εισιτηρίων.')" oninput="setCustomValidity('')"/>
                                    <script> 
                                        jQuery(function($) {

                                            $('#alice').on('input', function() {
                                                $('#mirror').show();
                                                document.getElementById("myamount").innerHTML = $('#alice').val();
                                                document.getElementById("x").innerHTML = "x";
                                                document.getElementById("eq").innerHTML = "="; 
                                                document.getElementById("cur").innerHTML = "€"; 
                                                multiply();
                                            });
                                        });
                                    </script>
                                </div>
                                <div id="mirror" style="display:none;">                                
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left">
                                        <p><span id="myticket"></span> <span id="x"></span> <span id="myamount"></span><span id="myticketprice" style="display:none;"></span> <span id="eq"></span> <span id="total"></span> <span id="cur"></span></p>
                                    </div>

                                    <?php
                                        // if (!isset($_SESSION['user_id']))
                                        // {
                                        //     echo '<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left"> <p> Παρακαλώ εισάγετε τα παρακάτω στοιχεία για αποστολή των παραπάνω εισιτηρίων που έχετε επιλέξει και απόδειξης αυτών.</p></div><div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        //     <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Επώνυμο" required oninvalid="setCustomValidity("Άδειο πεδίο. Χρειάζεται να εισαχθεί επώνυμο!")" oninput="setCustomValidity('')">
                                        // </div>
                                        // <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        //     <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Όνομα" required oninvalid="setCustomValidity("Άδειο πεδίο. Χρειάζεται να εισαχθεί όνομα!")" oninput="setCustomValidity('')">
                                        // </div>
                                        // <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                        //     <input type="email" name="email" id="email" class="form-control" placeholder="example@example.com/gr" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required oninvalid="setCustomValidity("Άδειο πεδίο ή μη έγκυρη διεύθυνση email! Προσθέστε έγκυρη διεύθυνση email.")" oninput="setCustomValidity('')">
                                        // </div>';
                                        // }
                                    ?>
                                    <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Επώνυμο" required oninvalid="setCustomValidity('Άδειο πεδίο. Χρειάζεται να εισαχθεί επώνυμο!')" oninput="setCustomValidity('')">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Όνομα" required oninvalid="setCustomValidity('Άδειο πεδίο. Χρειάζεται να εισαχθεί όνομα!')" oninput="setCustomValidity('')">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="example@example.com/gr" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required oninvalid="setCustomValidity('Άδειο πεδίο ή μη έγκυρη διεύθυνση email! Προσθέστε έγκυρη διεύθυνση email.')" oninput="setCustomValidity('')">
                                    </div> -->
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
                                    <script> 
                                        // jQuery(function($) {

                                        //     $('#sselectC').on('change', function() {
                                        //         document.getElementById("mmyticket").innerHTML = "";
                                        //         document.getElementById("mmyamount").innerHTML = "";
                                        //         document.getElementById("X").innerHTML = "";
                                        //         document.getElementById("aalice").value = "";
                                        //         document.getElementById("eeq").innerHTML = "";
                                        //         document.getElementById("ccur").innerHTML = ""; 
                                        //         document.getElementById("ttotal").innerHTML = "";                                                
                                        //     });
                                        // });
                                    </script>
                                </div>
                                <script>
                                    function mmultiply() { 
                                        const multiplicand = document.getElementById('mmyamount').innerHTML || 0; 
                                        const multiplier = document.getElementById('mmyticketprice').innerHTML || 0; 
                                        const product = parseFloat(multiplicand) * parseFloat(multiplier); 
                                        document.getElementById('ttotal').innerHTML = product.toFixed(1); 
                                    }                                
                                </script>                                
                                <div id="oopt" class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="float:left;">
                                    <div id="nnoCandy1" style="display:none;">
                                        <select class="form-control" id="sselectC1" style="font-size:14px;margin-top:0px;" required oninvalid="setCustomValidity('Δεν έχει γίνει καμία επιλογή! Επιλέξτε ένα από τα προσφερόμενα εισιτήρια.')" oninput="setCustomValidity('')">
                                            <option selected disabled hidden value="">Επιλέξτε...</option>    
                                            <?php  
                                                require('php_utils/db_connect.php');
                                                $sql = mysqli_query($connection, "SELECT * FROM `tickets`");
                                                while ($row = $sql->fetch_assoc()){
                                                    echo "<option value=". $row['ΛΕΩΦΟΡΕΙΑ / ΤΡΟΛΕY / ΤΡΑΜ / ΜΕΤΡΟ (€)'] .">" . $row['ΕΝΙΑΙΑ ΕΙΣΙΤΗΡΙΑ'] . "</option>";
                                                }
                                            ?>
                                        </select>
                                        <script> 
                                            jQuery(function($) {

                                                $('#sselectC1').on('change', function() {
                                                    $('#mmirror').show();
                                                    document.getElementById("mmyticket").innerHTML = $('#sselectC1 :selected').text();
                                                    document.getElementById("mmyticketprice").innerHTML = $('#sselectC1').val();
                                                    mmultiply();                                                    
                                                });
                                            });
                                        </script>
                                    </div>
                                    <div id="nnoCandy2" style="display:none;">
                                        <select class="form-control" id="sselectC2" style="font-size:14px;margin-top:0px;" required oninvalid="setCustomValidity('Δεν έχει γίνει καμία επιλογή! Επιλέξτε ένα από τα προσφερόμενα εισιτήρια.')" oninput="setCustomValidity('')">
                                            <option selected disabled hidden value="">Επιλέξτε...</option>    
                                            <?php  
                                                require('php_utils/db_connect.php');
                                                $sql = mysqli_query($connection, "SELECT * FROM `new_ticket_prices`");
                                                while ($row = $sql->fetch_assoc()){
                                                    echo "<option value=". $row['ΤΙΜΗ (€)'] .">" . $row['ΠΡΟΙΟΝ'] . "</option>";
                                                }
                                            ?>
                                        </select>
                                        <script> 
                                            jQuery(function($) {

                                                $('#sselectC2').on('change', function() {
                                                    $('#mmirror').show();
                                                    document.getElementById("mmyticket").innerHTML = $('#sselectC2 :selected').text();
                                                    document.getElementById("mmyticketprice").innerHTML = $('#sselectC2').val();
                                                    mmultiply();
                                                });
                                            });
                                        </script>                                        
                                    </div>
                                    <div id="nnoCandy3" style="display:none;">
                                        <select class="form-control" id="sselectC3" style="font-size:14px;margin-top:0px;"  required oninvalid="setCustomValidity('Δεν έχει γίνει καμία επιλογή! Επιλέξτε ένα από τα προσφερόμενα εισιτήρια.')" oninput="setCustomValidity('')">
                                            <option selected disabled hidden value="">Επιλέξτε...</option>    
                                            <?php  
                                                require('php_utils/db_connect.php');
                                                $sql = mysqli_query($connection, "SELECT * FROM `tickets_airport`");
                                                $c = 0;
                                                while ($row = $sql->fetch_assoc()){
                                                    if ($c == 0) { echo "<option value=". $row['ΜΕΤΡΟ (€)'] .">" . $row['ΕΙΣΙΤΗΡΙΑ ΓΡΑΜΜΩΝ ΑΕΡΟΔΡΟΜΙΟΥ'] . "</option>";  }
                                                    else if ($c == 1) { echo "<option value=". $row['ΛΕΩΦΟΡΕIA (€)'] .">" . $row['ΕΙΣΙΤΗΡΙΑ ΓΡΑΜΜΩΝ ΑΕΡΟΔΡΟΜΙΟΥ'] . "</option>";  }
                                                    else if ($c == 2) { echo "<option value=". $row['ΜΕΤΡΟ (€)'] .">" . $row['ΕΙΣΙΤΗΡΙΑ ΓΡΑΜΜΩΝ ΑΕΡΟΔΡΟΜΙΟΥ'] . "</option>";  }
                                                    else if ($c == 3) { echo "<option value=". $row['ΜΕΤΡΟ (€)'] .">" . $row['ΕΙΣΙΤΗΡΙΑ ΓΡΑΜΜΩΝ ΑΕΡΟΔΡΟΜΙΟΥ'] . "</option>";  }
                                                    else if ($c == 4) { echo "<option value=". $row['ΛΕΩΦΟΡΕIA (€)'] .">" . $row['ΕΙΣΙΤΗΡΙΑ ΓΡΑΜΜΩΝ ΑΕΡΟΔΡΟΜΙΟΥ'] . "</option>";  } 
                                                    else if ($c == 5) { echo "<option value=". $row['ΜΕΤΡΟ (€)'] .">" . $row['ΕΙΣΙΤΗΡΙΑ ΓΡΑΜΜΩΝ ΑΕΡΟΔΡΟΜΙΟΥ'] . "</option>";  } 
                                                    $c=$c+1;
                                                }
                                            ?>
                                        </select>
                                        <script> 
                                            jQuery(function($) {

                                                $('#sselectC3').on('change', function() {
                                                    $('#mmirror').show();
                                                    document.getElementById("mmyticket").innerHTML = $('#sselectC3 :selected').text();
                                                    document.getElementById("mmyticketprice").innerHTML = $('#sselectC3').val();
                                                    mmultiply();
                                                });
                                            });
                                        </script>                                        
                                    </div>
                                    <div id="nnoCandy4" style="display:none;">
                                        <select class="form-control" id="sselectC4" style="font-size:14px;margin-top:0px;"  required oninvalid="setCustomValidity('Δεν έχει γίνει καμία επιλογή! Επιλέξτε ένα από τα προσφερόμενα εισιτήρια.')" oninput="setCustomValidity('')">
                                        <?php
                                                require('php_utils/db_connect.php');
                                                $sql = mysqli_query($connection, "SELECT * FROM `timed_tickets`");
                                                $c = 0;
                                                while ($row = $sql->fetch_assoc()){
                                                    if ($c == 0 )
                                                    { 
                                                        echo "<option value=". $row['30 ΗΜΕΡΩΝ'] ."> 30 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ </option>";  
                                                        echo "<option value=". $row['90 ΗΜΕΡΩΝ'] ."> 90 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ </option>";
                                                        echo "<option value=". $row['180 ΗΜΕΡΩΝ'] ."> 180 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ </option>";
                                                        echo "<option value=". $row['365 ΗΜΕΡΩΝ'] ."> 365 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ </option>";
                                                    }   
                                                    else
                                                    {
                                                        echo "<option value=". $row['30 ΗΜΕΡΩΝ'] ."> 30 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ ΑΠΟ ΚΑΙ ΠΡΟΣ ΤΟ ΑΕΡΟΔΡΟΜΙΟ </option>";  
                                                        echo "<option value=". $row['90 ΗΜΕΡΩΝ'] ."> 90 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ ΑΠΟ ΚΑΙ ΠΡΟΣ ΤΟ ΑΕΡΟΔΡΟΜΙΟ </option>";
                                                        echo "<option value=". $row['180 ΗΜΕΡΩΝ'] ."> 180 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ ΑΠΟ ΚΑΙ ΠΡΟΣ ΤΟ ΑΕΡΟΔΡΟΜΙΟ </option>";
                                                        echo "<option value=". $row['365 ΗΜΕΡΩΝ'] ."> 365 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ ΑΠΟ ΚΑΙ ΠΡΟΣ ΤΟ ΑΕΡΟΔΡΟΜΙΟ </option>";
                                                    }
                                                    $c=$c+1;
                                                }
                                                $sql = mysqli_query($connection, "SELECT * FROM `timed_tickets_red`");
                                                $c = 0;
                                                while ($row = $sql->fetch_assoc()){
                                                    if ($c == 0 )
                                                    { 
                                                        echo "<option value=". $row['30 ΗΜΕΡΩΝ'] ."> ΜΕΙΩΜΕΝΟ 30 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ </option>";  
                                                        echo "<option value=". $row['90 ΗΜΕΡΩΝ'] ."> ΜΕΙΩΜΕΝΟ 90 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ </option>";
                                                        echo "<option value=". $row['180 ΗΜΕΡΩΝ'] ."> ΜΕΙΩΜΕΝΟ 180 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ </option>";
                                                        echo "<option value=". $row['365 ΗΜΕΡΩΝ'] ."> ΜΕΙΩΜΕΝΟ 365 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ </option>";
                                                    }   
                                                    else
                                                    {
                                                        echo "<option value=". $row['30 ΗΜΕΡΩΝ'] ."> ΜΕΙΩΜΕΝΟ 30 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ ΑΠΟ ΚΑΙ ΠΡΟΣ ΤΟ ΑΕΡΟΔΡΟΜΙΟ </option>";  
                                                        echo "<option value=". $row['90 ΗΜΕΡΩΝ'] ."> ΜΕΙΩΜΕΝΟ 90 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ ΑΠΟ ΚΑΙ ΠΡΟΣ ΤΟ ΑΕΡΟΔΡΟΜΙΟ </option>";
                                                        echo "<option value=". $row['180 ΗΜΕΡΩΝ'] ."> ΜΕΙΩΜΕΝΟ 180 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ ΑΠΟ ΚΑΙ ΠΡΟΣ ΤΟ ΑΕΡΟΔΡΟΜΙΟ </option>";
                                                        echo "<option value=". $row['365 ΗΜΕΡΩΝ'] ."> ΜΕΙΩΜΕΝΟ 365 ΗΜΕΡΩΝ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ ΑΠΟ ΚΑΙ ΠΡΟΣ ΤΟ ΑΕΡΟΔΡΟΜΙΟ </option>";
                                                    }
                                                    $c=$c+1;
                                                }
                                            ?> 
                                        </select>
                                        <script> 
                                            jQuery(function($) {

                                                $('#sselectC4').on('change', function() {
                                                    $('#mmirror').show();
                                                    document.getElementById("mmyticket").innerHTML = $('#sselectC4 :selected').text();
                                                    document.getElementById("mmyticketprice").innerHTML = $('#sselectC4').val();
                                                    mmultiply();
                                                });
                                            });
                                        </script>                                        
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
                                        document.getElementById("mmyticket").innerHTML = "";
                                                document.getElementById("mmyamount").innerHTML = "";
                                                document.getElementById("X").innerHTML = "";
                                                document.getElementById("aalice").value = "";
                                                document.getElementById("eeq").innerHTML = "";
                                                document.getElementById("ccur").innerHTML = ""; 
                                                document.getElementById("ttotal").innerHTML = "";
                                        }, false);
                                    </script>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="qq" style="display:none;" onchage>
                                    <input id="aalice" type="number" style="float:center;width: 75%;margin-left:15px; margin-top:12px; text-align:center;" onKeyDown="return false" min="1" step="1" max="12" name='qqty' id='qqty' placeholder="Ποσότητα" value="" required oninvalid="setCustomValidity('Δεν έχει γίνει καμία επιλογή! Επιλέξτε ποσότητα εισιτηρίων.')" oninput="setCustomValidity('')"/>
                                    <script> 
                                        jQuery(function($) {

                                            $('#aalice').on('input', function() {
                                                $('#mmirror').show();
                                                document.getElementById("mmyamount").innerHTML = $('#aalice').val();
                                                document.getElementById("X").innerHTML = "X";
                                                document.getElementById("eeq").innerHTML = "="; 
                                                document.getElementById("ccur").innerHTML = "€"; 
                                                mmultiply();
                                            });
                                        });
                                    </script>
                                </div>
                                <div id="mmirror" style="display:none;">                                
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left">
                                        <p><span id="mmyticket"></span> <span id="X"></span> <span id="mmyamount"></span><span id="mmyticketprice" style="display:none;"></span> <span id="eeq"></span> <span id="ttotal"></span> <span id="ccur"> </p>
                                    </div>

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