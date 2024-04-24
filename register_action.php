<?php
include 'connection.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$number = rand (10000, 99999);

$sql = "INSERT into customers(name, email, password, number) VALUES ('$name', '$email', '$password', $number)";
if ($con->query($sql) == true) {
    echo "Registration Successful";
} else{
    echo "An error has occured $con->error";
}
?>