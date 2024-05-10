<?php

    $server = "localhost";
    $username = "rentalepep";
    $password = "12345678";
    $db = "rentalepep";

    $conn = new mysqli($server, $username, $password, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }