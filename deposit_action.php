<?php
include 'connection.php';

$amount = $_POST['amount'];
$password = $_POST['password'];

$sql = "INSERT into transactions (amount) VALUES ('$amount') SELECT (password) from customers where password = $password";
$deposit = $con->query ($sql);

$user = $deposit->fetch_assoc();

$_SESSION ['id'] = $user ['id'];

if (is_numeric ($amount)|| $amount <= 0) {
    echo "Please enter a valid amount";
} else{
    if ($password != $password) {
        echo "Incorrect password";
    } else {
        echo "Deposit successful";
    }
    
}
?>

