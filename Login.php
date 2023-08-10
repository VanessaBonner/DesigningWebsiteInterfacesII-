<?php
    $errorMessage = "";

    if ($_SERVER["REQUEST_METHOD"]=="POST") {

        session_start();
        require_once('dbconnect.php');

        $username = $_POST["userName"];
        $password = $_POST["userPassword"];

        $sql = "SELECT * FROM users WHERE usename= '$username' AND password = '$password' ";
        $result = mysqli_query($conn, $sql);
        $check = mysqli_fetch_array($result);
        

        if(isset($check)) {
            $_SESSION['id'] = session_id();
            $_SESSION['isLoggedIn'] = 'true';
            $_SESSION ['username'] = $check["usename"]; ;

            header('Location: info.php');
        }
        else {
            $errorMessage = 'Login failed. Please try again!';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" type="text/css" href="BackgroundStuff.css">
    <script src="Script.js"></script>
    <title>LoginPage</title>
</head>
<body>
    <h2 class="center">Login Page</h2>
    <!--Include the header and footer, including a menu-->
    <?php include 'Header.php';?>
     
    <br>
    <div id="errorMessage"></div>
        <?php
            echo $errorMessage;
        ?>
    <br>

    <form name="userForm" method="post" action="Login.php">
        <!--Get the user name-->
        <label for="userName" id="lblUserName">User Name:</label>
        <input type="text" name="userName" id="userName" placeholder="UserName">
        <br>
        <br>
        <!--Get the password-->
        <label for="userPassword" id="lblPassword">Password: </label>
        <input type="password" name="userPassword" id="userPassword" placeholder="Password">
        <br>
        <br>
        <!--Submit the form-->
        <button type="submit">Submit</button>

    </form>

    <!--Include the header and footer, including a menu-->
    <?php include 'Footer.php';?>




</body>
</html>