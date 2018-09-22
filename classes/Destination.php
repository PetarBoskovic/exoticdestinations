<?php

class Destination {
    public $id;
    public $title;
    public $description;

    static $dbname = 'destinations';

    public static function getAll() {
        $connection = DB::getConnection();
        $stmt = $connection->prepare("SELECT * FROM " . static::$dbname);
        $stmt->execute();
        $destinations = $stmt->fetchAll(PDO::FETCH_CLASS, 'Destination');

        return $destinations;
    }

    public static function getByTitle($title) {
        $connection = DB::getConnection();
        $likeTitle = '%' . $title . '%';
        $stmt = $connection->prepare("SELECT * FROM " . static::$dbname . " WHERE title LIKE :title");
        $stmt->bindParam(':title', $likeTitle);
        $stmt->execute();
        $destinations = $stmt->fetchAll(PDO::FETCH_CLASS, 'Destination');

        return $destinations;
    }

    public static function getById($id) {
        $connection = DB::getConnection();
        $stmt = $connection->prepare("SELECT * FROM " . static::$dbname . " WHERE id=:id");
        $stmt->bindParam(':id', $id);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Destination');
        $stmt->execute();
        $destination = $stmt->fetch();

        return $destination;
    }
}
