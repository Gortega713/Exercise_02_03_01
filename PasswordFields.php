<!DOCTYPE html>
<html lang="en">

<head>
    <!--   
   
   Author: Gabriel Ortega
   Date: 9.21.18
   
   Filename: PasswordFields.php
   
   -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Password Fields </title>
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Password Fields</h2>

    <?php
    // Global Variables
    $record = "jdoe:8w4dso3a39yk2:1463:24:John Doe:/home/jdoe:/bin/bash";
    $passwordFields = array("login name", 
                            "optional encrypted password", 
                            "numerical user ID", 
                            "numerical group ID", 
                            "user name", 
                            "user home directory", 
                            "optional user command interpreter");
    // Counters
    $fieldIndex = 0;
    $extraFields = 0;
    
    // Keep reading data and when it hits a ":", put the value into the variable
    $currentField = strtok($record, ":");
    
    // Test for a field, if the field is present, match is up with $passwordFields
    while ($currentField != NULL) {
        if ($fieldIndex < count($passwordFields)) {
            echo "<p>The {$passwordFields[$fieldIndex]} is <em>$currentField</em></p>\n";
        } else {
            // Too many pieces in $record, not enough to match up with $passwordFields
            ++$extraFields;
            echo "<p>Extra field # $extraFields is <em>$currentField</em></p>";
        }
        
        $currentField = strtok(":");
        ++$fieldIndex;
    }
    ?>

</body>

</html>
