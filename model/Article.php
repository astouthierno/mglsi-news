<?php
require_once __DIR__ . '/../config/database.php';

class Article {
    public static function getAll() {
        $db = Database::connect();
        return $db->query("SELECT * FROM Article ORDER BY dateCreation DESC")->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getByCategorie($categorieId) {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM Article WHERE categorie = ?");
        $stmt->execute([$categorieId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
