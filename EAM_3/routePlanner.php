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
					<h2>Εύρεση Διαδρομής</h2>
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
					<li>Εύρεση Διαδρομής</li>
				</ul>
            </nav>
            <div class="row" style="float:left;width:200;">
            <div class="col-md-4 wow slideInLeft hidden-xs hidden-sm" style = "visibility: visible; animation-name: slideInLeft;">
            <div  style="float:left;width:200" id="routeFind" class="contact_form">
                        <h3><i class="fa fa-map-marker grd1 global-radius"></i> ΒΡΕΣ NEA ΔΙΑΔΡΟΜΗ</h3>
                        <form action="routePlanner.php" id="contactform1" class="row" name="contactform" method="post">
                            <fieldset class="row-fluid">
                                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                    <script type="text/javascript">
                                        function initAutocomplete() {
                                            // Create the autocomplete object, restricting the search to geographical
                                            // location types.
                                            autocomplete = new google.maps.places.Autocomplete(
                                                /** @type {!HTMLInputElement} */(document.getElementById('input')),
                                                {types: ['geocode']});

                                            // When the user selects an address from the dropdown, populate the address
                                            // fields in the form.
                                            autocomplete.addListener('place_changed', fillInAddress);
                                        }

                                        function fillInAddress() {
                                            // Get the place details from the autocomplete object.
                                            var place = autocomplete.getPlace();

                                        }
                                        </script>
                                        <input name="start" class="form-control" placeholder="Από" type="text" id="input" />  

                                    <!-- <select name="select_station" id="select_station" class="selectpicker form-control" data-style="btn-white" data-live-search="true"> -->
                                    <!-- <select name="start" data-live-search="true" title="Από" data-live-search-placeholder="Επιλέξτε σημείο εκκίνησης" class="form-control">
                                        <option selected disabled hidden value=1>Από</option> -->
                                        <?php  

                                        // require('php_utils/db_connect.php');
                                        // $sql = mysqli_query($connection, "SELECT * FROM `stations`");
                                        // while ($row = $sql->fetch_assoc()){
                                        //     echo "<option ";
                                        //     if($row['station'] == $start) echo "selected=\"selected\"";
                                        //     echo "  value=\"" . $row['station'] . "\">" . $row['station'] . "</option>";
                                        // }
                                        ?>
                                    <!-- </select> -->
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                <select name="end" data-live-search="true" title="Προς" data-live-search-placeholder="Επιλέξτε προορισμό" class="form-control">
                                        <option selected disabled hidden value=1>Προς</option>
                                        <?php  

                                        require('php_utils/db_connect.php');
                                        $sql = mysqli_query($connection, "SELECT * FROM `stations`");
                                        while ($row = $sql->fetch_assoc()){
                                            echo "<option ";
                                            if($row['station'] == $end) echo "selected=\"selected\"";
                                            echo " value=\"" . $row['station'] . "\">" . $row['station'] . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h4 style="margin-top:5px"><i class="fa fa-clock-o global-radius"></i> ΦΕΥΓΩ: <i>
                                    <a href="#" onclick="openTime()">όρισε ώρα</a></i></h4>
                                    <div id="times" style="display: none;">

                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker1'>
                                                    <input type='text' class="form-control" />
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                            </div>
                                        </div>
                                        
                                        <script>
                                            $('#datetimepicker1').datetimepicker({locale: 'el', minDate: new Date()});
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
                                                            <input type="radio" class="option-input radio" name="example" checked/>
                                                            Βέλτιστη Διαδρομή
                                                        </label>                    
                                                    </li>
                                                    <li style="font-size: 13px;">
                                                        <label>
                                                            <input type="radio" class="option-input radio" name="example" />
                                                            Διαδρομή με τις λιγότερες αλλαγές
                                                          </label>
                                                    </li>
                                                    <li style="font-size: 13px;">
                                                        <label>
                                                            <input type="radio" class="option-input radio" name="example" />
                                                            Διαδρομή με το λιγότερο περπάτημα
                                                          </label>
                                                    </li>
                                                    <li style="font-size: 13px;">
                                                        <label>
                                                            <input type="radio" class="option-input radio" name="example" />
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
                                    <button type="submit" value="SEND" id="submit1" class="btn btn-light btn-radius btn-brd grd1 btn-block">Πάμε!</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                    </div>
                    
                                        
            <div class="column">
                <div id="routeMap"  style=" margin-left:10px" >
                    <?php
                    if($start != "1" and $end !="1")
                    echo "<iframe src=\"https://www.google.com/maps/embed/v1/directions".
                        "?key=".$_SESSION['APIkey'].
                        "&origin=".$start.
                        "&destination=".$end.
                        "&mode=transit&language=el\" width=\"700\" height=\"600\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"true\"></iframe>";
                    ?>
                </div>
            </div>
            
            </div>
        </div>
    </div>

    
    <!-- end of SECTION -->

    <!--FOOTER-->
    <?php include 'utils/footer.php'; ?>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxGFJJ5M8-O_JCjSR-Ib5U_53P4Hpj2uk&libraries=places&callback=initAutocomplete" async defer></script>

</body>
</html>