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
    <title>ΟΑΣΑ Σημεία έκδοσης/επαναφόρτισης</title>  
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
					<h2>Σημεία έκδοσης/επαναφόρτισης</h2>
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
                    <li>Σημεία έκδοσης/επαναφόρτισης</li>
                </ul>
            </nav>

            <div class="row" style="padding-top:2%;">
                <div class="col-md-3">
                    <ul class="nav nav-pills nav-stacked">
                    <li role="presentation" class="" style="width:100%"><a data-target="#tab-a" data-toggle="tab"> Σημεία έκδοσης προσωποποιημένων καρτών</a></li>
                    <li role="presentation" style="width:100%"><a data-target="#tab-b" data-toggle="tab"> Σημεία πώλησης και επαναφόρτισης καρτών/εισιτηρίων</a></li>
                    </ul>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane" id="tab-a" style="padding-left:30px;">
                            <div id="map"></div>
                        </div>
                        <div class="tab-pane" id="tab-b" style="padding-left:30px;">
                            <h3>Σημεία πώλησης και επαναφόρτισης καρτών/εισιτηρίων</h3>
                        </div>
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

    <!--FOOTER-->
    <?php include 'utils/footer.php'; ?>

    <script>
        function calcPersonalized() {
            initMap();

            var infowindow = new google.maps.InfoWindow();

            var icons = {
                bus: {
                    icon: '/uploads/symbol_bus.png'
                },
                metro: {
                    icon: '/uploads/symbol_metro.png'
                },
                tram: {
                    icon: '/uploads/symbol_tram.png'
                }
            };

            var locations = [
                <?php
                    require('php_utils/db_connect.php');
                    $sql = mysqli_query($connection, "SELECT * FROM `ticket_points`");
                    while ($row = $sql->fetch_assoc()) {
                        echo "{ ";
                        $id = $row['id'];
                        $type = $row['type'];
                        $lat = $row['latitude'];
                        $long = $row['longitude'];

                        echo "name: '" . $id . "', ";
                        echo "type: '" . $type . "', ";
                        echo "position: new google.maps.LatLng(" . $lat . ", " . $long . ")}, ";
                    }
                ?>
            ];
        
            function placeMarker(loc) {
            //for (var i = 0; i < locations.length; i++) {
                var marker = new google.maps.Marker({
                    map: map,
                    position: loc.position,
                    icon: icons[loc.type].icon
                });

                google.maps.event.addListener(marker, 'click', function() {
                    infowindow.close();
                    infowindow.setContent(loc.name);
                    infowindow.open(map, marker);
                });
            };

            locations.forEach(placeMarker);

        }
    </script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxGFJJ5M8-O_JCjSR-Ib5U_53P4Hpj2uk&libraries=places&callback=calcPersonalized"></script>
</body>
</html>