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

    <!-- HEADER -->
    <?php include 'utils/header.php'; ?>

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
                                            <select name="select_bus" id="select_bus" class="form-control" data-style="btn-white" data-live-search="true">
                                            <!--<input type="text" name="line" id="line" class="selectpicker form-control" style="margin-top:5px;" placeholder="">-->
                                                <?php  

                                                    require('php_utils/db_connect.php');
                                                    $sql = mysqli_query($connection, "SELECT * FROM `buses`");
                                                    while ($row = $sql->fetch_assoc()){
                                                        echo "<option value=\"" . $row['id'] . "\">" . $row['id'] . " : " . $row['start'] . " - " . $row['end'] . "</option>";
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                            <h4>ή διεύθυνση:</h4>
                                            <input type="text" name="address1" id="address1" class="form-control" style="margin-top:5px;" placeholder="">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-lg-offset-8 text-center">
                                            <!--<button type="submit" value=">>" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">>></button>-->
                                            <input type="submit" value=">>" name="submit1" id="submit1" class="btn btn-light btn-radius btn-brd grd1 btn-block" onclick="selectedLine(event)">

                                            <script>
                                                function selectedLine(event) {
                                                    event.preventDefault();
                                                    var selected = $('#select_bus option:selected').text();
                                                    //var selectedNum = selected.split(' : ')[0];
                                                    window.location.hash = 'lineDetails_'+selected;
                                                    $(".item").empty();

                                                    $("#lineInfo").slideDown();

                                                    changeLineInfo(selected);
                                                }
                                            </script>

                                            <script>
                                                function changeLineInfo(selected) {
                                                    var number = selected.split(' : ')[0];
                                                    var h = 'Πληροφορίες γραμμής: ' + selected + '<i class="fa fa-heart" style="float:right; line-height:25px"></i>';
                                                    document.getElementById("infoTitle").innerHTML = h;
                                                    //document.getElementById("option1").innerHTML = number;
                                                    //document.getElementById("option2").innerHTML = number;
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
                                            <select name="select_station" id="select_station" class="form-control" data-style="btn-white" data-live-search="true">
                                                <?php  

                                                require('php_utils/db_connect.php');
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

                <div id="lineInfo">
                    <div class="col-md-8">
                        <h3 style="text-align: left; border-bottom:solid 1px #e1e1e1;" id="infoTitle"></h3>
                        <div id="map" style="margin-top:20px"></div>

                        </br>
                        <ul class="nav nav-pills nav-fill" id="direction_nav">
                            <li style="width:100%"><a data-toggle="pill">Κατεύθυνση</a>
                        
                            <select name="direction" id="direction" class="form-control" data-style="btn-white">
                                <option value="option1" id="option1">
                                    <?php
                                        /*if(isset($_POST['submit1'])){   //doesn't work
                                            $selected_val = $_POST['select_bus'];
                                            echo "You have selected :" .$selected_val;
                                            
                                            $sql = mysqli_query($connection, "SELECT * FROM `buses` where id = '$selected_val'");
                                            $row = $sql->fetch_assoc();
                                            echo $row['start'] . " - " . $row['end'];
                                        }
                                        else
                                            echo "You haven't selected";*/
                                    ?>
                                </option>
                                <option value="option2" id="option2"></option>
                            </select>
                            </li>
                        </ul>

                        </br>
                        <ul class="nav nav-pills nav-fill" id="schedule_nav">
                            <li class="active" style="width:33%"><a data-toggle="pill" href="#weekday">Καθημερινή</a></li>
                            <li style="width:33%"><a data-toggle="pill" href="#saturday">Σάββατο</a></li>
                            <li style="width:33%"><a data-toggle="pill" href="#sunday">Κυριακή</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="weekday" class="tab-pane fade in active">
                                <?php
                                    /*require('php_utils/db_connect.php');
                                    if(isset($_POST['submit1'])){   //doesn't work
                                        $selected_val = $_POST['select_bus'];
                                        echo "You have selected :" .$selected_val;

                                        $sql = mysqli_query($connection, "SELECT * FROM `bustimetable` WHERE day = 'weekday' and id = '$selected_val'");
                                        echo "<ul class=\"hours\">";
                                        while ($row = $sql->fetch_assoc()){
                                            echo "<li>" . $row['time'] . "</li>";
                                        }
                                        echo "</ul>";
                                    }
                                    else
                                        echo "You haven't selected";*/
                                ?>
                            </div>
                            <div id="saturday" class="tab-pane fade in">
                                <h2>Saturday</h2>
                            </div>
                            <div id="sunday" class="tab-pane fade in">
                                <h2>Sunday</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--END OF SECOND SECTION-->

    <!--FOOTER-->
    <?php include 'utils/footer.php'; ?>

</body>
</html>