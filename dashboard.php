<?php
    include 'navbar.php';
    include 'connection.php';

    $user_id = $_SESSION ['id'];
    $sql =" SELECT * from customers where id = '$user_id'";
    $get_user = $con->query ($sql);

    $user = $get_user-> fetch_assoc();

?>

<div class="row">
    <div class ="col-md-6 mx-auto">
        <div class =" card card-body">
            <div class = "d-flex justify-content-between align-items-center">
                <div>
                    <h3>Hello! <?php echo $_SESSION ['name'] ?> </h3>
                    <span> Account Balance: N <?php echo $user ['balance']?> </span> <br>
                    <span> Account Number: <?php echo $user ['number']?> </span>
                </div>
                 <a class="btn btn-outline-danger">Logout</a>
            </div>

            <div class ="row mt-5">
                <div class =" col-md-4">
                 <a href="deposit.php" class = "w-100 py-4 btn btn btn-outline-success">Deposit</a>
                </div>

                <div class =" col-md-4">
                 <a href="" class = "w-100 py-4 btn btn btn-outline-danger">Withdraw</a>
                </div>

                <div class =" col-md-4">
                    <a href="" class = "w-100 py-4 btn btn btn-outline-info">History</a>
                 </div>
            </div>
        </div>
    </div>
</div>

<?php
    include 'footer.php'
?>