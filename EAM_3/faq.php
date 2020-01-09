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
    <title>ΟΑΣΑ Συχνές Ερωτήσεις</title>  
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
					<h2>Συχνές Ερωτήσεις</h2>
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
                    <li>Συχνές Ερωτήσεις</li>
                </ul>
            </nav>

        </br>

            <div class="section-title text-center">
                <h3>Απαντάμε στις ερωτήσεις σας!</h3>
            </div>

            <div class="accordion" id="accordion-tab-1">
                <div class="card">
                    <div class="card-header" id="accordion-tab-1-heading-1">
                        <h2 style="font-size: 70%;">
                            <button <?php if (!isset($_GET['redtckt'])) { echo 'class="btn btn-link collapsed" aria-expanded="false"'; } else { echo 'class="btn btn-link" aria-expanded="true"'; } ?> type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-controls="accordion-tab-1-content-1">
                                Δικαιούμαι μειωμένη τιμή;
                            </button>
                        </h2>
                    </div>
                    <div <?php if (!isset($_GET['redtckt'])) { echo 'class="collapse" aria-expanded="false"'; } else { echo 'class="collapse in" aria-expanded="true"';}?> id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                        <div class="card-body">
                            <p>Οι παρακάτω κατηγορίες επιβατών, σύμφωνα με την κείμενη νομοθεσία δικαιούνται να εκδίδουν εισιτήρια και κάρτες μειωμένης τιμής με την υποχρεωτική επίδειξη του κατά περίπτωση δικαιολογητικού (ακαδημαϊκή ταυτότητα, φοιτητικό πάσο, μαθητικό πάσο, κάρτα πολυτέκνων, αστυνομική Ταυτότητα, κτλ).
                            <br><br><b>- Φοιτητές – Σπουδαστές Τριτοβάθμιας Εκπαίδευσης:</b> Οι φοιτητές - σπουδαστές της τριτοβάθμιας εκπαίδευσης είναι δικαιούχοι μειωμένου κομίστρου για όλα τα Μ.Μ.Μ. αρμοδιότητας Ο.Α.Σ.Α. με την επίδειξη της Ακαδημαϊκής Ταυτότητας ( η οποία αντικατέστησε το Δελτίο Ειδικού Εισιτηρίου – πάσο). Στις κατηγορίες των δικαιούχων φοιτητών και σπουδαστών δεν περιλαμβάνονται οι φοιτητές του Ελληνικού Ανοικτού Πανεπιστημίου (Γνωμοδότηση 99/2001 του Νομικού Συμβουλίου του Κράτους). Επιπρόσθετα, δεν δικαιούνται μειωμένο εισιτήριο οι φοιτητές - σπουδαστές που φοιτούν σε ιδιωτικά πανεπιστήμια - κολέγια.
                            <br><br><b>- Μαθητές Πρωτοβάθμιας & Δευτεροβάθμιας Εκπαίδευσης:</b> Οι μαθητές πρωτοβάθμιας και δευτεροβάθμιας εκπαίδευσης άνω των 18 ετών είναι δικαιούχοι μειωμένου κομίστρου για όλα τα Μ.Μ.Μ. αρμοδιότητας Ο.Α.Σ.Α. κατά τη διάρκεια του Σχολικού Έτους, με την επίδειξη του Δελτίου Μαθητικού Εισιτηρίου, όταν αυτό χορηγείται, μετά την υπογραφή Σύμβασης μεταξύ του ΟΑΣΑ και του Υπουργείου Παιδείας βάσει του νόμου 3920/2011. Τα Δ.Μ.Ε. χορηγούνται στους δικαιούχους μαθητές αποκλειστικά από τη Διεύθυνση του Σχολείου τους.
                            <br><br><b>- Σπουδαστές Δημόσιων Ι.Ε.Κ.:</b> Οι σπουδαστές Δημοσίων Ι.Ε.Κ. είναι δικαιούχοι μειωμένου κομίστρου για όλα τα Μ.Μ.Μ. αρμοδιότητας Ο.Α.Σ.Α μέχρι την ηλικία των 22 ετών με την επίδειξη Αστυνομικής ταυτότητας και Δελτίου Ειδικού Εισιτηρίου όταν αυτό χορηγείται, μετά την υπογραφή Σύμβασης μεταξύ του ΟΑΣΑ και του Υπουργείο Παιδείας βάσει του νόμου 3920/2011.
                            <br><br><b>- Φοιτητές Σχολών Τριτοβάθμιας Εκπαίδευσης ή Πανεπιστημίων της αλλοδαπής:</b> Φοιτητές Σχολών Τριτοβάθμιας Εκπαίδευσης ή Πανεπιστημίων της αλλοδαπής μέχρι την ηλικία των 25 ετών με την επίδειξη Φοιτητικής Ταυτότητας «Student Card – University ID» και Διαβατηρίου ή Ταυτότητας.
                            <br><br><b>- Πολύτεκνοι και μέλη των οικογενειών τους:</b> Οι πολύτεκνοι και τα μέλη των οικογενειών τους είναι δικαιούχοι μειωμένου κομίστρου για όλα τα Μ.Μ.Μ. αρμοδιότητας Ο.Α.Σ.Α. με την επίδειξη του ισχύοντος και θεωρημένου στο πίσω μέρος βιβλιαρίου πολυτέκνων, το οποίο χορηγείται στο δικαιούχο από την Ανώτατη Συνομοσπονδία Πολυτέκνων Ελλάδος. Σημειώνεται ότι οι οικογένειες με τρία τέκνα δεν εμπίπτουν στην κατηγορία των πολυτέκνων και συνεπώς δεν είναι δικαιούχοι μειωμένου κομίστρου.
                            <br><br><b>- Παιδιά ηλικίας 7 έως 12 ετών:</b> Όταν η έκδοση κομίστρου πραγματοποιείται με την παρουσία του παιδιού, δεν απαιτείται η επίδειξη δικαιολογητικού, καθώς η φυσική παρουσία του παιδιού πιστοποιεί ότι ανήκει στη συγκεκριμένη κατηγορία δικαιούχων. Το ίδιο ισχύει και κατά τον έλεγχο κομίστρου. Στην περίπτωση που η έκδοση κομίστρου πραγματοποιείται από τρίτο άτομο χωρίς την παρουσία του παιδιού, απαιτείται η επίδειξη δικαιολογητικού που να πιστοποιεί την ηλικία του. Καθώς στη συγκεκριμένη ηλικία δεν εκδίδεται αστυνομική ταυτότητα, επιδεικνύεται αντ’ αυτής βιβλιάριο ασθενείας, διαβατήριο ή πιστοποιητικό γέννησης.
                            <br><br><b>- Νέοι ηλικίας 13 έως 18 ετών με την επίδειξη Αστυνομικής ταυτότητας.</b>
                            <br><b>- Άτομα ηλικίας άνω των 65 ετών με την επίδειξη Αστυνομικής ταυτότητας.</b></p>  
                        </div>
                    </div>
                </div>
                <hr class="hr4">
                <div class="card">
                    <div class="card-header" id="accordion-tab-1-heading-2">
                        <h2 style="font-size: 70%;">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2">
                                Τα εισιτήρια αξίας 1,40 και 0,60 ευρώ εξακολουθούν να ισχύουν για 90 λεπτά;
                            </button>
                        </h2>
                    </div>
                    <div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                        <div class="card-body">
                            <p>Βεβαίως, τα εισιτήρια ισχύουν για 90 λεπτά από την πρώτη επικύρωσή τους, ανεξάρτητα από τις ενδιάμεσες επιβιβάσεις/επικυρώσεις.</p>
                        </div>
                    </div>
                </div>
                <hr class="hr4">
                <div class="card">
                    <div class="card-header" id="accordion-tab-1-heading-3">
                        <h2 style="font-size: 70%;">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-3" aria-expanded="false" aria-controls="accordion-tab-1-content-3">
                                Ποιες είναι οι νέες κάρτες απεριορίστων διαδρομών και οι τιμές τους;
                            </button>
                        </h2>
                    </div>
                    <div class="collapse" id="accordion-tab-1-content-3" aria-labelledby="accordion-tab-1-heading-3" data-parent="#accordion-tab-1">
                        <div class="card-body">
                            <p> Οι νέες κάρτες είναι για όλα τα μέσα και προωθούν τη συνδυαστική χρήση των μέσων για σύντομες και αξιόπιστες μετακινήσεις.</p>
                            <p>Συγκεκριμένα, υπάρχουν 2 τύποι μηνιαίων καρτών:</p>
                            <ol>
                                <li>για όλα τα μέσα εκτός αεροδρόμιου & Χ80: 30€ (μειωμένη 15€),</li>
                                <li>για όλα τα μέσα και για το αεροδρόμιο (εκτός Χ80): 45€ (μειωμένη 23€).</li>
                            </ol>    
                        </div>
                    </div>
                </div>
                <hr class="hr4">
                <div class="card">
                    <div class="card-header" id="accordion-tab-1-heading-4">
                        <h2 style="font-size: 70%;">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#accordion-tab-1-content-4" aria-expanded="false" aria-controls="accordion-tab-1-content-4">
                                Είμαι δικαιούχος μειωμένης τιμής. Τι χρειάζεται να εκδώσω για να μετακινούμαι με τα μέσα;
                            </button>
                        </h2>
                    </div>
                    <div class="collapse" id="accordion-tab-1-content-4" aria-labelledby="accordion-tab-1-heading-4" data-parent="#accordion-tab-1">
                        <div class="card-body">
                            <p>Προσωποποιημένη κάρτα, στην οποία μπορείτε να φορτώσετε όποιον τύπο εισιτηρίου μειωμένης τιμής σας εξυπηρετεί, δηλαδή μηνιαίες ή άλλες χρονικές κάρτες αλλά και
                                 εισιτήρια μειωμένης τιμής ή χρηματική αξία έως 50 ευρώ, από την οποία αφαιρείται η αξία ενός μειωμένου εισιτηρίου κάθε φορά που μετακινήστε.</p>  
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