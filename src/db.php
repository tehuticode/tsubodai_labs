<?php
    // require_once 'path/to/mysqli.php'; // Add import statement for mysqli class
    $conn = new mysqli("localhost", "root", "", "tsubodai labs", 3306);
    if ($conn->connect_error) {
        exit("Connection failed: " . $conn->connect_error);
    }