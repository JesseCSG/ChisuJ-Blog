<?php
//* Links config.php and navigation.php to this php.
    require_once (__DIR__ . "/../model/config.php");
    require_once (__DIR__ . "/navigation.php");
?>

<!-- Header of the page. -->
<h1>Register</h1>

<!-- Creates form and gives form link to create-user.php. -->
<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
    <div>
        <!-- Creates email input to be saved for new account -->
        <label for="email">Email: </label>
        <input class="blogPost" type="text" name="email"/>
    </div>
    
    <div>
        <!-- Creates username to be saved for new account -->
        <label for="username">Username: </label>
        <input class="blogPost" type="text" name="username"/>
    </div> 
    
    <div>
        <!-- Creates password to be saved for new account -->
        <label for="password">Password: </label>
        <input class="blogPost" type="password" name="password"/>
    </div>
    
    <div>
        <!-- Button that submits the new account to phpMyAdmin for saving --> 
        <button class="blogPost" type="submit">Submit</button>
    </div>
</form>