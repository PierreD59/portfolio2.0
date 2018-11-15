<?php 

if (!isset($_GET['page'])) {
    require ('controller/accueilController.php');
}
else {
    require ('controller/' . htmlspecialchars($_GET['page']) . 'Controller.php');
}