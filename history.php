<?php
include 'navbar.php';
include 'connection.php';

$user_id = $_SESSION['id'];



$sql = "SELECT * from transactions where customers_id = '$user_id'";


$get_txns = $con->query($sql);


?>

<div class="row">
    <div class="col-md-5 mx-auto">
        <div class=" card card-body">


            <h3 style="justify-content: center;">Transaction History</h3>

            <table class="table table-tertiary table-striped">
                <thead>
                    <th>ID</th>
                    <th>Amount</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Date</th>
                </thead>

                <tbody>
                    <?php
                    while ($txn = $get_txns->fetch_assoc()) {
                        // echo "Hello there";
                    ?>
                        <tr>
                            <td><?php echo $txn['customers_id'] ?></td>
                            <td>N<?php echo $txn['amount'] ?></td>
                            <td><?php echo $txn['type'] ?></td>
                            <td><?php echo $txn['status'] ?></td>
                            <td><?php echo $txn['date'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
include 'footer.php'
?>