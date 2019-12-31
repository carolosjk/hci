<?php  

require('db_connect.php');

if (!isset($_POST)) exit();
if (isset($_POST['user_id']) and isset($_POST['user_pass']))
{
    // Assigning POST values to variables.
    $username = $_POST['user_id'];
    $password = $_POST['user_pass'];

    // CHECK FOR THE RECORD FROM TABLE
    $query = "SELECT * FROM `users` WHERE email='$username' and password='$password'";
    
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    $count = mysqli_num_rows($result);

    if ($count == 1) {

        session_start();
        $_SESSION['user_id'] = $username;
        $array = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $_SESSION['name'] = $array["name"];
        $_SESSION['surname'] = $array["surname"];
        $_SESSION['address'] = $array["address"];

        mysqli_close($connection);

        // comment out to work with ajax, js
        // echo "<script> alert('Login Credentials Verified');</script>";
        header('Location: ../index.php?success=1');
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

        header('Location: ../userpass.php?error=invalidcredentials');
    }
}
?>