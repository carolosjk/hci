<?php

/* First start the Session */
session_start();

// remove user from db
require('db_connect.php');

$cur_usr = $_SESSION['user_id'];
$query = "DELETE FROM `users` WHERE `users`.`email` = '$cur_usr'";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));

mysqli_close($connection);

/* Unset all $_SESSION variables */
$_SESSION = array();

/* Clear the Session Cookie */
$cookie_par = session_get_cookie_params();
setcookie(session_name(), '', time() - 86400, $cookie_par['path'], $cookie_par['domain'], $cookie_par['secure'], $cookie_par['httponly']);

/* Destroy the session data */
session_destroy();

header('Location: ../index.php');
?>