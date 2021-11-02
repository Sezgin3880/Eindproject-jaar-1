<?php

session_start();
?>

<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="stylesheets/registreren.css">
  <title>Registreren</title>
</head>

<body>
  <header>
  <a href="home.php"><h1 id="bitshop">BIT-SHOP</h1></a>
  </header>
  <img id="raket" src="images/raket1.png" alt="raket" >
  </div>

  <?php
  $connect = new PDO("mysql:host=localhost;dbname=bit-shop", "bit-shop", "ucu1btb3bkx!gxu9UZR");
  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  if (isset($_POST['registreren'])) {
    $naam = $_POST['Naam'];
    $achternaam = $_POST['Achternaam'];
    $email = $_POST['email'];
    $user = $_POST['username'];
    $wachtwoord = $_POST['wachtwoord'];
    $sql = "SELECT COUNT(username) AS num FROM gebruikers WHERE username = :username";
    $stmt = $connect->prepare($sql);
    $stmt->bindValue(':username', $user);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    $sql1 = "SELECT COUNT(Email) AS num FROM gebruikers WHERE Email = :Email";
    $stmt1 = $connect->prepare($sql1);
    $stmt1->bindValue(':Email', $email);
    $stmt1->execute();
    $row1 = $stmt1->fetch(PDO::FETCH_ASSOC);

    $sql2 = "SELECT COUNT(Naam) AS num FROM gebruikers WHERE Naam = :Naam";
    $stmt2 = $connect->prepare($sql2);
    $stmt2->bindValue(':Naam', $naam);
    $stmt2->execute();
    $row2 = $stmt2->fetch(PDO::FETCH_ASSOC);

    if ($row['num'] > 0) {
      echo '<script>alert("Gebruikersnaam bestaat all")</script>';
    }
    if ($row2['num'] > 0) {
      echo '<script>alert("Naam bestaat all")</script>';
    } elseif ($row1['num'] > 0) {
      echo '<script>alert("Email bestaat all")</script>';
    } else {
      $sql = "INSERT INTO `gebruikers` (`Naam`, `Achternaam`, `email`, `username`, `wachtwoord`) 
    VALUES (:Naam, :Achternaam, :email, :username, :wachtwoord) ";
      $sql_run = $connect->prepare($sql);
      $result = $sql_run->execute(array(
        ":Naam" => $naam, ":Achternaam" => $achternaam, ":email" => $email,
        ":username" => $user, ":wachtwoord" => $wachtwoord
      ));
      header('Location: index.php');
    }
  }

  echo '<br><center><div class="wrapper">
<div class="titel">
 <h2>Registreer</h2></div>
<form action="" method="POST">
<div class="field">
    <input type="text" name="Naam" required>
    <label>Naam</label>
  </div>
  <div class="field">
    <input type="text" name="Achternaam" required>
    <label>Achternaam</label>
  </div>
  <div class="field">
    <input type="email" id="email" pattern="[0-9]+@talnet.nl$"
    title="@talnet.nl"><br><br> 
    <label>Email</label>
  </div>
    <div class="field">
       <input type="text" name="username" required>
       <label>Gebruikersnaam</label>
    </div> 
<div class="field">
    <input type="password" name="wachtwoord" id="password" required>
    <label>Wachtwoord</label>
  </div>
<div class="content">
<div class="field"><br>
    <input type="submit" name="registreren" value="Registreren">
    </div>
</form>
</div></center>';
?>
</body>

</html>