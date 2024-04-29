<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap-5.3.1-dist/css/bootstrap.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title>Steeze App</title>

    <style>
        @import url(https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap);

        * {
            font-family: 'Poppins', sans-serif;
        }

        :root {
            --bg-color: #081b29;
            --second-color: #112e42;
            --text-color: #ededed;
            --main-color: #00abf0;
        }

        .company {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            margin: auto;
            padding-top: 2rem;
        }

        .h3 {
            color: var(--bg-color);
        }

        .span {
            color: var(--main-color);
        }

        .a {
            color: var(--main-color);
        }
    </style>
</head>

<body>

    <div class="company">
        <h3>Operate in <span>STEEZE</span></h3>
    </div>



    <div class="d-flex justify-content-center my-5 bg-dark p-3">

        <?php
        include 'connection.php';
        // User is not logged in or registered
        if ($_SESSION['id'] == null) {
        ?>
            <a href="register.php" class="btn btn-light me-2">Register</a>
            <a href="login.php" class="btn btn-light me-2">Login</a>

        <?php
            // User is logged in or registered
        } else {
        ?>
            <a href="dashboard.php" class="btn btn-light me-2">Dashboard</a>
        <?php
        }
        ?>

        <!-- 
        <a href="register.php" class="btn btn-light me-2">Register</a>
        <a href="login.php" class="btn btn-light me-2">Login</a>
        <a href="dashboard.php" class="btn btn-light me-2">Dashboard</a>
 -->

    </div>
</body>

</html>
