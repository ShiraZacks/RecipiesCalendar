<?php
    session_start();
    // Destroy session clear array.
    session_destroy();
    $_SESSION = array();
    // Redirecting To Home Page
    header("Location: login.php");
    exit;
?>
