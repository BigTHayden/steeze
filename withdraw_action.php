<?php
include 'connection.php';

$amount = $_POST['amount'];
$password = $_POST['password'];
$user_id = $_SESSION['id'];

$sql = "SELECT * from customers where id = '$user_id'";
$get_user = $con->query($sql);
$user = $get_user->fetch_assoc();



if ($password != $user['password']) {
    header("location: withdraw.php?message=Password is incorrect");
    return;
}

if ($amount >= $user['balance']) {
    header("location: withdraw.php?message=Insufficient balance");
    return;
}


$new_balance = $user['balance'] - $amount;
$sql = "UPDATE customers set balance = '$new_balance' where id = '$user_id'";
$con->query($sql);



header("location: dashboard.php?message=Withdrawal successful");

?>