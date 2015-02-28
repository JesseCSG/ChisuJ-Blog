    <?php

//* Links config.php and navigation.php into this php.
    require_once (__DIR__ . "/../model/config.php");
    require_once (__DIR__ . "/../view/navigation.php");

//* Takes $username and $password and puts them into a safety filter string to protect the username & password.
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

//* Connectes to $query and selects salt & password from the 'users' file, and also connect the username to the $username.
    $query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE BINARY username = '$username'");

//* If $query's number of rows equals 1, then $row will get fecth_array from $query.
    if ($query->num_rows == 1) {
        $row = $query->fetch_array();

        //* If the possword equals crypt's password and salt, then allow user to be authenticated and direct user to the index.php.
        if ($row["password"] == crypt($password, $row["salt"])) {
            
            $_SESSION["authenticated"] = true;
            
            header("Location: " . $path . "index.php");
            echo "<p> Login Successful! </p>";
        //* If the password doesn't equal crypt's password and salt, then echo out 'Login invalid: Invalid username and password'.
        } else {
            echo "<p> Login Invalid: Invalid username and password. </p.";
        }
    }
    //* If $query's number of rows doesn't equal 1, then echo out 'Login Unsuccessful: Invalid username and password',
    else {
        echo "<p> Login Unsuccessful: Invalid username and password. </p>";
    }