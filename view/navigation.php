<?php
    require_once (__DIR__ . "/../model/config.php");
    require_once (__DIR__ . "/../controller/login-verify.php");
    
   
?>

<div class="col-xs-12">
            <nav>
                <ul>
                    
                    <li><a class="blogPost" href="<?php echo $path . "index.php"; ?>">Main Page</a></li>
                    
                    <li><a class="blogPost" href="<?php echo $path . "register.php"; ?>">Registration</a></li>
                
                    <li><a class="blogPost" href="<?php echo $path . "login.php"; ?>">Login</a></li>
                    
                    <li><a class="blogPost" href="<?php echo $path . "logout-user.php"; ?>">Logout</a></li>
                    
                    <li><a class="blogPost" href="<?php echo $path . "post.php"; ?>">Blog Post Form</a></li>
    
                </ul>
                
            </nav>
</div>
