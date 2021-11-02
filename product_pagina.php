<?php
session_start();
include 'download.php';

if(!isset($_SESSION['username'])){ 
    header("Location: https://projects.bit-academy.nl/~bit-shop/index.php");
}
$host = "localhost";
$db = "bit-shop";
$user = "bit-shop";
$pass = "ucu1btb3bkx!gxu9UZR";
$charset = "utf8mb4";

$dsn = "mysql:host=$host; dbname=$db; charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage());
}

$id = $_GET['id'];

function getImg($id, $pdo) {
    $stmt = $pdo->prepare("SELECT foto FROM producten WHERE ID = $id;");
    $stmt->execute();
    while ($row = $stmt->fetch()) {
        echo $row['foto']. "\n";
    }
}


function getTitle($id, $pdo) {
    $stmt = $pdo->prepare("SELECT titel FROM producten WHERE ID = $id;");
    $stmt->execute();
    while ($row = $stmt->fetch()) {
        echo $row['titel']. "\n";
    }
}

function getDescription($id, $pdo) {
    $stmt = $pdo->prepare("SELECT omschrijving FROM producten WHERE ID = $id;");
    $stmt->execute();
    while ($row = $stmt->fetch()) {
        echo $row['omschrijving']. "\n";
    }
}

function getSpec($id, $pdo) {
    $stmt = $pdo->prepare("SELECT spec FROM producten WHERE ID = $id;");
    $stmt->execute();
    while ($row = $stmt->fetch()) {
        echo $row['spec']. "\n";
    }
}


    $stmt = $pdo->prepare("SELECT imagenaam FROM producten WHERE ID = $id;");
    $stmt->execute();
    while ($row = $stmt->fetch()) {
    $image = $row['imagenaam'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="max-device-width: 900px, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheets/css_homeproduct.css">
    <link rel="stylesheet" href="stylesheets/style.css">
    <title>Product pagina</title>
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

        <div id="main">
            <div class="product">
                <img src="<?php getImg($id, $pdo) ?>" class="productfoto" alt="productfoto">
            </div>
            <div class="omschrijving">
                
                <h2>
                <?php
                    getTitle($id, $pdo);
                ?>
                </h2>
                
                <?php
                    getDescription($id, $pdo);
                ?>
                <div class="spec">
                <?php
                    getSpec($id, $pdo);
                ?>
                </div>
                <button id="bestelknop">
                <?php
                if ($points >= 50 ) {
                    echo '<a download="' . $image .  '"href="images/productfotos/' . $image . '" title="ImageName">Download
                </a>';
                } else {
                    echo '<a href="#"> Download
                </a>';
                }
                ?>
                </button>
                </div>
        </div>
    </div>

</body>
<script src="script.js"></script>
</html>
