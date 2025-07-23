<?php
require_once __DIR__ . '/../config/database.php';

class Categorie {
    public static function getAll() {
        $db = Database::connect();
        return $db->query("SELECT * FROM Categorie")->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
