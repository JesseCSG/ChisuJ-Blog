 <?php
    require_once (__DIR__ . "/../model/config.php");
    require_once (__DIR__ . "/../controller/login-verify.php");
    
?>

<h1>Create Blog Post</h1>

<form class="form" method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
    <div>
        <label for="title">Title: </label>
        <input type="text" class="blogPost" name="title"/>
    </div>
    
    <div>
        <label for="post">Post: </label>
        <textarea type="post" class="blogPost" name="post"></textarea>
    </div>
    
    <div>
        <button type="submit" class="blogPost">Submit</button>
    </div>
</form>

