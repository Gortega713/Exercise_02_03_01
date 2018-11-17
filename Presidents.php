<!DOCTYPE html>
<html lang="en">

<head>
    <!--   
   
   Author: Gabriel Ortega
   Date: 9.20.18
   
   Filename: Presidents.php
   
   -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Presidents </title>
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Presidents</h2>
    
    <?php
    $presidents = array("George Washington",
                       "John Adams", 
                       "Thomas Jefferson", 
                       "James Madison", 
                       "James Monroe");
    
    $yearsInOffice = array("1789 to 1797", 
                           "1797 to 1801", 
                           "1801 to 1809", 
                           "1809 to 1817", 
                           "1817 to 1825");
    
    // Brackets are placeholders
    $outputTemplate = "<p>President [NAME] served from [TERM]</p>\n";
    
    // After AS, first variable will get the index while the second will get the value
    foreach ($presidents as $sequence => $name) {
        $tempString = str_replace("[NAME]", $name, $outputTemplate);
        $outputString = str_replace("[TERM]", $yearsInOffice[$sequence], $tempString);
        echo $outputString;
    }
    ?>
    
</body>

</html>
