<?php
include 'connection.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * from customers where email ='$email' and password ='$password' LIMIT 1";
$login = $con->query ($sql);

if (mysqli_num_rows ($login) > 0) {
    echo "Logged in";

    $user = $login->fetch_assoc();

    $_SESSION ['name'] = $user ['name'];
    $_SESSION ['id'] = $user ['id'];

    echo $_SESSION['name'];
    header ('location: dashboard.php');

} else {
   echo "Incorrect login details";
   header ('location: login.php');
}

?>
