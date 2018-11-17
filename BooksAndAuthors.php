<!DOCTYPE html>
<html lang="en">

<head>
    <!--   
   
   Author: Gabriel Ortega
   Date: 9.20.18
   
   Filename: BooksAndAuthors.php
   
   -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Books And Authors </title>
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Books</h2>
    
    <?php
    // Global Variables
    $books = array("The Adventures of Huckleberry Finn", "Nineteen Eighty-Four", "Alice's Adventures in Wonderland", "The Cat in the Hat");
    $authors = array("Mark Twain", "George Orwell", "Lewis Carroll", "Dr. Seuss");
    $realNames = array("Samuel Clemens", "Eric Blair", "Charles Dodson", "Theodore Geisel");
    
    // Display all arrays in a formatted sentence
    for ($i = 0; $i < count($books); $i++) {
        echo "<p>The real name of {$authors[$i]}, " . "the author of \"{$books[$i]}\", " . "is {$realNames[$i]}.</p>";
    }
    
    for ($i = 0; $i < count($books); $i++) {
        echo "<p>The title \"{$books[$i]}\" contains " . strlen($books[$i]) . " characters and " . str_word_count($books[$i]) . " words.</p>";
    }
    
    echo "<h2>Manipulating Strings</h2>";
    $startingText = "mAdAm, i'M aDaM";
    
    // Convert text to Uppercase
    $uppercaseText = strtoupper($startingText);
    
    // Convert text to lowercase
    $lowercaseText = strtolower($startingText);
    
    echo "<p>$uppercaseText</p>\n";
    echo "<p>$lowercaseText</p>\n";
    
    // Uppercase the first letter of the first word
    echo"<p>" . ucfirst($lowercaseText) . "</p>\n";
    echo"<p>" . lcfirst($uppercaseText) . "</p>\n";
    
    // Capitalize first letter of each word
    $workingText = ucwords($lowercaseText); 
    echo "<p>$workingText</p>";
    
    echo "<h2>Other Manipulations</h2>";
    echo"<p>" . md5($workingText) . "</p>\n";
    // Two parameters = start/finish
    echo"<p>" . substr($workingText, 0, 6) . "</p>\n";
    
    // One parameter = start at number, display everything after
    echo"<p>" . substr($workingText, 7) . "</p>\n";
    
    // Reverse Text
    echo"<p>" . strrev($workingText) . "</p>\n";
    
    // Shuffle Text
    echo"<p>" . str_shuffle($workingText) . "</p>\n";
    ?>
    
</body>

</html>
