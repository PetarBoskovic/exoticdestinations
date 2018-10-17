<?php

class Reservation {
    public $user_id;
    public $destination = null;
    public $quantity;
    public $total_price;

    static $dbname = 'reservations';

    public function __construct($user_id = 0, $destination = null, $quantity = 0, $total_price = 0) {
        $this->user_id = $user_id;
        $this->destination = $destination;
        $this->quantity = $quantity;
        $this->total_price = $total_price;
    }

    public function make() { 
        $connection = DB::getConnection();

        $stmt = $connection->prepare("INSERT INTO " . static::$dbname . " (`user_id`, `destination_id`, `quantity`, `total_price`) VALUES (:user_id, :destination_id, :quantity, :total_price)");
        $stmt->bindParam(':user_id', $this->user_id);
        $stmt->bindParam(':destination_id', $this->destination->id);
        $stmt->bindParam(':quantity', $this->quantity);
        $stmt->bindParam(':total_price', $this->total_price);
        $stmt->execute();

        return $connection->lastInsertId();
    }
}
