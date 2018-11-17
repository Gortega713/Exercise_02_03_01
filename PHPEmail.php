<!DOCTYPE html>
<html lang="en">

<head>
    <!--   
   
   Author: Gabriel Ortega
   Date: 9.20.18
   
   Filename: PHPEmail.php
   
   -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> PHP Email </title>
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>

    <?php
    $emailAddresses = array("john.smith@php.test", 
                            "mary.smith.mail@php.example",
                            "john.jones@php.invalid",
                            "alan.smithee@test",
                            "jsmith456@example.com",
                            "jsmith456@test",
                            "mjones@example",
                            "mjones@example.net",
                            "jane.a.doe@example.org");
    
    function validateAddress($address) {
        // Check for validity
        if (strpos($address, '@') !== false && strpos($address, '.') !== false) {
            return true;
        } else {
            return false;
        }
    }
    
    foreach ($emailAddresses as $thisAddress) {
        if (validateAddress($thisAddress) === false) {
            echo "<p>The e-mail address <em>$thisAddress</em> does not appear to be valid.</p>";
        }
    }
    ?>

</body>

</html>
