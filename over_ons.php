<?php 
include "download.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="max-device-width: 900px, initial-scale=1.0">
  <link rel="stylesheet" href="stylesheets/over_ons.css">
  <link rel="stylesheet" href="stylesheets/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>
  <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <title>Over Ons</title>
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
  <div class="content">
    <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="over_ons.php">Over ons</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>

    <div class="container overons">
      <div class="row">
        <div class="col-12 textvlak">
          <div class="row">
            <h3 style="text-align: center;">Over ons</h3>
            <p class="col-12 wat">Als Bit-Shop zijnde willen wij op een uitdagende manier leuke en mooie wallpapers
              aanbieden, in samenwerking met Terabit zijn we deze uitdaging aangegaan.
              Verzamel zoveel mogelijk punten bij Terabit en spendeer ze bij ons.
            </p>
            <div class="col-6">
              <h4>Martijn Booij</h4>
              <p class="profiel">23 Jaar</p>
              <p class="profiel">Bit-Academy student</p>
            </div>
            <div class="col-6">
              <h4>Tinne van der Spoel</h4>
              <p class="profiel">24 Jaar</p>
              <p class="profiel">Bit-Academy student</p>
            </div>
          </div>
          <div class="row">
            <div class="col-6">
              <h4>Sezgin Karaduman</h4>
              <p class="profiel">16 Jaar</p>
              <p class="profiel">Bit-Academy student</p>
            </div>
            <div class="col-6">
              <h4>Simon Sandberg</h4>
              <p class="profiel">18 Jaar</p>
              <p class="profiel">Bit-Academy student</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="script.js"></script>

</html>