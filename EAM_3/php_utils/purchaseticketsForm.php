<?php
    session_start();

    if (!isset($_POST)) exit();

    var_dump($_POST);
    echo "<fieldset>";
	echo "<div id='success_page'>";
	echo "<h1 style='text-align:center;'>Η αγορά/φόρτιση των επιλεγμένων εισιτηρίων εκτελέστηκε επιτυχώς!</h1>";
	echo "<p style='text-align:center;'> Θα λάβετε σύντομα τα εισιτήριά σας και απόδειξη αυτών στην καταχωρημένη διεύθυνση email σας.</p>";
	echo "</div>";
	echo "</fieldset>";
?>