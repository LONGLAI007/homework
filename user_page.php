<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
    header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="style.css">
    </head>
</head>
<body>
    <div class="container">

        <div class="content">
            <h3>HI, <span>User</span></h3>
            <h1>ອ້າຍມີບໍ່ອ້າຍ<span><?php echo $_SESSION['user_name'] ?></span></h1>
            <p>ເຈົ້າເປັນຄົນແກ້ເຫງົາບໍ່ໄດ້ເປັນຄົນທີ່ເຂົາຮັກດອກ <span>user!</span></p>
            <a href="login_from.php" class="btn">Login</a>
            <a href="redister_from.php" class="btn">register</a>
            <a href="logout.php" class="btn">Logout</a>
        </div>
    </div>
</body>
</html>