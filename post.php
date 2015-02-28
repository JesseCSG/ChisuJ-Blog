    <?php

    //* Links login-verify.php, header.php, and navigation.php to this php.
    require_once (__DIR__ . "/controller/login-verify.php");    
    require_once (__DIR__ . "/view/header.php");    
    require_once (__DIR__ . "/view/navigation.php");
    //* If the user is authenticated, then direct the user to form.php.
    if (authenticateUser()) {        
        require_once (__DIR__ . "/view/form.php");      
    } 
    //* If the user isn't authenticated, then echo out 'You need to Sign In'.
    else {        
        echo "You need to Sign In";        
    }    
    //* Links footer.php to this php.
    require_once (__DIR__ . "/view/footer.php");



