<?php
class MySqlDatabase
{
    private $pdo;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=fish";
        $username = "root";
        $password = "";

        $this->pdo = new PDO($dsn, $username, $password);
    }

    // Login and user

    // Insert Function
    public function insertUser($name, $password)
    {
        $stmt = $this->pdo->prepare("INSERT INTO users (name, password) VALUES (?, ?)");
        $stmt->execute([$name, $password]);
    }
  }
  // Initialize connection with database
  $database = new MySqlDatabase();


