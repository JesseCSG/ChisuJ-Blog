    <?php

    require_once (__DIR__ . "/controller/login-verify.php");    
    require_once (__DIR__ . "/view/header.php");    
    require_once (__DIR__ . "/view/navigation.php");    
    if (authenticateUser()) {        
        require_once (__DIR__ . "/view/form.php");        
    } 
    else {        
        echo "You need to Sign In";        
    }
    
    require_once (__DIR__ . "/view/footer.php");



