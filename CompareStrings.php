<!DOCTYPE html>
<html lang="en">

<head>
   <!--   
   
   Author: Gabriel Ortega
   Date: 9.24.18
   
   Filename: CompareStrings.php
   
   -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Compare Strings </title>
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>

    <h2>Compare Strings</h2>

    <?php
    // Global Variables
    $firstString = "Geek2Geek";
    $secondString = "Geezer2Geek";
    
    // If variable is empty, run if clause
    if (!empty($firstString) && !empty($secondString)) {
        // If both strings are equal
        if ($firstString == $secondString) {
            echo "<p>Both strings are the same.</p>";
        } else {
            // If strings are not the same
            // Display how many characters are the same from the strings and how many need to be changed to be the same
            echo "<p>Both strings have " . similar_text($firstString, $secondString) . " character(s) in common.</p>";
            echo "<p>You must change " . levenshtein($firstString, $secondString) . " character(s) to make the strings the same";
        }
    } else {
        echo "<p>Either the \$firstString variable or the \$secondString variable does not contain a value so the two strings cannot be compared.</p>";
    }
    ?>

</body>

</html>
