 <?php
    //* Links config.php and login-verify.php to this php.
    require_once (__DIR__ . "/../model/config.php");
    require_once (__DIR__ . "/../controller/login-verify.php");
    
?>

<!-- Header for the website. -->
<h1>Create Blog Post</h1>

<!-- Creates form and link it to create-post.php. -->
<form class="form" method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
    <div>
        <!-- Makes a title title and an input box for creating a posts. -->
        <label for="title">Title: </label>
        <input type="text" class="blogPost" name="title"/>
    </div>
    
    <div>
        <!-- Makes a post title and an input box for creating posts. -->
        <label for="post">Post: </label>
        <textarea type="post" class="blogPost" name="post"></textarea>
    </div>
    
    <div>
        <!-- Makes a submit button to submit the new post. -->
        <button type="submit" class="blogPost">Submit</button>
    </div>
</form>

