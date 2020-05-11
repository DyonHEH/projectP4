<?php
define("DB_SERVER", "185.87.187.247");
define("DB_USER", "nbolt");
define("DB_PASS", "equipodo123");
define("DB_NAME", "nbolt_equipodo");

$conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    die("connection failed " . $conn->connect_error);
}
