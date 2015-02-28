<?php

//* Links config.php to this php.
    require_once (__DIR__ . "/../model/config.php");

//* Takes $title and $post, and procectes them with a filter string.
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

//* Connectes the $query and insert $title and $post into the 'posts' file in phpMyAdmin.
    $query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'");

//* If the $query is true, then direct user to the index.php.
    if($query) {
        header("Location: " . $path . "index.php");
        echo "<p>Successfully inserted post: $title</p>";
        
    }
//* If $query is false, then echo out that an error has occured and show the error.
    else {
        echo "<p>" . $_SESSION["connection"]->error . "</p>";
    }

   
    