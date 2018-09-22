<?php

class Wishlist {
    public $id;
    public $title;
    public $description;

    static $dbname = 'wishlist';

    public static function add($userId, $destinationId) {
        $connection = DB::getConnection();
        $stmt = $connection->prepare("INSERT INTO " . static::$dbname . " (`user_id`, `destination_id`) VALUES (:userId, :destinationId)");
        $stmt->bindParam(':userId', $userId);
        $stmt->bindParam(':destinationId', $destinationId);
        $stmt->execute();
    }

    public static function remove($userId, $destinationId) {
        $connection = DB::getConnection();
        $stmt = $connection->prepare("DELETE FROM " . static::$dbname . " WHERE user_id=:userId AND destination_id=:destinationId");
        $stmt->bindParam(':userId', $userId);
        $stmt->bindParam(':destinationId', $destinationId);
        $stmt->execute();
    }

    public static function entryExists($userId, $destinationId) {
        $connection = DB::getConnection();
        $stmt = $connection->prepare("SELECT * FROM " . static::$dbname . " WHERE user_id=:userId AND destination_id=:destinationId");
        $stmt->bindParam(':userId', $userId);
        $stmt->bindParam(':destinationId', $destinationId);
        $stmt->execute();
        return $stmt->fetch();
    }

    public static function getDestinationsByUserId($userId) {
        $connection = DB::getConnection();
        $stmt = $connection->prepare("SELECT * FROM " . Destination::$dbname . " WHERE id IN (SELECT `destination_id` FROM " . static::$dbname . " WHERE user_id = :userId)" );
        $stmt->bindParam(':userId', $userId);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, 'Destination');
    }
}
