<?php
require_once 'controller/ArticleController.php';

$controller = new ArticleController();

if (isset($_GET['cat'])) {
    $controller->parCategorie($_GET['cat']);
} else {
    $controller->accueil();
}
?>
