<?php
    require_once (__DIR__ . "/../model/config.php");
    require_once (__DIR__ . "/navigation.php");
?>

<h1>Login</h1>

<form method="post" action="<?php echo $path . "controller/login-user.php"; ?>">
    <div>
        <label for="username">Username: </label>
        <input class="blogPost" type="text" name="username"/>
    </div> 
    
    <div>
        <label for="password">Password: </label>
        <input class="blogPost" type="password" name="password"/>
    </div>
    
    <div>
        <button class="blogPost" type="submit">Submit</button>
    </div>
</form>

