<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Validate Local Address </title>
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>

    <h2>Validate Local Address</h2>

    <?php
    // Global Array
    $email = array("jsmith123@example.org", 
                  "john.smith.mail@example.org", 
                  "john.smith.@example.org", 
                  "john.smith@example", 
                  "jsmith123@mail.example.org");
    
    // Print each email stating whether or not it is valid
    foreach ($email as $emailAddress) {
        echo "The email address &ldquo;" . $emailAddress . "&rdquo; ";
        // Match each email to this RegEx. If there is no match, it is not valid.
        if (preg_match("/^(([A-Za-z]+\d+)|" . "([A-Za-z]+\.[A-Za-z]+))" . "@((mail\.)?)example\.org$/i", $emailAddress) == 1) {
            echo " is a valid e-mail address.<br>";
        }  else {
            echo " is not a valid e-mail address.<br>";
        }
    }
    ?>

</body>

</html>
