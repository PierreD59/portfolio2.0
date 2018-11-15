<?php session_start();

$title = "Portfolio - Me contacter";
?>

<?php ob_start(); ?>
<?php require('view/header.php'); ?>

<?php require('view/contactView.php');
require('view/footer.php') ?>