<?php

class Database {
    public function query($sql) {
        // Simulate a database query, returning some data
        return "Querying the database: $sql";
    }
}

class User {
    private $database;

    public function __construct(Database $database) {
        $this->database = $database;
    }

    public function getUserData($userId) {
        // Use the injected Database instance to retrieve user data
        $sql = "SELECT * FROM users WHERE id = $userId";
        return $this->database->query($sql);
    }
}

// Create a Database instance
$database = new Database();

// Create a User instance with the injected Database instance
$user = new User($database);

// Use the User class to retrieve user data
$userId = 1;
$userData = $user->getUserData($userId);

// Display the retrieved user data
echo $userData . "\n";

