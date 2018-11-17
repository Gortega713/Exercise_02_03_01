<!DOCTYPE html>
<html lang="en">

<head>
    <!--   
   
   Author: Gabriel Ortega
   Date: 9.19.18
   
   Filename: MusicalScale.php
   
   -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Strings </title>
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Musical Scale</h2>
    
    <?php
    $musicalScale = array("do", "re", "me", "fa", "so", "la", "ti");
    $outputString = "The notes of the musical scale are: ";
    
    foreach ($musicalScale as $currentNote) {
        $outputString .= " " . $currentNote;
    }
    echo "<p>$outputString</p>";
    
    echo "<h2>Formatted Text</h2>";
    $displayValue = 9.876;
    // Pre tag is raw input. Dont change it
    echo "<pre>\n";
    echo "Unformatted text line 1. \r\n";
    echo "\tUnformatted text line 2. \r\n";
    echo "\$displayValue = $displayValue";
    echo "</pre>\n";
    ?>
    
</body>

</html>
