<?php
/* Links that are directed to the Model and Login-verify Phps */
require_once (__DIR__ . "/../model/config.php");
require_once (__DIR__ . "/../controller/login-verify.php");
?>

<div class="col-xs-12">
    <!-- The navigation bar for the blog  -->
    <nav class="nan nav-tabs">
        <ul>
            <!-- All links to Index, Post, Login, Logout-user, and Register Phps -->
            <a class="blogPost" href="<?php echo $path . "index.php"; ?>">Main Page</a>>-<

            <a class="blogPost" href="<?php echo $path . "post.php"; ?>">Post Blogs Here</a>>-<

            <a class="blogPost" href="<?php echo $path . "login.php"; ?>">Sign In</a>>-<

            <a class="blogPost" href="<?php echo $path . "/controller/logout-user.php"; ?>">Log-Out</a>>-<

            <a class="blogPost" href="<?php echo $path . "register.php"; ?>">Register</a>                    
        </ul>                
    </nav>
</div>
