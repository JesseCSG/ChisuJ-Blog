<?php
//* Links to the Config and Navigation Phps
    require_once (__DIR__ . "/../model/config.php");
    require_once (__DIR__ . "/../view/navigation.php");
    
//* Filters and creates protected emails, usernames, and passwords
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
    
//* Echoes password
    echo $password;

//* Creates salt and gives a safety password.
    $salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";
    
//* Creates HashedPassword
    $hashedPassword = crypt($password, $salt);
    
//* Sets emails, passwords, and usernames.
    $query = $_SESSION["connection"]->query("INSERT INTO users SET "
             . "email = '$email',"
             . "username = '$username',"
             . "password = '$hashedPassword',"
             . "salt = '$salt'");
    
//* If $query is true, then send use to index.php.
     if ($query) {
         header("Location: " . $path . "index.php");
        echo ("Successfully created username: $username");
        
     }
//* If false, echo out to user an error and shpw error.
    else {
         echo "<p>" . $_SESSION["connection"]->error . "</p>";
    }