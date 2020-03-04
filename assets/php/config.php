<?php
    $servername = "localhost";// remotemysql.com
    $username = "root";
    $dbname = "db_orders";
    $password = "";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection to database failed: " . $conn->connect_error);
    }
?>