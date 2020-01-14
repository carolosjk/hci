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
    <title>ΟΑΣΑ Προσβάσιμα Σημεία</title>  
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
					<h2>Προσβάσιμα Σημεία</h2>
				</div>
			</div>
		</div>
    </div>

    <!-- SECTION -->
    <div class="about-box">
        <div class="container ">
            <!-- Breadcrumbs -->
            <nav id="breadcrumbs">
                <ul>
                    <li><a href="index.php"><i class="fa fa-home global-radius fa-lg"></i></a></li>
                    <li><a href="accesibility.php">Προσβασιμότητα</a></li>
                    <li>Προσβάσιμα Σημεία</li>
                </ul>
            </nav>


        </br>
        </br>
        <div>
            <p style="text-align: center;">
                Παρακαλώ να ενημερώνεστε σχετικά με την κατάσταση των προσβάσιμων σημείων <a href="acs_news.php" style="color: #00599C;"> εδώ</a> 
                διότι, μεν σε κάθε σταθμό του μετρό υπάρχει τρέχουσα σχετική ηχιτική ενημέρωση, αλλά όχι και στις στάσεις των λεωφορείων/τρόλει.  
            </p>
        </div>
        </br>
        </br>
            <div class="accordion" id="accordion-tab-1">
                <div class="card">
                    <div class="card-header" id="accordion-tab-1-heading-1">
                        <h2 style="font-size: 70%;">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1">
                                ΛΕΩΦΟΡΕΙΑ/ΤΡΟΛΕΙ:
                            </button>
                        </h2>
                    </div>
                    <div class="collapse" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                        <div class="card-body">
                            <p>
                                Για την καλύτερη εξυπηρέτηση των επιβατών αλλά και των ΑμεΑ, ο ΟΑΣΑ έχει τοποθετήσει στις παρακάτω στάσεις ειδικές προεξοχές για την ευκολότερη πρόσβαση των επιβατών στα οχήματα, Λεωφορεία και Τρόλει.
                                </br>
                                <?php  
                                    require('php_utils/db_connect.php');
                                    $sql = mysqli_query($connection, "SELECT * FROM `access_points`");
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
                                                $htmltable .=   "<td style='padding:0 20px 0 0;'>" . $value . "</td>"  . $delim ;
                                            }
                                            $htmltable .=   "</tr>"   . $delim ;
                                        }
                                        // closing table
                                        $htmltable .=   "</table>"   . $delim ; 
                                        // return
                                        return( $htmltable ) ; 
                                    }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
                <hr class="hr4">
                <div class="card">
                    <div class="card-header" id="accordion-tab-1-heading-3">
                        <h2 style="font-size: 70%;">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-3" aria-expanded="false" aria-controls="accordion-tab-1-content-3">
                                ΜΕΤΡΟ:
                            </button>
                        </h2>
                    </div>
                    <div class="collapse" id="accordion-tab-1-content-3" aria-labelledby="accordion-tab-1-heading-3" data-parent="#accordion-tab-1">
                        <div class="card-body">
                            <p> Όλοι οι σταθμοί του μετρό σε όλες τις γραμμές, διαθέτουν ανεκλυστήρες, πλήρεις προσβάσιμους στην είσοδο τους και έξοδο, που οδηγούν στις αποβάθρες των σταθμών.</p>
                            <?php  
                                    // require('php_utils/db_connect.php');
                                    // $sql = mysqli_query($connection, "SELECT * FROM `stations`");
                                    // echo sql_to_html_table( $sql, $delim="\n" );
                                    // mysqli_close($connection);
                            ?>
                        </div>
                    </div>
                </div>
                <hr class="hr4">
            </div>
        </div>
    </div>
    <!-- end of SECTION -->

    <!--FOOTER-->
    <?php include 'utils/footer.php'; ?>

</body>
</html>