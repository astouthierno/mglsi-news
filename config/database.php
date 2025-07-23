<?php
class Database {
    public static function connect() {
        return new PDO('mysql:host=localhost;dbname=mglsi_news', 'mglsi_user', 'passer');
    }
}
?>
