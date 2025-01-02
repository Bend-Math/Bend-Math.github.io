<!DOCTYPE html>
<html>
    <body>
        <center>
            <p>Test</p>
<?php
$email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }
    
?>
        </center>
    </body>
</html>