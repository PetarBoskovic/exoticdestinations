<?php

class User {
    public $username;
    public $password;
    public $email;

    static $dbname = 'users';

    public function __construct($username = null, $password = null, $email = '') {
        if ($username !== null) {
            $this->username = $username;
        }
        if ($password !== null) {
            $this->password = $password;
        }
        if ($email !== null) {
            $this->email = md5($email);
        }
    }

    public function isValid () {
        if (!$this->username) {
            return 'Morate uneti username!';
        }

        $connection = DB::getConnection();
        
        $stmt = $connection->prepare("SELECT * FROM " . static::$dbname . " WHERE username=:username");
        $stmt->bindParam(':username', $this->username);
        $stmt->execute();
        $usernameExists = $stmt->fetch();

        if ($usernameExists) {
            return 'Uneti username vec postoji!';
        }

        if (!$this->email) {
            return 'Morate uneti email!';
        }

        $stmt = $connection->prepare("SELECT * FROM " . static::$dbname . " WHERE email=:email");
        $stmt->bindParam(':email', $this->email);
        $stmt->execute();
        $emailExists = $stmt->fetch();
        
        if ($emailExists) {
            return 'Uneti email vec postoji!';
        }
        
        if (!$this->password) {
            return 'Morate uneti password!';
        }
        return true;
    }

    public function create() {
        $connection = DB::getConnection();

        $stmt = $connection->prepare("INSERT INTO " . static::$dbname . " (`username`, `email`, `password`) VALUES (:username, :email, :password)");
        $stmt->bindParam(':username', $this->username);
        $stmt->bindParam(':password', $this->password);
        $stmt->bindParam(':email', $this->email);
        $stmt->execute();
    }

    public function login() {
        $connection = DB::getConnection();

        $stmt = $connection->prepare("SELECT * FROM " . static::$dbname . " WHERE username=:username AND password=:password");
        $stmt->bindParam(':username', $this->username);
        $stmt->bindParam(':password', $this->password);
        $stmt->execute();
        $user = $stmt->fetch();

        if ($user) {
            $this->id = $user['id'];
            $this->email = $user['email'];
            $_SESSION['user_id'] = $this->id;
            $_SESSION['logged_in'] = true;
            return $this;
        }

        return false;
    }

    public static function current() {
        $connection = DB::getConnection();
        $userId = $_SESSION['user_id'];

        $stmt = $connection->prepare("SELECT * FROM " . static::$dbname . " WHERE id=:id");
        $stmt->bindParam(':id', $userId);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        $stmt->execute();
        $user = $stmt->fetch();

        return $user;
    }
}
