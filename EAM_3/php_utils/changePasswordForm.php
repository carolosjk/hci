<?php  

require('db_connect.php');
session_start();

if (!isset($_POST)) exit();
if (isset($_POST['cur_pass']) and isset($_POST['pass1']) and isset($_POST['pass2']))
{

    if ($_POST['pass1'] != $_POST['pass2'])
    {
        header('Location: ../changePassword.php?error=passwordMatch');
    }

    // Assigning POST values to variables.
    $cur_pass = $_POST['cur_pass'];
    $pass1 = $_POST['pass1'];
    $username = $_SESSION['user_id'];


    // CHECK FOR THE RECORD FROM TABLE
    $query = "SELECT * FROM `users` WHERE email='$username' and password='$cur_pass'";
    
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $cur_mail = $_SESSION['user_id'];
        $query = "UPDATE `users` SET `password` = '$pass1' WHERE `users`.`email` = '$cur_mail'";
        $result = mysqli_query($connection, $query) or die(mysqli_error($connection));

        mysqli_close($connection);

        // echo "<fieldset>";
        // echo "<div id='success_page'>";
        // echo "<h1>Το email σας αλλάγθηκε επιτυχώς!</h1>";
        // echo "</div>";
        // echo "</fieldset>";

        // comment out to work with ajax, js
        // echo "<script> alert('Login Credentials Verified');</script>";
         header('Location: ../changePassword.php?success=1');

    }
    else
    {
        mysqli_close($connection);

        // comment out to work with ajax, js
        // echo "<script> alert('Ανεπιτυχής σύνδεση! Δοκιμάστε ξανά.');</script>";
        // appearance of blank page still occuring
        // echo "<script>setTimeout(function () {
        //     //Redirect with JavaScript
        //     window.location.href= 'userpass.php';
        //  }, 0); </script>";

        header('Location: ../changePassword.php?error=wrongPassword');
    }
}
?>