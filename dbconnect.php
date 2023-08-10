<?php

$db_server_name = "localhost";
$db_user_name = "id20733092_mysql";
$db_password = "Fastqwertyfood3!";
$db_name = "id20733092_mysql";

$conn = mysqli_connect($db_server_name, $db_user_name, $db_password, $db_name);

if (!$conn) {
    echo "Connection failed!";
}

?>