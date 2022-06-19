<?php
session_start();
if (!isset($_SESSION["success"])) {
    header('location: login.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Home Page</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <?php include 'menu.php' ?>
</head>

<body>





    <?php
    if (isset($_SESSION['success'])) : ?>
        <div>
            <h3>
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </h3>
        </div>
    <?php endif ?>
    <!-- if the user logs in print information about the user  -->
    <?php if (isset($_SESSION['username'])) : ?>
        <h1>Welcome to the Index Page,<strong> <?php echo $_SESSION['username']; ?>!</strong> </h1>
        <h3>From here, you can go to a bunch of other pages in my website. Enjoy!</h3><br><br>
    <?php endif ?>
</body>

</html>