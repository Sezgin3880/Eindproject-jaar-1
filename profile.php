<?php
session_start();
include "download.php";
if(!isset($_SESSION['username'])){ 
    header("Location: https://projects.bit-academy.nl/~bit-shop/index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="max-device-width: 900px, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheets/style.css">
    <link rel="stylesheet" href="stylesheets/style_profile.css">
    <title>Mijn profiel</title>
</head>
<body>
    <div id="header">
        <a href="home.php"><h1 id="bitshop">BIT-SHOP</h1></a>
        <div>
            <img src="images/coin.png" id="coin">
            <span class="saldo"><?php echo "$points"; ?> </span>
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">﹀</button>
                <div id="myDropdown" class="dropdown-content">
                <a href="profile.php">Mijn profiel</a>
                <a href="uitloggen.php">Uitloggen</a>
                </div>
            </div>
            <img src="images/avatar.png" id="avatar" alt="avatar">
        </div>
    </div>
            <div class="main">
                <div class="profilepic">
                <img src="images/avatar.png" id="foto" alt="foto">
            </div>

            <div class="form">
            <h2>Profiel bewerken</h2>
            <label for="gebruikersnaam">Gebruikersnaam: </label><br>
            <input type="text" name="gebruikersnaam" id="gebruikersnaam"><br>   
            <label for="voornaam">Voornaam: </label><br>    
            <input type="text" name="voornaam" id="voornaam"><br>
            <label for="achternaam">Achternaam: </label><br>
            <input type="text" name="achternaam" id="achternaam"><br>
            <label for="emailadres">E-mailadres: </label><br>
            <input type="text" name="emailadres" id="emailadres"><br>
            <label for="wachtwoord">Wachtwoord: </label>
            <input type="password" name="wachtwoord" id="wachtwoord" value="">

            <input type="submit" class="savechanges" value="Save changes">
            </div>
        </div>
</body>
<script src="script.js"></script>
</html>