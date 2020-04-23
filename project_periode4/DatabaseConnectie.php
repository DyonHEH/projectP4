<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "Equipodo");


$conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

if($conn->connect_error){
    die("connection failed " . $conn->connect_error);
}