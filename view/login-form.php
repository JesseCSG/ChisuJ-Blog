<?php
    //* Links config.php and navigation.php to this php.
    require_once (__DIR__ . "/../model/config.php");
    require_once (__DIR__ . "/navigation.php");
?>

<!-- Creates a header for the login page. -->
<h1>Login</h1>

<!-- Makes a form and links it to login-user.php. -->
<form method="post" action="<?php echo $path . "controller/login-user.php"; ?>">
    <div>
        <!-- Creates a username title and an input box  for creating a new username for the new account. -->
        <label for="username">Username: </label>
        <input class="blogPost" type="text" name="username"/>
    </div> 
    
    <div>
        <!-- Creates a password title and an input box for creating a new password for the new account. -->
        <label for="password">Password: </label>
        <input class="blogPost" type="password" name="password"/>
    </div>
    
    <div>
        <!-- Creates a submit button for submitting the new account. -->
        <button class="blogPost" type="submit">Submit</button>
    </div>
</form>

