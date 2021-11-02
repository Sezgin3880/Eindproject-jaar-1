<?php

include "verbinding.php";
include "download.php";

if (isset($_POST['naam'])) {
    $sql = "INSERT INTO contact (naam, email, bericht) VALUES (?,?,?)";
    $stmt= $connect->prepare($sql);
    $stmt->execute([$_POST['naam'], $_POST['email'], $_POST['bericht']]);
}

echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="max-device-width: 900px, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheets/style.css">
    <link rel="stylesheet" href="stylesheets/style_home.css">
    <link rel="stylesheet" href="stylesheets/style_contact.css">
    <title>Contact</title>
</head>
<body>
    <div id="header">
    <a href="home.php"><h1 id="bitshop">BIT-SHOP</h1></a>
        <div>
        <img src="images/coin.png" id="coin">
        <span class="saldo">51</span>
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
    <div class="content">
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="over_ons.php">Over ons</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
    </div>
    <!-- <div id="main"> -->
    <div class="border">
    <form id="form" method="POST" action="contact.php">
        <h2>Contact ons</h2>
        <div class="HeleNaam">
        <span>Hele naam:</span><br>
        <input type="text" name="naam" required="required">
        </div>

        <div class="Email">
        <br><span>Email:</span><br>
        <input type="email" id="email" name="email" pattern="[0-9]+@talnet.nl$" required="required"
        title="@talnet.nl"><br>
        </div>

        <div class="Bericht">
        <br><span>Typ je bericht:</span><br>
        <textarea name="bericht" required="required"></textarea>
        </div>
                    
        <br><br>
        <input type="submit" class="verstuur" name="" value="Verstuur">
    </form>
    <img id="raket" src="images/raket1.png" alt="raket">
    </div>
    <!-- </div> -->
</body>
<script src="script.js"></script>
</html>';

?>
