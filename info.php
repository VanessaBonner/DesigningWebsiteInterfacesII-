<?php
    session_start();

    $welcomeMessage = "";

    if ($_SESSION['isLoggedIn'] == 'true') {
        $welcomeMessage = "Welcome " . $_SESSION["username"];
    }
    else {
        header('Location: Login.php');
    }
?>