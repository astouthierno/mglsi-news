<?php
require_once __DIR__ . '/../model/Article.php';
require_once __DIR__ . '/../model/Categorie.php';

class ArticleController {
    public function accueil() {
        $articles = Article::getAll();
        $categories = Categorie::getAll();
        require 'view/accueil.php';
    }

    public function parCategorie($id) {
        $articles = Article::getByCategorie($id);
        $categories = Categorie::getAll();
        require 'view/categorie.php';
    }
}
?>
