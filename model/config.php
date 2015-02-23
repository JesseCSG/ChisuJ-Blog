<?php
    require_once (__DIR__ . "/database.php");
    session_start();
    session_regenerate_id(true);

    $path = "/ChiSuJesse-Blog/";

    $host = "localhost";
    $username = "root";
    $password = "root";
    $database = "blog_db";
    
    //Routes the config.php to Database.php
    if (!isset($_SESSION["connection"])) {
        $connection = new Database($host, $username, $password, $database);
        $_SESSION["connection"] = $connection;
    }
