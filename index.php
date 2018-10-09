<?php 

if (!isset($_GET['page'])) {
    require ('controller/homeController.php');
}
else {
    require ('controller/' . htmlspecialchars($_GET['page']) . 'Controller.php');
}