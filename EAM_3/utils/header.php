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
                    <a class="navbar-brand" href="index.php"><img src="images/logos/oasa_logo2.png" alt="image"></a>
                </div>
                <!--end of NAV HEADER-->

                <!--NAV-BAR-->
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class="active"' ?> href="index.php">Αρχική</a></li>
                        <li><a <?php if (basename($_SERVER['PHP_SELF']) == 'status.php') echo 'class="active"' ?> href="status.php">Κατάσταση Μέσων</a></li>
                        <li><a <?php if (basename($_SERVER['PHP_SELF']) == 'maps.php') echo 'class="active"' ?> href="maps.php">Χάρτες</a></li>
                        <li class="dropdown" >
                            <a href="tickets.php" class="dropbtn">Εισιτήρια-Κάρτες</a>
                            <div class="dropdown-content">
                                <a href="ticket_maps.php">Σημεία Έκδοσης/Επαναφόρτισης</a>
                                <a href="ticket_prices.php">Κόμιστρα Εισιτηρίων-Καρτών</a>
                                <a href="tickets_purchase.php">Online Αγορά Εισιτηρίων</a>
                            </div>
                        </li>
                        <li class="dropdown" >
                            <a href="accesibility.php" <?php if (basename($_SERVER['PHP_SELF']) == 'accesibility.php') echo 'class="active"' ?> class="dropbtn">Προσβασιμότητα</a>
                            <div class="dropdown-content">
                                <a href="acs_instrc.php">Οδηγίες Πρόσβασης</a>
                                <a href="acs_points.php">Προσβάσιμα Σημεία</a>
                                <a href="acs_news.php">Ανακοινώσεις</a>
                            </div>
                        </li> 
                        <li class="dropdown" >
                            <a <?php if (basename($_SERVER['PHP_SELF']) == 'about.php') echo 'class="active"' ?> href="about.php" class="dropbtn">Οργανισμός ΟΑΣΑ</a>
                            <div class="dropdown-content">
                                <a href="news.php">Νέα-Ανακοινώσεις</a>
                                <a href="org.php">Προφίλ Οργανισμού</a>
                            </div>
                        </li>   
                        <li><a <?php if (basename($_SERVER['PHP_SELF']) == 'contact.php') echo 'class="active"' ?> href="contact.php">Επικοινωνία</a></li>
                        <li class="search-option">
                            <button class="search tran3s dropdown-toggle" id="searchDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search" aria-hidden="true"></i></button>
                            <form action="#" class="p-color-bg dropdown-menu tran3s" aria-labelledby="searchDropdown">
                                <input type="text" placeholder="Αναζήτηση...">
                                <button class="p-color-bg"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </li> 
                        <!-- <button class="login-trigger" onclick="javascript:$('#myModal').modal('show');"><i class="fa fa-user" aria-hidden="true"></i></button> -->
                        <li class="dropdown" id="loginDropdown">
                            <div class="loginSet">
                                <button class="login-trigger" onclick="window.open('userpass.php', '_self')"><i class="fa fa-user" aria-hidden="true"></i></button>
                                <div style='display:inline;' id="loginButtonName" >
                                <?php
                                    if ( isset( $_SESSION['user_id']))
                                    {
                                    echo $_SESSION['name'];
                                    }
                                    else{
                                        echo "Σύνδεση";
                                    }
                                    ?>
                            </div>
                            </div>
                            <div class="dropdown-content" style="right:0" >
                                <?php
                                    if ( isset( $_SESSION['user_id']))
                                    {
                                    echo "Kαλωσόρισες "; 
                                    echo $_SESSION['name'];
                                    echo "
                                            <div id=\"header_DIV_11\">
                                                <ul id=\"header_UL_12\">
                                                    <li id=\"header_LI_13\">
                                                        <a href=\"userProfile.php\" rel=\"nofollow\" id=\"header_A_14\">Λογαριασμός</a>
                                                    </li>
                                                    <li id=\"header_LI_15\">
                                                        <a href=\"php_utils/logout.php\" rel=\"nofollow\" id=\"header_A_16\">Αποσύνδεση</a>
                                                    </li>
                                                </ul>
                                            </div>";
                                    }
                                    else{
                                        echo "<a href=\"userpass.php\">Σύνδεση</a>";
                                        echo "<a href=\"userpass.php#signin\">Εγγραφή</a>";
                                    }
                                ?>
                            </div>
                        </li>   
                        <!-- <button class="login-trigger" onclick="window.open('userpass.php', '_self')"><i class="fa fa-user" aria-hidden="true"></i></button> -->
                    </ul>
                </div>
                <!--end of NAV-BAR-->
            </div>
        </nav>
    </header>