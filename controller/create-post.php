<?php
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    $post = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
    
    echo "<p>Title: $title</p>";
    echo "<p>Title: $post</p>";


