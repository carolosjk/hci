<?php  

require('db_connect.php');
session_start();

if (!isset($_POST)) exit();
if (isset($_POST['new_mail']))
{
    // Assigning POST values to variables.
    $new_mail = $_POST['new_mail'];

    // CHECK FOR THE RECORD FROM TABLE
    $query = "SELECT * FROM `users` WHERE email='$new_mail'";
    
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    $count = mysqli_num_rows($result);

    if ($count == 1) {

        mysqli_close($connection);

        // comment out to work with ajax, js
        // echo "<script> alert('Ανεπιτυχής σύνδεση! Δοκιμάστε ξανά.');</script>";
        // appearance of blank page still occuring
        // echo "<script>setTimeout(function () {
        //     //Redirect with JavaScript
        //     window.location.href= 'userpass.php';
        //  }, 0); </script>";

        header('Location: ../changeMail.php?error=duplicateMail');

    }
    else
    {
        $cur_mail = $_SESSION['user_id'];
        $query = "UPDATE `users` SET `email` = '$new_mail' WHERE `users`.`email` = '$cur_mail'";
        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
        
        $_SESSION['user_id'] = $new_mail;

        mysqli_close($connection);

        // echo "<fieldset>";
        // echo "<div id='success_page'>";
        // echo "<h1>Το email σας αλλάγθηκε επιτυχώς!</h1>";
        // echo "</div>";
        // echo "</fieldset>";

        // comment out to work with ajax, js
        // echo "<script> alert('Login Credentials Verified');</script>";
         header('Location: ../changeMail.php?success=1');
    }
}
?>