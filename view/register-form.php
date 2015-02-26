<?php
    require_once (__DIR__ . "/../model/config.php");
    require_once (__DIR__ . "/navigation.php");
?>

<h1>Register</h1>

<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
    <div>
        <label for="email">Email: </label>
        <input class="blogPost" type="text" name="email"/>
    </div>
    
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