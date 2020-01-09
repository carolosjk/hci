<?php  
 require('db_connect.php');

if (isset($_POST['username']) and isset($_POST['password1'])
and isset($_POST['password2'])  and isset($_POST['name'])
and isset($_POST['surname'])  and isset($_POST['address']))
{

    if (isset($_POST['username'])){

    // Assigning POST values to variables.
    $mail = $_POST['username'];

    // CHECK FOR THE RECORD FROM TABLE
    $query = "SELECT * FROM `users` WHERE email='$mail'";
    
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        //email already in use
        header('Location: ../userpass.php?error=emailinuse#signin');

    }else{
        // check if password match
        if ($_POST['password1'] != $_POST['password2'])
        {
            header('Location: ../userpass.php?error=passwordMatch');
        }
        else
        {
            // Assigning POST values to variables.
            $username = $_POST['username'];
            $password = $_POST['password1'];
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $address = $_POST['address'];

            // CHECK FOR THE RECORD FROM TABLE
            $query = "INSERT INTO `users` (`email`, `password`, `name`, `surname`, `address`) VALUES ('$username', '$password', '$name', '$surname', '$address')";
            
            $result = mysqli_query($connection, $query) or die(mysqli_error($connection));

            if ($result)
                { header('Location: ../userProfile.php?reg=success'); }
            else
            // error from db for PRIMARY_KEY !!!
                { header('Location: ../userpass.php?error=err'); }
        }
    }
    }
}
?>