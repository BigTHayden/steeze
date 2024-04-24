<?php
    include 'navbar.php'
?>

<div class="row">
    <div class ="col-md-5 mx-auto">
        <div class =" card card-body">
            <form action="" method ="POST">
                <label for="">Amount</label>
                <input type="number" name ="amount"  class ="form-control mb-3">

                <label for="">Password</label>
                <input type="password"  name ="password" class ="form-control mb-3">

                <button class ="btn btn btn-outline-success">Deposit</button>
            </form>
        </div>
    </div>
</div>

<?php
    include 'footer.php'
?>