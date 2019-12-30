<?php  
 require('db_connect.php');

if (isset($_POST['username']) and isset($_POST['password1'])
and isset($_POST['password2'])  and isset($_POST['name'])
and isset($_POST['surname'])  and isset($_POST['address'])){

if ($_POST['password1'] != $_POST['password2']){
    echo "<script type='text/javascript'>alert('Passwords need to match')</script>";
}
else{
	// Assigning POST values to variables.
$username = $_POST['username'];
$password = $_POST['password1'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$address = $_POST['address'];

// CHECK FOR THE RECORD FROM TABLE
$query = "INSERT INTO `users` (`email`, `password`, `name`, `surname`, `address`) VALUES ('$username', '$password', '$name', '$surname', '$address')";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));

if ($result){

//echo "Login Credentials verified";
echo "<script type='text/javascript'>alert('Επιτυχής εγγραφή')</script>";

}else{
echo "<script type='text/javascript'>alert('Αποτυχία εγγραφής! Το email χρησιμοποιείται ήδη')</script>";
//echo "Invalid Login Credentials";
}
}
}
?>