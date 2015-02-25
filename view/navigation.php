<?php
    require_once (__DIR__ . "/../model/config.php");
    require_once (__DIR__ . "/../controller/login-verify.php");
    
   
?>

<div class="col-xs-12">
            <nav>
                <ul>
                    <a class="blogPost" href="<?php echo $path . "index.php"; ?>">Main Page</a>-|-
                    
                    <a class="blogPost" href="<?php echo $path . "post.php"; ?>">Post Blogs Here</a>-|-
                                    
                    <a class="blogPost" href="<?php echo $path . "login.php"; ?>">Sign In</a>-|-
                    
                    <a class="blogPost" href="<?php echo $path . "/controller/logout-user.php"; ?>">Log-Out</a>-|-
                    
                    <a class="blogPost" href="<?php echo $path . "register.php"; ?>">Register</a>                       
                </ul>                
            </nav>
</div>
