<?php session_start();

$title = "Portfolio - Mes réalisations" ?>

<?php 
ob_start();
require('database.php');
require('model/produitModel.php');

$products = getProducts();

require('view/header.php');
require('view/projetView.php');
require('view/footer.php');
?>