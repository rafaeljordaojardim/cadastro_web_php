<?php
    $servername = "127.0.0.1";
    $database = "onesys";
    $username = "onesys_user";
    $password = "12345678";
    // Create connectio
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>