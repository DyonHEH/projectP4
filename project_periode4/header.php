<?php
    require 'DatabaseConnectie.php';
?>

<!DOCTYPE html>
<html lang="en">
<title>Equipodo</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="style.css">
<style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
    .w3-bar,h1,button {font-family: "Montserrat", sans-serif}
    .fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar w3-red w3-card w3-left-align w3-large">
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
        <a href="homepage.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Home</a>
        <a href="vragenlijst.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Vragenlijst</a>
        <a href="https://www.greenfoot.org/scenarios/25826" target="_blank" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Games</a>
        <a href="forum.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Forum</a>
        <img src="images/default.png" height="50.4" width="103" style="float:right">

    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
        <a href="homepage.php" class="w3-bar-item w3-button w3-padding-large">Home</a>
        <a href="vragenlijst.php" class="w3-bar-item w3-button w3-padding-large">Vragenlijst</a>
        <a href="https://www.greenfoot.org/scenarios/25826" target="_blank" class="w3-bar-item w3-button w3-padding-large">Games</a>
        <a href="forum.php" class="w3-bar-item w3-button w3-padding-large">Forum</a>
        <img src="images/default.png" height="60" width="103">
    </div>
</div>