<?php

    //* Link config.php to this php.
    require_once (__DIR__ . "/../model/config.php");
    
    //* Makes $query select and take from posts and makes $result connect connection to $query from query.
    $query = "SELECT * FROM posts";
    $result = $_SESSION["connection"]->query($query);

    //* If $result is true, then $row will fetch the reult and cho out title and post fro $row.
    if($result) {
        while($row = mysqli_fetch_array($result)) {
            echo "<div class='post'>";
            echo "<h2>" . $row['title'] . "</h2>";
            echo "<br/>";
            echo "<p>" . $row['post'] . "</h1>";
            echo "<br/>";
            echo "</div";
        }
    }