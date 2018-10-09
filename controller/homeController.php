<?php session_start();

$title = "Portfolio - Index" ?>

<?php ob_start(); 
require('view/header.php');
require('view/homeView.php');
require('view/footer.php');
?>
