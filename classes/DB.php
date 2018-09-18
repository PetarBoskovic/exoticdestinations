<?php 
class DB {
    static $connection = null;
    static $username = 'exoticuser';
    static $password = 'exoticpass';
    static $host = 'db';
    static $dbname = 'exotic';

    public static function getConnection(){
        if (static::$connection){
            return static::$connection;
        }
        return static::$connection = new PDO('mysql:host=' . static::$host .';dbname=' . static::$dbname, static::$username, static::$password);
    }

    
}
