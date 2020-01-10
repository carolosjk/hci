<?php
    session_start();

    if (!isset($_POST)) exit();

    $action = $_POST['tkt'];
    header("Location: ../tickets_purchase.php?action=".$action."");
?>

