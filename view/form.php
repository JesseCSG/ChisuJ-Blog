<?php
    require_once (__DIR__ . "/../model/config.php");
?>

<h1>Create Blog Post</h1>

<form class="form" method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
    <div>
        <label for="title">Title: </label>
        <input type="text" name="title"/>
    </div>
    
    <div>
        <label for="post">Post: </label>
        <textarea type="post" name="post"></textarea>
    </div>
    
    <div>
        <button type="submit" class="buttonA">Submit</button>
    </div>
</form>

