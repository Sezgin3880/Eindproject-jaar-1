<?php
include "verbinding.php";
session_start();
$host = 'localhost';
$db   = 'bit-shop';
$user = 'bit-shop';
$pass = 'ucu1btb3bkx!gxu9UZR';
$charset = 'utf8mb4';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheets/style.css">
    <link rel="stylesheet" href="stylesheets/login.css">
    <title>Login</title>
</head>
<body>
    

    <div id="header">
    <a href="home.php"><h1 id="bitshop">BIT-SHOP</h1></a>
    </div>
    <div class="main">
        <div class="loginvenster">
            <h2>LOG IN</h2>
            <form action="index.php" method="POST" >
                <div id="login">
                <label for="username">naam: </label><br>
                <input type="text" id="input" name="username" id="username"><br>

                <label for="password">Wachtwoord: </label><br>
                <input type="password" id="input" name="password" id="password"><br>
                
                <input type="submit" name="submit" class="knop" value="Log In"><br>  
                <a href="wachtwoord_vergeten.php">Wachtwoord vergeten?</a> 

                <a href="registreren.php">Nog geen account? Klik dan hier</a> 
                </div>          
            </form>
        </div>

    <img id="raket" src="images/raket1.png" alt="raket" >
    </div>
    <?php
    if(isset($_POST['submit'])) {
        $naam = $_POST['username'];
        $wachtwoord = $_POST['password'];
        $username = $_POST[username];
        $sql = "SELECT * FROM gebruikers WHERE naam = :id AND wachtwoord = :ww ";
        $stmt = $connect->prepare($sql);
        $stmt->execute(array(
            'id' => $_POST['username'],
            ':ww' => $_POST['password']
        ));
        $count = $stmt->rowCount();
        if ($count > 0) {
            $_SESSION['username'] = $username;
            header("Location: home.php");
          
        } else {
            echo "<script>
            alert('Inlog gegevens kloppen niet!');
            </script>";
        }
    } 
    ?>
</body>
</html>