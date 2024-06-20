<?php
  require('db.php');
  if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    
  }
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
    // $username = $_POST['login'];
    // $password = $_POST['password'];
    // $database = new MySqlDatabase();
    // $database->insertUser($username, $password);
    header('Location: https://github.com');
    exit();
  }
