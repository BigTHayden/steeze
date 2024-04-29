<?php
include 'connection.php';

$amount = $_POST['amount'];
$password = $_POST['password'];

$user_id = $_SESSION['id'];

$sql = "SELECT * from customers where id = '$user_id'";
$get_user = $con->query($sql);
$user = $get_user->fetch_assoc();

if ($password != $user['password']) {
    echo "Password is incorrect";
    header("location: deposit.php?message=Password is incorrect");
    return;
}

if ($amount <= 0) {
    header("location: deposit.php?message=Insufficient balance");
    return;
}

$new_balance = $user['balance'] + $amount;
$sql = "UPDATE customers set balance = '$new_balance' where id = '$user_id'";
$con->query($sql);

// create the history 
$sql = "INSERT INTO transactions (customers_id, amount, type, status) VALUES ('$user_id', '$amount', 'Credit', 'Successful')";
$deposit = $con->query($sql);



header("location: dashboard.php?message=Deposit successful");
