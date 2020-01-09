<?php
    session_start();
    if (!isset($_POST)) exit();

    header('Location: ../index.php');
?>