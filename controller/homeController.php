<?php session_start();

$title = "Portfolio - Accueil";
?>

<?php ob_start(); 
require('view/header.php');
require('view/homeView.php');
require('view/footer.php');
?>
