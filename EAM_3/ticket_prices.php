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
    <title>ΟΑΣΑ Τιμές</title>  
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
    <script src="//code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js" type="text/javascript"></script>

    <link rel="stylesheet" href="/css/magnify.css">
    <script src="/js/jquery.magnify.js"></script>

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.1/moment-with-locales.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/d004434a5ff76e7b97c8b07c01f34ca69e635d97/src/js/bootstrap-datetimepicker.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
					<h2>Τιμές Εισιτηρίων-Καρτών</h2>
				</div>
			</div>
		</div>
	</div>

    <div class="about-box" style="padding-bottom:10%;">
		<div class="container">
            <nav id="breadcrumbs">
                <ul>
                    <li><a href="index.php"><i class="fa fa-home global-radius fa-lg"></i></a></li>
                    <li><a href="tickets.php">Εισιτήρια-Κάρτες</a></li>
                    <li>Τιμές Εισιτηρίων-Καρτών</li>
                </ul>
            </nav>

            <div class="row" style="padding-top:2%;">
                <div class="col-md-3">
                    <ul class="nav nav-pills nav-stacked">
                    <li role="presentation" class="" style="width:100%"><a data-target="#tab-a" data-toggle="tab">Τιμή Εισιτηρίων για Όλα τα Μέσα</a></li>
                    <li role="presentation" style="width:100%"><a data-target="#tab-b" data-toggle="tab">Τιμή Εισιτηρίων βάσει Χρονικού Διαστήματος</a></li>
                    <li role="presentation" style="width:100%"><a data-target="#tab-c" data-toggle="tab">Τιμή Περιόδου Προσαρμογής στο Ήλεκτρονικό Εισιτήριο</a></li>
                    </ul>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane" id="tab-a" style="padding-left:30px;">
                            <h5 style="font-size:16px;"> Τιμές εισιτηρίων στα διάφορα μέσα που υπάγονται στον ΟΑΣΑ:</h5>
                            <br>
                            <?php  
                                require('php_utils/db_connect.php');
                                $sql = mysqli_query($connection, "SELECT * FROM `tickets`");
                                echo sql_to_html_table( $sql, $delim="\n" );
                                echo '<br><br>';

                                $sql = mysqli_query($connection, "SELECT * FROM `tickets_airport`");
                                echo sql_to_html_table( $sql, $delim="\n" );
                                echo '<br><br>';
                                
                                $sql = mysqli_query($connection, "SELECT * FROM `tickets_x80`");
                                echo sql_to_html_table( $sql, $delim="\n" );
                                echo '<br><br>';

                                mysqli_close($connection);
                            ?>
                            <h5 style="font-size:16px;"> Μάθετε <a href="faq.php?redtckt" target="_blank" rel="noopener noreferrer" style="color: #00599C;"> εδώ</a> αν δικαιούστε μειωμένη τιμή.<br>Αν επιθυμείτε να κάνετε αγορά/φόρτιση εισιτηρίου/ών, μπορείτε <a href="tickets_purchase.php" target="_blank" rel="noopener noreferrer" style="color: #00599C;"> εδώ.</a></h5>
                        </div>
                        <div class="tab-pane" id="tab-b" style="padding-left:30px;">
                            <h5 style="font-size:16px;">Παρακάτω παρατίθενται οι τιμές για εισιτήρια χρονικού διαστήματος 30, 90, 180 και 365 ημερών.<br><br>
                            Διακρίνονται περαιτέρω σε:<br>
                            <b> - αυτά που απευθύνονται σε όλα τα μέσα </b>, λεωφορεία (εκτός των γραμμών Express του Αεροδρομίου & της γραμμής Χ80), 
                            τρόλλευ, τραμ, ηλεκτρικός, μετρό (έως το σταθμό Κορωπίου) και ΤΡΑΙΝΟΣΕ που εξυπηρετέι το τμήμα Μαγούλα - Πειραιάς - Κωροπί.<br>
                            <b> - σε όλα τα μέσα από και προς το αεροδρόμιο </b>, δηλαδή όλα τα προαναφερόμενα συμπεριλαμβανομένου των γραμμών Express του Αεροδρομίου & της γραμμής Χ80.</h5>

                            <?php  
                                require('php_utils/db_connect.php');
                                $sql = mysqli_query($connection, "SELECT * FROM `timed_tickets`");
                                echo sql_to_html_table( $sql, $delim="\n" );

                                echo '<br><br> <h5 style="font-size:16px;">Για Τιμές μειωμένης τιμής:</h5>';
                                $sql = mysqli_query($connection, "SELECT * FROM `timed_tickets_red`");
                                echo sql_to_html_table( $sql, $delim="\n" );
                                echo '<br><h5 style="font-size:16px;"> Μάθετε <a href="faq.php?redtckt" target="_blank" rel="noopener noreferrer" style="color: #00599C;"> εδώ</a> αν δικαιούστε μειωμένη τιμή.<br>Αν επιθυμείτε να κάνετε αγορά/φόρτιση εισιτηρίου/ών, μπορείτε <a href="tickets_purchase.php" target="_blank" rel="noopener noreferrer" style="color: #00599C;"> εδώ.</a></h5>';

                                mysqli_close($connection);
                            ?>
                        </div>
                        <div class="tab-pane" id="tab-c" style="padding-left:30px;">
                            <h5 style="font-size:16px;">Η τρέχουσα τιμολογιακή πολιτική για τα μέσα αρμοδιότητας ΟΑΣΑ, αναφέρεται στο ΦΕΚ 126Β/ 28.01.2016. Η τιμολογιακή πολιτική  ισχύει ανεξάρτητα από την εγκατάσταση του νέου συστήματος, το οποίο έχει τη δυνατότητα να υποστηρίξει τους υπάρχοντες τύπους τιμής.
                            <br>Ταυτόχρονα, από τη Δευτέρα 20 Νοεμβρίου 2017 ξεκίνησε η νέα εκπτωτική πολιτική για την περίοδο προσαρμογής στο ηλεκτρονικό εισιτήριο.</h5>
                            <h5 style="font-size:16px;"> Μάθετε <a href="faq.php?redtckt" target="_blank" rel="noopener noreferrer" style="color: #00599C;"> εδώ</a> αν δικαιούστε μειωμένη τιμή.</h5>
                            </br>
                            <h5 style="font-size:16px;"> ΝΕΑ ΕΚΠΤΩΤΙΚΗ ΠΟΛΙΤΙΚΗ ΓΙΑ ΤΗΝ ΠΕΡΙΟΔΟ ΠΡΟΣΑΡΜΟΓΗΣ ΣΤΟ ΗΛΕΚΤΡΟΝΙΚΟ ΕΙΣΙΤΗΡΙΟ:</h5>
                            <?php  
                                    require('php_utils/db_connect.php');
                                    $sql = mysqli_query($connection, "SELECT * FROM `new_ticket_prices`");
                                    echo sql_to_html_table( $sql, $delim="\n" );
                                    mysqli_close($connection);

                                    function sql_to_html_table($sqlresult, $delim="\n")
                                    {
                                        // starting table
                                        $htmltable =  "<table>" . $delim ;   
                                        $counter   = 0 ;
                                        // putting in lines
                                        while( $row = $sqlresult->fetch_assoc())
                                        {
                                          if ( $counter===0 ) 
                                          {
                                            // table header
                                            $htmltable .=   "<tr>"  . $delim;
                                            foreach ($row as $key => $value ) {
                                                $htmltable .=   "<th style=' padding:0 20px 10px 0;'>" . $key . "</th>"  . $delim ;
                                            }
                                            $htmltable .=   "</tr>"  . $delim ; 
                                            $counter = 22;
                                          } 
                                            // table body
                                            $htmltable .=   "<tr>"  . $delim ;
                                            foreach ($row as $key => $value ) {
                                                $htmltable .=   "<td style='padding:0 20px 10px 0;'>" . $value . "</td>"  . $delim ;
                                            }
                                            $htmltable .=   "</tr>"   . $delim ;
                                        }
                                        // closing table
                                        $htmltable .=   "</table>"   . $delim ; 
                                        // return
                                        return( $htmltable ) ; 
                                    }
                            ?>
                            <h5 style="font-size:16px;"> Αν επιθυμείτε να κάνετε αγορά/φόρτιση εισιτηρίου/ών, μπορείτε <a href="tickets_purchase.php" target="_blank" rel="noopener noreferrer" style="color: #00599C;"> εδώ.</a></h5>
                        </div>      
                    </div>

                    <script>
                        $(document).ready( function()
                        {
                            function unactiveOther( source )
                            {
                                // Source element
                                var $sourceTabLink = $(source),
                                    $sourceTab = $sourceTabLink.parent('li');
                                    
                                // wrapper element
                                var activeNav = $sourceTab.closest('.multipleTabNav')
                                    // find all active
                                    .find('[role=presentation].active');

                                activeNav.each( function()
                                {
                                    // Get current active nav
                                    var curActiveNav = $(this),curActiveNavLink = curActiveNav.find('a');
                                    // inactive unmatched nav
                                    if ( curActiveNavLink.attr('data-target') !== $sourceTabLink.attr('data-target') ) { curActiveNav.removeClass('active'); }
                                    
                                })
                            }

                            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                            //console.log( e.target ); // newly activated tab
                            //console.log( e.relatedTarget );// previous active tab
                            unactiveOther( e.target );
                            })
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>

    <!--FOOTER-->
    <?php include 'utils/footer.php'; ?>

</body>
</html>