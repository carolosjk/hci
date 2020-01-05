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
    <title>ΟΑΣΑ Κατάσταση Μέσων</title>  
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.1/moment-with-locales.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/d004434a5ff76e7b97c8b07c01f34ca69e635d97/src/js/bootstrap-datetimepicker.js"></script>

    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/d004434a5ff76e7b97c8b07c01f34ca69e635d97/build/css/bootstrap-datetimepicker.css" rel="stylesheet">

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
    <?php include 'utils/header.php'; ?>

    <div class="all-title-box">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Κατάσταση μέσων</h2>
				</div>
			</div>
		</div>
	</div>

    <div class="about-box">
		<div class="container">
                <nav id="breadcrumbs">
                    <ul>
                        <li><a href="index.php"><i class="fa fa-home global-radius fa-lg"></i></a></li>
                        <li>Κατάσταση μέσων</li>
                    </ul>
                </nav>
                
                <div class="col-md-12">
                    <div id="message" class="hide" role="alert">
                        <div id="content"></div>
                    </div>
                </div>

            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-pills nav-fill" id="mynav">
                        <li class="active" style="width:33%"><a data-toggle="pill" href="#now">Τώρα</a></li>
                        <li style="width:33%"><a data-toggle="pill" href="#week">Αυτή την εβδομάδα</a></li>
                        <li style="width:33%"><a data-toggle="pill" onclick="getCalendar()">Επιλογή ημερομηνίας</a>
                            <div id="calendar" style="display:none;">
                                <div class="form-group">
                                    <div class='input-group date' id='datetimepicker'>
                                        <input type='text' class="form-control" />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                <script>
                                    $('#datetimepicker').datetimepicker({
                                        locale: 'el',
                                        format: 'DD/MM/YYYY',
                                        minDate: new Date()});
                                </script>
                
                                <script>
                                    function getCalendar() {
                                      var x = document.getElementById("calendar");
                                      if (x.style.display === "none") {
                                            $("#calendar").slideDown("slow");
                                        x.style.display = "block";
                                      } else {
                                        x.style.display = "none";
                                      }
                                    }
                                </script>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row" style="margin-top: 20px;">
                <div class="col-md-4 wow slideInLeft hidden-xs hidden-sm">
                    <div class="contact_form">
                        <h3>Αναζήτηση Γραμμής</h3>
                        <form id="contactform1" class="row" name="contactform" method="post">
                            <fieldset class="row-fluid">
                                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                    
                                    <!--<select name="select_bus" id="select_bus" class="selectpicker form-control" data-style="btn-white" data-live-search="true">-->
                                    <select name="select_bus" id="select_bus" class="form-control" data-style="btn-white" data-live-search="true">
                                    <option selected="" value="0">Επιλέξτε γραμμή</option>
                                        <?php  

                                        require('php_utils/db_connect.php');
                                        $sql = mysqli_query($connection, "SELECT * FROM `buses`");
                                        while ($row = $sql->fetch_assoc()){
                                            echo "<option value=". $row['id'] .">" . $row['id'] . " : " . $row['start'] . " - " . $row['end'] . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-lg-offset-8 text-center">
                                    <input type="submit" value=">>" name="submit" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block" onclick="selectedBus(event)">
                                </div>

                                <script>
                                    function selectedBus(event) {
                                        event.preventDefault();

                                        var selected = $('#select_bus option:selected').text();
                                        var date = $("#datetimepicker").find("input").val();
                                        var number = selected.split(' : ')[0];

                                        if (number == 131 && date == "15/02/2020") {
                                            $('#message').removeClass('hide').addClass('alert alert-danger alert-dismissible').slideDown().show();
                                            $('#content').html('<strong>Προσοχή!</strong> Το λεωφορείο 131 εκτός υπηρεσίας στις 15/02/2020. <button type="button" class="close" data-dismiss="alert">&times;</button>');
                                            return;
                                        }

                                        var $activeLi = $('#mynav li.active');
                                        var activeId = $activeLi.children('a').attr('href').substr(1);
                                        if (number == 250 && activeId == "week") {
                                            $('#message').removeClass('hide').addClass('alert alert-danger alert-dismissible').slideDown().show();
                                            $('#content').html('<strong>Προσοχή!</strong> Το λεωφορείο 250 εκτός υπηρεσίας αυτή την εβδομάδα. <button type="button" class="close" data-dismiss="alert">&times;</button>');
                                        }
                                    }
                                </script>
                            </fieldset>
                        </form>
                    </div>    
                </div>


                <div class="col-md-8 wow slideInRight hidden-xs hidden-sm">
                    <div id="map"></div>
                </div>

            </div>
        </div>
    </div>

    <!--FOOTER-->
    <?php include 'utils/footer.php'; ?>

</body>
</html>