
<?php
//declaring variables
$name = "Priscy";
echo "My name is $name";

//arithmetic operations
echo "<br>";
$balance = 100;
$balance = $balance -50;
echo $balance;

//conditions
echo "<br>";
$amount = 40;
if ($amount > $balance) {
    echo "Insufficient funds";
} 
elseif ($amount == $balance) {
    echo "You cannnot empty your account";
}
else {
    $balance = $balance -$amount;
    echo "Withdrawal Successful";
}

echo "<br>";
$age =25;
if ($age > 18) {
    echo "You are welcome";
} else {
    echo "You are not allowed";
}

?>