<?php
    $server_name = "localhost";
    $db_name = "Barangay_Database";
    $username = "root";
    $password = "";

    $conn = new mysqli($server_name, $username, $password, $db_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>