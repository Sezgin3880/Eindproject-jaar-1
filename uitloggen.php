<?php
session_start();
session_destroy();
if(!isset($_SESSION['username'])){ 
    header("Location: https://projects.bit-academy.nl/~bit-shop/index.php");
}
exit();
?>