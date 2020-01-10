<?php
    session_start();
    require('php_utils/db_connect.php');
    if (isset($_SESSION['user_id']))
    {
        $mail = $_SESSION['user_id'];
        $sql = "SELECT * FROM `users` WHERE email='$mail'";
        $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
        $count = mysqli_num_rows($result);
        if ($count == 1)
        {
            $array = mysqli_fetch_array($result,MYSQLI_ASSOC);
            $_SESSION['prvlg'] = $array['redtkt_prevlg'];                                                                                             
        }
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
            <div class="row" <?php if (isset($_GET['action'])) {echo "style='display:none;'";} else {echo "style='display:block;'";}?>>
                <div class="" style="margin-top:10%;margin-bottom:2%;display:center;margin-left:30%;margin-right:30%;">
                    <div class="contact_form">
                        <div id="messagee"></div>
                        <form id="contactformm" class="row" action="php_utils/purchaseticketsForm.php" name="contactformm" method="post">  
                            <fieldset class="row-fluid">  
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                    <select id='tkt' name="tkt" class="form-control" onchange="admSelectCheck(this);" required oninvalid="setCustomValidity('Δεν έχει γίνει καμία επιλογή! Επιλέξτε μία ενέργεια.')" oninput="setCustomValidity('')">
                                        <option hidden value="">Επιθυμητή ενέργεια</option>
                                        <option value="αγορά">Αγορά</option>
                                        <option id="admOption" value="φόρτιση">Φόρτιση</option>
                                    </select>
                                </div>
                                <script> 
                                   function admSelectCheck(nameSelect)
                                    {
                                        if(nameSelect)
                                        {
                                            $("#tickets").hide().find("select").prop("required", false);
                                            $("#tickets").hide().find("input").prop("required", false); 
                                            $("#selectC").val("");
                                            $("#tickets_red").hide().find("select").prop("required", false);
                                            $("#tickets_red").hide().find("input").prop("required", false); 
                                            $("#sselectC").val("");
                                            $('#mirror').hide().find("input").prop("required", false);
                                            $('#mmirror').hide().find("input").prop("required", false);
                                            $('#pay').hide().find("input").prop("required", false);
                                            
                                            $('#noCandy1').hide().find("select").prop("required", false);
                                            $('#noCandy2').hide().find("select").prop("required", false);
                                            $('#noCandy3').hide().find("select").prop("required", false);
                                            $('#noCandy4').hide().find("select").prop("required", false);
                                            $('#q').hide().find("input").prop("required", false);
                                            $('#nnoCandy1').hide().find("select").prop("required", false);
                                            $('#nnoCandy2').hide().find("select").prop("required", false);
                                            $('#nnoCandy3').hide().find("select").prop("required", false);
                                            $('#nnoCandy4').hide().find("select").prop("required", false);
                                            $('#qq').hide().find("input").prop("required", false);
                                        
                                            admOptionValue = document.getElementById("admOption").value;
                                            if(admOptionValue == nameSelect.value)
                                            { 
                                                if (document.getElementById("tickets").style.display == "block")
                                                { 
                                                    $("#tickets").hide().find("select").prop("required", false);
                                                    $("#tickets").hide().find("input").prop("required", false); 
                                                    $("#selectC").val("");
                                                } 
                                                $("#tickets_red").show().find("select").prop("required", true);
                                                $("#tickets_red").show().find("input").prop("required", true);
                                                $("#sselectC").val("");
                                            }
                                            else
                                            { 
                                                if (document.getElementById("tickets_red").style.display == "block")
                                                { 
                                                    $("#tickets_red").hide().find("select").prop("required", false);
                                                    $("#tickets_red").hide().find("input").prop("required", false); 
                                                    $("#sselectC").val("");
                                                } 
                                                $("#tickets").show().find("select").prop("required", true);
                                                $("#tickets").show().find("input").prop("required", true);
                                                $("#selectC").val("");
                                            }
                                        }
                                    }       
                                </script>
                            <!-- dont show tickets of reduced value which come only with charge of ticket and not purchase of one -->
                            <div class="row-fluid" id="tickets" style="display:none;">    
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="padding-bottom:5px;">
                                    <select class="form-control" id="selectC" name="selectC" required oninvalid="setCustomValidity('Δεν έχει γίνει καμία επιλογή! Επιλέξτε ένα τύπο εισιτηρίου.')" oninput="setCustomValidity('')">
                                        <option hidden value="">Είδος Εισιτηρίου</option>    
                                        <option id="candy1">Εισιτήριο για Όλα τα Μέσα εκτός Γραμμών Αεροδρομίου</option>
                                        <option id="candy2">Εισιτήριο Πολλαπλών Διαδρομών</option>
                                        <option id="candy3">Εισιτήριο Γραμμών Αεροδρομίου</option>
                                        <option id="candy4">Εισιτήριο Χρονικού Διαστήματος</option>
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
                                                $('#mirror').hide().find("input").prop("required", false);                                              
                                                $('#pay').hide().find("input").prop("required", false);                                              
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
                                            <option hidden value="">Επιλέξτε...</option>    
                                            <?php  
                                                $sql = mysqli_query($connection, "SELECT * FROM `tickets`");
                                                $c = 0;
                                                while ($row = $sql->fetch_assoc()){
                                                if ($c != 3) { echo "<option value=". $row['ΛΕΩΦΟΡΕΙΑ / ΤΡΟΛΕY / ΤΡΑΜ / ΜΕΤΡΟ (€)'] .">" . $row['ΕΙΣΙΤΗΡΙΑ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ ΕΚΤΟΣ ΓΡΑΜΜΩΝ ΑΕΡΟΔΡΟΜΙΟΥ'] . "</option>"; $c=$c+1;}
                                                else { $c=$c+1; }
                                                }
                                            ?>
                                        </select>
                                        <script> 
                                            jQuery(function($) {

                                                $('#selectC1').on('change', function() {
                                                    $('#mirror').show().find("input").prop("required", true);
                                                    $('#pay').show().find("input").prop("required", true);

                                                    document.getElementById("myticket").innerHTML = $('#selectC1 :selected').text();
                                                    document.getElementById("myticketprice").innerHTML = $('#selectC1').val();
                                                    multiply();
                                                });
                                            });
                                        </script>                                        
                                    </div>
                                    <div id="noCandy2" style="display:none;">
                                        <select class="form-control" id="selectC2" style="font-size:14px;margin-top:0px;" required oninvalid="setCustomValidity('Δεν έχει γίνει καμία επιλογή! Επιλέξτε ένα από τα προσφερόμενα εισιτήρια.')" oninput="setCustomValidity('')">
                                            <option hidden value="">Επιλέξτε...</option>    
                                            <?php  
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
                                                    $('#mirror').show().find("input").prop("required", true);
                                                    $('#pay').show().find("input").prop("required", true);

                                                    document.getElementById("myticket").innerHTML = $('#selectC2 :selected').text();
                                                    document.getElementById("myticketprice").innerHTML = $('#selectC2').val();
                                                    multiply();
                                                });
                                            });
                                        </script>                                        
                                    </div>
                                    <div id="noCandy3" style="display:none;">
                                        <select class="form-control" id="selectC3" style="font-size:14px;margin-top:0px;"  required oninvalid="setCustomValidity('Δεν έχει γίνει καμία επιλογή! Επιλέξτε ένα από τα προσφερόμενα εισιτήρια.')" oninput="setCustomValidity('')">
                                            <option hidden value="">Επιλέξτε...</option>    
                                            <?php  
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
                                                    $('#mirror').show().find("input").prop("required", true);
                                                    $('#pay').show().find("input").prop("required", true);

                                                    document.getElementById("myticket").innerHTML = $('#selectC3 :selected').text();
                                                    document.getElementById("myticketprice").innerHTML = $('#selectC3').val();  
                                                    multiply();                                                  
                                                });
                                            });
                                        </script>                                        
                                    </div>
                                    <div id="noCandy4" style="display:none;">
                                        <select class="form-control" id="selectC4" style="font-size:14px;margin-top:0px;"  required oninvalid="setCustomValidity('Δεν έχει γίνει καμία επιλογή! Επιλέξτε ένα από τα προσφερόμενα εισιτήρια.')" oninput="setCustomValidity('')">
                                            <option hidden value="">Επιλέξτε...</option> 
                                            <?php
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
                                                    $('#mirror').show().find("input").prop("required", true);
                                                    $('#pay').show().find("input").prop("required", true);

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
                                        $('#noCandy1').hide().find("select").prop("required", false);
                                        $('#noCandy2').hide().find("select").prop("required", false);
                                        $('#noCandy3').hide().find("select").prop("required", false);
                                        $('#noCandy4').hide().find("select").prop("required", false);
                                        $('#q').hide().find("input").prop("required", false);

                                        if (this.selectedIndex === 1) {
                                            $('#noCandy1').show().find("select").prop("required", true);
                                            $('#q').show().find("input").prop("required", true);
                                        } else if (this.selectedIndex === 2) {
                                            $('#noCandy2').show().find("select").prop("required", true);
                                            $('#q').show().find("input").prop("required", true);
                                        }else if (this.selectedIndex === 3) {
                                            $('#noCandy3').show().find("select").prop("required", true);
                                            $('#q').show().find("input").prop("required", true);
                                        }
                                        else if (this.selectedIndex === 4) {
                                            $('#noCandy4').show().find("select").prop("required", true);
                                            $('#q').show().find("input").prop("required", true);
                                        }
                                        }, false);
                                    </script>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="q" style="display:none;" onchage>
                                    <input id="alice" type="number" style="float:center;width: 75%;margin-left:15px; margin-top:12px; text-align:center;" onKeyDown="return false" min="1" step="1" max="12" name='alice' placeholder="Ποσότητα" value="" required oninvalid="setCustomValidity('Δεν έχει γίνει καμία επιλογή! Επιλέξτε ποσότητα εισιτηρίων.')" oninput="setCustomValidity('')"/>
                                    <script> 
                                        jQuery(function($) {

                                            $('#alice').on('input', function() {
                                                $('#mirror').show().find("input").prop("required", true);;
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
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left" style="margin-bottom:10px;">
                                        <p><span id="myticket"></span> <span id="x"></span> <span id="myamount"></span><span id="myticketprice" style="display:none;"></span> <span id="eq"></span> <span id="total"></span> <span id="cur"></span></p>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" <?php if (!isset($_SESSION['user_id'])) { echo 'style="display:block; margin-top:15px;"'; } else { echo 'style="display:none"'; } ?>>
                                        <span> Παρακαλώ εισαγάγετε τα παρακάτω στοιχεία για χρέωση, αποστολή των επιλεγμένων εισιτηρίων και της απόδειξης αυτών!</span>
                                    </div>
                                    <?php 
                                        if (!isset($_SESSION['user_id'])) 
                                        {
                                            echo "<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12' style='display:block;'>
                                            <input type='text' name='last_name' id='last_name' class='form-control' placeholder='Επώνυμο' required oninvalid='setCustomValidity('Άδειο πεδίο. Χρειάζεται να εισαχθεί επώνυμο!')' oninput='setCustomValidity('')'>
                                        </div>
                                        <div class='col-lg-6 col-md-6 col-sm-6 col-xs-12' style='display:block;'>
                                            <input type='text' name='first_name' id='first_name' class='form-control' placeholder='Όνομα' required oninvalid='setCustomValidity('Άδειο πεδίο. Χρειάζεται να εισαχθεί όνομα!')' oninput='setCustomValidity('')'>
                                        </div>
                                        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center' style='display:block';>
                                            <input type='email' name='email' id='email' class='form-control' placeholder='example@example.com/gr' pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$' required oninvalid='setCustomValidity('Άδειο πεδίο ή μη έγκυρη διεύθυνση email! Προσθέστε έγκυρη διεύθυνση email.')' oninput='setCustomValidity('')'>
                                        </div>";
                                        }
                                    ?>
                                </div>                                 
                            </div> 
                            <div class="row-fluid" id="tickets_red" style="display:none;">    
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="padding-bottom:5px;">
                                    <select class="form-control" id="sselectC" name="sselectC"required oninvalid="setCustomValidity('Δεν έχει γίνει καμία επιλογή! Επιλέξτε ένα τύπο εισιτηρίου.')" oninput="setCustomValidity('')">
                                        <option hidden value="">Είδος Εισιτηρίου</option>    
                                        <option id="ccandy1">Εισιτήριο για Όλα τα Μέσα εκτός Γραμμών Αεροδρομίου</option>
                                        <option id="ccandy2">Εισιτήριο Πολλαπλών Διαδρομών</option>
                                        <option id="ccandy3">Εισιτήριο Γραμμών Αεροδρομίου</option>
                                        <option id="ccandy4">Εισιτήριο Χρονικού Διαστήματος</option>
                                    </select>
                                    <script> 
                                        jQuery(function($) {

                                            $('#sselectC').on('change', function() {
                                                document.getElementById("mmyticket").innerHTML = "";
                                                document.getElementById("mmyticketprice").innerHTML = "";
                                                document.getElementById("mmyamount").innerHTML = "";
                                                document.getElementById("X").innerHTML = "";
                                                document.getElementById("aalice").value = "";
                                                document.getElementById("eeq").innerHTML = "";
                                                document.getElementById("ccur").innerHTML = ""; 
                                                document.getElementById("ttotal").innerHTML = "";    
                                                $('#mmirror').hide().find("input").prop("required", false);                                            
                                                $('#pay').hide().find("input").prop("required", false);                                            
                                            });
                                        });
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
                                            <option hidden value="">Επιλέξτε...</option>    
                                            <?php  
                                                $sql = mysqli_query($connection, "SELECT * FROM `tickets`");
                                                $c = 0;
                                                while ($row = $sql->fetch_assoc()){
                                                    if (isset($_SESSION['prvlg']) and $_SESSION['prvlg'] == 0 or !isset($_SESSION['user_id']))
                                                    {
                                                        if ($c != 3) { echo "<option value=". $row['ΛΕΩΦΟΡΕΙΑ / ΤΡΟΛΕY / ΤΡΑΜ / ΜΕΤΡΟ (€)'] .">" . $row['ΕΙΣΙΤΗΡΙΑ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ ΕΚΤΟΣ ΓΡΑΜΜΩΝ ΑΕΡΟΔΡΟΜΙΟΥ'] . "</option>"; $c=$c+1;}
                                                        else { $c=$c+1; }
                                                    }
                                                    else
                                                    {
                                                        if ($c != 0) { echo "<option value=". $row['ΛΕΩΦΟΡΕΙΑ / ΤΡΟΛΕY / ΤΡΑΜ / ΜΕΤΡΟ (€)'] .">" . $row['ΕΙΣΙΤΗΡΙΑ ΓΙΑ ΟΛΑ ΤΑ ΜΕΣΑ ΕΚΤΟΣ ΓΡΑΜΜΩΝ ΑΕΡΟΔΡΟΜΙΟΥ'] . "</option>"; $c=$c+1;}
                                                        else { $c=$c+1; }
                                                    }
                                                }  
                                            ?>
                                        </select>
                                        <script> 
                                            jQuery(function($) {

                                                $('#sselectC1').on('change', function() {
                                                    $('#mmirror').show().find("input").prop("required", true);
                                                    $('#pay').show().find("input").prop("required", true);

                                                    document.getElementById("mmyticket").innerHTML = $('#sselectC1 :selected').text();
                                                    document.getElementById("mmyticketprice").innerHTML = $('#sselectC1').val();
                                                    mmultiply();                                                    
                                                });
                                            });
                                        </script>
                                    </div>
                                    <div id="nnoCandy2" style="display:none;">
                                        <select class="form-control" id="sselectC2" style="font-size:14px;margin-top:0px;" required oninvalid="setCustomValidity('Δεν έχει γίνει καμία επιλογή! Επιλέξτε ένα από τα προσφερόμενα εισιτήρια.')" oninput="setCustomValidity('')">
                                            <option hidden value="">Επιλέξτε...</option>    
                                            <?php  
                                                $sql = mysqli_query($connection, "SELECT * FROM `new_ticket_prices`");
                                                $c = 0;
                                                while ($row = $sql->fetch_assoc()){
                                                    if (isset($_SESSION['prvlg']) and $_SESSION['prvlg'] == 0 or !isset($_SESSION['user_id']))
                                                    {
                                                        if ($c % 2 == 0)
                                                        {echo "<option value=". $row['ΤΙΜΗ (€)'] .">" . $row['ΠΡΟΙΟΝ'] . "</option>"; $c=$c+1;}
                                                        else { $c=$c+1; }
                                                    }
                                                    else
                                                    {
                                                        if ($c % 2 == 1)
                                                        {echo "<option value=". $row['ΤΙΜΗ (€)'] .">" . $row['ΠΡΟΙΟΝ'] . "</option>"; $c=$c+1;}
                                                        else { $c=$c+1; }
                                                    }    
                                                }
                                            ?>
                                        </select>
                                        <script> 
                                            jQuery(function($) {

                                                $('#sselectC2').on('change', function() {
                                                    $('#mmirror').show().find("input").prop("required", true);
                                                    $('#pay').show().find("input").prop("required", true);

                                                    document.getElementById("mmyticket").innerHTML = $('#sselectC2 :selected').text();
                                                    document.getElementById("mmyticketprice").innerHTML = $('#sselectC2').val();
                                                    mmultiply();
                                                });
                                            });
                                        </script>                                        
                                    </div>
                                    <div id="nnoCandy3" style="display:none;">
                                        <select class="form-control" id="sselectC3" style="font-size:14px;margin-top:0px;"  required oninvalid="setCustomValidity('Δεν έχει γίνει καμία επιλογή! Επιλέξτε ένα από τα προσφερόμενα εισιτήρια.')" oninput="setCustomValidity('')">
                                            <option hidden value="">Επιλέξτε...</option>    
                                            <?php  
                                                $sql = mysqli_query($connection, "SELECT * FROM `tickets_airport`");
                                                $c = 0;
                                                while ($row = $sql->fetch_assoc()){
                                                    if (isset($_SESSION['prvlg']) and $_SESSION['prvlg'] == 0 or !isset($_SESSION['user_id']))
                                                    {
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
                                                    else
                                                    {
                                                        if ($c == 3) { echo "<option value=". $row['ΜΕΤΡΟ (€)'] .">" . $row['ΕΙΣΙΤΗΡΙΑ ΓΡΑΜΜΩΝ ΑΕΡΟΔΡΟΜΙΟΥ'] . "</option>";  }
                                                        else if ($c == 4) { echo "<option value=". $row['ΛΕΩΦΟΡΕIA (€)'] .">" . $row['ΕΙΣΙΤΗΡΙΑ ΓΡΑΜΜΩΝ ΑΕΡΟΔΡΟΜΙΟΥ'] . "</option>";  } 
                                                        else if ($c == 5) { echo "<option value=". $row['ΜΕΤΡΟ (€)'] .">" . $row['ΕΙΣΙΤΗΡΙΑ ΓΡΑΜΜΩΝ ΑΕΡΟΔΡΟΜΙΟΥ'] . "</option>";  } 
                                                        $c=$c+1;
                                                    }    
                                                }
                                            ?>
                                        </select>
                                        <script> 
                                            jQuery(function($) {

                                                $('#sselectC3').on('change', function() {
                                                    $('#mmirror').show().find("input").prop("required", true);
                                                    $('#pay').show().find("input").prop("required", true);

                                                    document.getElementById("mmyticket").innerHTML = $('#sselectC3 :selected').text();
                                                    document.getElementById("mmyticketprice").innerHTML = $('#sselectC3').val();
                                                    mmultiply();
                                                });
                                            });
                                        </script>                                        
                                    </div>
                                    <div id="nnoCandy4" style="display:none;">
                                        <select class="form-control" id="sselectC4" style="font-size:14px;margin-top:0px;"  required oninvalid="setCustomValidity('Δεν έχει γίνει καμία επιλογή! Επιλέξτε ένα από τα προσφερόμενα εισιτήρια.')" oninput="setCustomValidity('')">
                                        <option hidden value="">Επιλέξτε...</option>    
                                        <?php
                                                $sql = mysqli_query($connection, "SELECT * FROM `timed_tickets`");
                                                $c = 0;
                                                if (isset($_SESSION['prvlg']) and $_SESSION['prvlg'] == 0 or !isset($_SESSION['user_id']))
                                                {
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
                                                }
                                                else
                                                {
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
                                                }    
                                            ?> 
                                        </select>
                                        <script> 
                                            jQuery(function($) {

                                                $('#sselectC4').on('change', function() {
                                                    $('#mmirror').show().find("input").prop("required", true);
                                                    $('#pay').show().find("input").prop("required", true);
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
                                        $('#nnoCandy1').hide().find("select").prop("required", false);
                                        $('#nnoCandy2').hide().find("select").prop("required", false);
                                        $('#nnoCandy3').hide().find("select").prop("required", false);
                                        $('#nnoCandy4').hide().find("select").prop("required", false);
                                        $('#qq').hide().find("input").prop("required", false);

                                        
                                        if (this.selectedIndex === 1) {
                                            $('#nnoCandy1').show().find("select").prop("required", true);
                                            $('#qq').show().find("input").prop("required", true);
                                        } else if (this.selectedIndex === 2) {
                                            $('#nnoCandy2').show().find("select").prop("required", true);
                                            $('#qq').show().find("input").prop("required", true);
                                        }else if (this.selectedIndex === 3) {
                                            $('#nnoCandy3').show().find("select").prop("required", true);
                                            $('#qq').show().find("input").prop("required", true);
                                        }
                                        else if (this.selectedIndex === 4) {
                                            $('#nnoCandy4').show().find("select").prop("required", true);
                                            $('#qq').show().find("input").prop("required", true);
                                        }
                                        }, false);
                                    </script>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="qq" style="display:none;" onchage>
                                    <input id="aalice" type="number" style="float:center;width: 75%;margin-left:15px; margin-top:12px; text-align:center;" onKeyDown="return false" min="1" step="1" max="12" name='aalice'  placeholder="Ποσότητα" value="" required oninvalid="setCustomValidity('Δεν έχει γίνει καμία επιλογή! Επιλέξτε ποσότητα εισιτηρίων.')" oninput="setCustomValidity('')"/>
                                    <script> 
                                        jQuery(function($) {

                                            $('#aalice').on('input', function() {
                                                $('#mmirror').show().find("input").prop("required", true);
                                                $('#pay').show().find("input").prop("required", true);

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
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-left" style="margin-bottom:20px;">
                                        <p><span id="mmyticket"></span> <span id="X"></span> <span id="mmyamount"></span><span id="mmyticketprice" style="display:none;"></span> <span id="eeq"></span> <span id="ttotal"></span> <span id="ccur"> </p>
                                    </div>
                                    <div id='admDivCheck' class='col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center' style='display:block;'>
                                        <input type='tel' style='margin-top:10px;margin-bottom:10px;' name='code' id='code'  pattern='[0-9]{12}' class='form-control' placeholder='Αριθμός Εισιτηρίου' required oninvalid="setCustomValidity('Άδειο πεδίο ή μη έγκυρος αριθμός εισιτηρίου! Προσθέστε έγκυρο 12ψήφιο αριθμό εισιτηρίου.')" oninput="setCustomValidity('')">
                                    </div>                                        
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" <?php if (!isset($_SESSION['user_id'])) { echo 'style="display:block; margin-top:10px;margin-bottom:0px;"'; } else { echo 'style="display:none"'; } ?>>
                                        <span> Παρακαλώ εισαγάγετε τα παρακάτω στοιχεία για χρέωση, αποστολή των επιλεγμένων εισιτηρίων και της απόδειξης αυτών!</span>
                                    </div>
                                    <?php 
                                        if (!isset($_SESSION['user_id'])) 
                                        {
                                            echo "<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12' style='display:block;'>
                                            <input type='text' name='llast_name' id='llast_name' class='form-control' placeholder='Επώνυμο' required oninvalid='setCustomValidity('Άδειο πεδίο. Χρειάζεται να εισαχθεί επώνυμο!')' oninput='setCustomValidity('')'>
                                        </div>
                                        <div class='col-lg-6 col-md-6 col-sm-6 col-xs-12' style='display:block;'>
                                            <input type='text' name='ffirst_name' id='ffirst_name' class='form-control' placeholder='Όνομα' required oninvalid='setCustomValidity('Άδειο πεδίο. Χρειάζεται να εισαχθεί όνομα!')' oninput='setCustomValidity('')'>
                                        </div>
                                        <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center' style='display:block';>
                                            <input type='email' name='eemail' id='eemail' class='form-control' placeholder='example@example.com/gr' pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$' required oninvalid='setCustomValidity('Άδειο πεδίο ή μη έγκυρη διεύθυνση email! Προσθέστε έγκυρη διεύθυνση email.')' oninput='setCustomValidity('')'>
                                        </div>";
                                        }
                                    ?>
                                </div>
                                </div> 
                            <div class="row-fluid" id="pay" style="display:none;">
                                <div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
                                    <input type='tel' name='card_num' id='card_num' pattern='[0-9]{16}' class='form-control' placeholder='Αριθμός Κάρτας' required oninvalid="setCustomValidity('Άδειο πεδίο ή μη έγκυρος αριθμός κάρτας! Προσθέστε έγκυρο 16ψήφιο αριθμό κάρτας.')" oninput="setCustomValidity('')">
                                </div>
                                <div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
                                    <input type='text' name='card_name' id='card_name' class='form-control' placeholder='Όνομα Κάρτας' required oninvalid="setCustomValidity('Άδειο πεδίο. Χρειάζεται να εισαχθεί όνομα κάρτας!')" oninput="setCustomValidity('')">
                                </div>                                 
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <button type="submit" id="submit" value="SEND" class="btn btn-light btn-radius btn-brd grd1 btn-block" style="font-size:14px;padding-left:20px; margin-top:10px;">Ολοκλήρωση!</button>
                                </div>
                            </div>    
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row" <?php if (isset($_GET['action'])) {echo "style='display:none;'";} else {echo "style='display:block;'";}?>>
                <div class="accordion" id="accordion-tab-1" style="display:center;margin-left:30%;margin-right:30%;">
                    <div class="card">
                        <div class="card-header" id="accordion-tab-1-heading-2">
                            <h2 style="font-size: 75%;">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2">
                                    Χρειάζεστε βοήθεια;
                                </button>
                            </h2>
                        </div>
                        <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                            <div class="card-body">
                                <p style="font-size:14px;">
                                    <b>- Επιλέξτε την ενέργεια που επιθυμείτε να κάνετε, αγορά ή φόρτιση εισιτηρίων. Μπορεί να γίνει μόνο φόρτιση των εισιτηρίων μειωμένης τιμής, αν την δικαιούστε, και όχι αγορά.<br>   
                                    - Επιλέξτε είδος εισιτηρίου, ενα εκ των προσφερόμενων εισιτηρίων αυτού και την ποσότητα που επιθυμείτε. <br>
                                    - Με την ολοκλήρωση των παραπάνω βημάτων, έχετε εμφανείς εν τέλει τις λεπτομέρειες για την ενέργεια που επιθυμείτε να κάνετε, τύπος εισιτηρίου και την ποσότητα που επιλέξατε και την συνολική τιμή των επιλογών σας.<br>
                                    - Προκειμένου να υποβληθεί επιτυχώς η διαδικασία χρειάζεται, εφόσον δεν είστε εγγεγραμμένος χρήστης, να εισαγάγετε τα στοιχεία απαραίτητα για την χρέωση, αποστολή των εισιτηρίων που αποκτήσατε και της απόδειξης αυτών. 
                                    Αν είστε ήδη εγγεγραμμένος, και είστε ήδη συνδεδεμένος δεν χρειάζεται να εισαγάγετε κάποιο στοιχείο εκτός του αριθμού εισιτηρίου που θα χρειαστεί να εισαχθεί σε περίπτωση φόρτισης και τα στοιχεία χρέωσης.<br>
                                    - Μετά την ολοκλήρωση της αγοράς/φόρτισης που υποβλήθηκε, θα λάβετε ενημερωτικό μήνυμα στο email που έχετε καταχωρήσει.</b>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" <?php if (!isset($_GET['action'])) {echo "style='display:none;'";} else {echo "style='display:block;'";}?>>
                <div class="column" style="display:center;margin-top:10%;">
                <?php 
                    $act = $_GET['action'];
                    echo "<div class='section-title text-center'>
                    <h3>Η $act των επιλεγμένων εισιτηρίων εκτελέστηκε επιτυχώς!</h3>
                    <p class='lead'> Θα λάβετε σύντομα τα εισιτήριά σας και απόδειξη αυτών στην καταχωρημένη διεύθυνση email σας.<br><br>
                    <br><br><br><br>Επιστροφή στην αρχική σελίδα...</p>
                    </div>";                    
                    
                    if (isset($_GET['action']))
                    {
                        echo "<script>
                        var timer = setTimeout(function() {
                            window.location='index.php'
                        }, 5000);
                        </script>";
                    }
                ?>
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
<?php
    mysqli_close($connection);
?>    