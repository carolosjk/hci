<?php
    session_start();
    $_SESSION['APIkey'] = "AIzaSyBxGFJJ5M8-O_JCjSR-Ib5U_53P4Hpj2uk";

    if (isset($_POST['start']) and isset($_POST['end'])){
        $start = $_POST['start'];
        $end = $_POST['end'];
    }
    else{
        $start = "1";
        $end = "1";
    }
    if(isset($_POST['radio']))
        $radio = $_POST['radio'];
    else
        $radio = 1;
    if(isset($_POST['date']))
        $date = $_POST['date'];
    else
        $date = 1;

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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
    <?php include 'utils/header.php'; ?>

    <div class="all-title-box">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Εύρεση Διαδρομής</h2>
				</div>
			</div>
		</div>
    </div>
    
    
    <!-- SECTION -->
	<div class="section wb">
        <div id="routeCont" class="container" style="width:80%;">
            <!-- Breadcrumbs -->
            <div class="row" style="margin-left:4%">
			<nav id="breadcrumbs">
				<ul>
					<li><a href="index.php"><i class="fa fa-home global-radius fa-lg"></i></a></li>
					<li>Εύρεση Διαδρομής</li>
				</ul>
            </nav>
            </div>
            <div class="row" style="width:90%;height:80%;margin-left:4%;">
                <div class="col-md-4 wow slideInLeft hidden-xs hidden-sm">
                    <div style="float:left;" id="routeFind" class="contact_form">
                        <h3><i class="fa fa-map-marker grd1 global-radius"></i> ΒΡΕΣ NEA ΔΙΑΔΡΟΜΗ</h3>
                        <form action="routePlanner.php" id="contactform1" class="row" name="contactform" method="post">
                            <fieldset class="row-fluid">
                                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                        <script type="text/javascript">
                                            function initAutocomplete() {
                                                // Create the autocomplete object, restricting the search to geographical
                                                // location types.

                                                autocomplete1 = new google.maps.places.Autocomplete(
                                                    /** @type {!HTMLInputElement} */(document.getElementById('input1')),
                                                    {types: ['geocode']});

                                                autocomplete2 = new google.maps.places.Autocomplete(
                                                    /** @type {!HTMLInputElement} */(document.getElementById('input2')),
                                                    {types: ['geocode']});

                                                if (location.hash != "") {
                                                    var hash = decodeURIComponent(location.href.split("#")[1]);
                                                    
                                                    var direction = hash.split(":")[0];
                                                    if (direction == "Από")
                                                        document.getElementById('input1').value = hash.split(":")[1];
                                                    else if (direction == "Προς")
                                                        document.getElementById('input2').value = hash.split(":")[1];
                                                }
                                                else {
                                                    // When the user selects an address from the dropdown, populate the address
                                                    // fields in the form.
                                                    autocomplete1.addListener('place_changed', fillInAddress);
                                                    autocomplete2.addListener('place_changed', fillInAddress);
                                                }

                                                calcRoute();
                                            }

                                            function fillInAddress() {
                                                // Get the place details from the autocomplete object.
                                                var place = autocomplete.getPlace();
                                            }
                                        </script>
                                        <input name="start" class="form-control" placeholder="<?php if($start!="1") echo $start; else echo "Από";?>" type="text" id="input1" required oninvalid="setCustomValidity('Άδειο πεδίο. Προσθέστε αφετηρία!')" oninput="setCustomValidity('')"/>  
                                        <input name="end" class="form-control" placeholder="<?php if($end!="1") echo $end; else echo "Προς";?>" type="text" id="input2" required oninvalid="setCustomValidity('Άδειο πεδίο. Προσθέστε προορισμό!')" oninput="setCustomValidity('')"/>  

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h4 style="margin-top:5px"><i class="fa fa-clock-o global-radius"></i> ΦΕΥΓΩ: <i>
                                    <a href="#" onclick="openTime()">όρισε ώρα</a></i></h4>
                                    <div id="times" style="display: none;">

                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker'>
                                                    <input type='text' name="date" class="form-control" />
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                            </div>
                                        </div>
                                        
                                        <script>
                                            $('#datetimepicker').datetimepicker({
                                                locale: 'el', 
                                                format:'MM/DD/YYYY HH:mm:ss',
                                                minDate: new Date()
                                            });
                                            </script>


                                        <script>
                                            function openTime() {
                                              var x = document.getElementById("times");
                                              if (x.style.display === "none") {
                                                    $("#times").slideDown("slow");
                                                x.style.display = "block";
                                              } else {
                                                x.style.display = "none";
                                              }
                                            }
                                        </script>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h4><i class="fa fa-cogs global-radius"></i> <i><a href="#" onclick="openPrefs()">Προτιμήσεις</a></i></h4>
                                    <div id="prefs"  style="display: none;">
                                        <div class="card">
                                                <ul>
                                                    <li style="font-size: 13px;">
                                                        <label>
                                                            <input type="radio" class="option-input radio" name="radio" value="radio1" checked/>
                                                            Βέλτιστη Διαδρομή
                                                        </label>                    
                                                    </li>
                                                    <li style="font-size: 13px;">
                                                        <label>
                                                            <input type="radio" class="option-input radio" name="radio" value="radio2"/>
                                                            Διαδρομή με τις λιγότερες αλλαγές
                                                          </label>
                                                    </li>
                                                    <li style="font-size: 13px;">
                                                        <label>
                                                            <input type="radio" class="option-input radio" name="radio" value="radio3"/>
                                                            Διαδρομή με το λιγότερο περπάτημα
                                                          </label>
                                                    </li>
                                                    <li style="font-size: 13px;">
                                                        <label>
                                                            <input type="radio" class="option-input radio" name="radio" value="radio4"/>
                                                            Διαδρομή μόνο μέσω λεωφορειακών γραμμών
                                                          </label>
                                                    </li>
                                                </ul>
                                    </div>

                                    <script>
                                        function openPrefs() {
                                          var x = document.getElementById("prefs");
                                          if (x.style.display === "none") {
                                                $("#prefs").slideDown("slow");
                                            x.style.display = "block";
                                          } else {
                                            // $("#prefs").slideUp();
                                            x.style.display = "none";
                                          }
                                        }
                                    </script>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-lg-offset-12 text-center">
                                    <button type="submit" value="SEND" style="margin-left:10px;"id="submit1" class="btn btn-light btn-radius btn-brd grd1 btn-block">Πάμε!</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                    

                <div class="col-md-8">
                    <div id="map"></div>
                    <div id="directions-panel"></div>
                </div>
            
            </div>
            
        </div>
    </div>
    
    <!-- end of SECTION -->

    <!--FOOTER-->
    <?php include 'utils/footer.php'; ?>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxGFJJ5M8-O_JCjSR-Ib5U_53P4Hpj2uk&libraries=places&language=el&callback=initAutocomplete"></script>
    <script>
        function calcRoute() {
            initMap();

            var directionsService = new google.maps.DirectionsService();
            var directionsRenderer = new google.maps.DirectionsRenderer();

            directionsRenderer.setMap(map);
            directionsRenderer.setPanel(document.getElementById('directions-panel'));

            var dirRequest = {
                origin: <?php echo "\"".$start."\"";?>,
                destination: <?php echo "\"".$end."\"";?> ,
                travelMode: 'TRANSIT',
                transitOptions: {
                <?php
                    if($radio != "1") {
                        if($radio == "radio2")
                            echo " routingPreference: ['FEWER_TRANSFERS'], ";
                        if($radio == "radio3")
                            echo " routingPreference: ['LESS_WALKING'], ";
                        if($radio == "radio4")
                            echo " modes: ['BUS'], ";
                    }
                    if($date !="1")
                        echo "departureTime: new Date(\"".$date."\")";
                ?>
                }
            };
                
            directionsService.route(dirRequest, function(dirResult, status2) {
                if (status2 == 'OK') {
                    directionsRenderer.setDirections(dirResult);
                }
                else {
                    window.alert('Directions request failed due to ' + status2 + ' ' + lat1 + ' ' + long1 + ' ' + lat2 + ' ' + long2);
                }   
            });
        }
    </script>

</body>
</html>