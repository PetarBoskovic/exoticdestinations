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

    //public static fetchAllByName vraca niz instanci destinacije
}
