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
    <link rel="stylesheet" href="stylesheets/style_home.css">
    <title>Home</title>
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
        <form action="product_pagina.php" method=GET>
        <div id="main">
                <div class="product">
                    <a href="product_pagina.php?id=1">
                        <img src="images/vierkant/wp1pre.png" class="productfoto" alt="productfoto">
                        <span>Space collection | 1</span>
                    </a>
                </div>
            
                <div class="product">
                    <a href="product_pagina.php?id=2">
                        <img src="images/vierkant/wp2pre.png" class="productfoto" alt="productfoto">
                        <span>Space collection | 2</span>
                    </a>
                </div>
                <div class="product">
                    <a href="product_pagina.php?id=3">
                        <img src="images/vierkant/wp3pre.png" class="productfoto" alt="productfoto">
                        </span>Space collection | 3</span>
                    </a>
                </div>

                <div class="product">
                    <a href="product_pagina.php?id=4">
                        <img src="images/vierkant/wp4pre.png" class="productfoto" alt="productfoto">
                        <span>Space collection | 4</span>
                    </a>
                </div>

                <div class="product">
                    <a href="product_pagina.php?id=5">
                        <img src="images/vierkant/wp5pre.png" class="productfoto" alt="productfoto">
                        <span>Space collection | 5</span>
                    </a>
                </div>

                <div class="product">
                <a href="product_pagina.php?id=6">
                        <img src="images/vierkant/wp6pre.png" class="productfoto" alt="productfoto">
                        <span>Space collection | 6</span>
                    </a>
                </div>

                <div class="product">
                    <a href="product_pagina.php?id=7">
                        <img src="images/vierkant/wp7pre.png" class="productfoto" alt="productfoto">
                        <span>Code Collection | 1</span>
                    </a>
                </div>

                <div class="product">
                    <a href="product_pagina.php?id=8">
                        <img src="images/vierkant/wp8pre.png" class="productfoto" alt="productfoto">
                        <span>Code Collection | 2</span>
                    </a>
                </div>

                <div class="product">
                    <a href="product_pagina.php?id=9">
                        <img src="images/vierkant/wp9pre.png" class="productfoto" alt="productfoto">
                        <span>Code Collection | 3</span>
                    </a>
                </div>

                <div class="product">
                    <a href="product_pagina.php?id=10">
                        <img src="images/vierkant/wp10pre.png" class="productfoto" alt="productfoto">
                        <span>Code Collection | 4</span>
                    </a>
                </div>

                <div class="product">
                <a href="product_pagina.php?id=11">
                    <img src="images/vierkant/wp11pre.png" class="productfoto" alt="productfoto">
                    <span>Code Collection | 5</span>
                </a>
                </div>
                <div class="product">
                <a href="product_pagina.php?id=12">
                    <img src="images/vierkant/wp12pre.png" class="productfoto" alt="productfoto">
                    <span>Code Collection | 6</span>
                </a>
                </div>
            </div>
            </form>
    </div>
    
</body>
<script src="script.js"></script>
</html>
