<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admine_name'])){
    header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admine</title>
    <link rel="stylesheet" href="style.css">
    </head>
</head>
<body>
    <div class="container">
        
        <div class="content">
            
            <h3>HI, <span>Admine</span></h3>
            <h1>ອ້າຍມີບໍອ້າຍ<span><?php echo $_SESSION['admine_name'] ?></span></h1>
            <p>ຖ້າເຂົາບໍ່ຕອບກະຢາເຊືອກແຊດໄປເຂົາ<span>admine!</span></p>
            <a href="login_form.php" class="btn">Login</a>
            <a href="register_form.php" class="btn">register</a>
            <a href="logout.php" class="btn">Logout</a>
        </div>
        
    </div>
</body>
</html>