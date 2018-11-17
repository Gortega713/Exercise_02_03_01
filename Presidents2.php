<!DOCTYPE html>
<html lang="en">

<head>
    <!--   
   
   Author: Gabriel Ortega
   Date: 9.20.18
   
   Filename: Presidents2.php
   
   -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Presidents 2 </title>
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>
    <h2>Presidents 2</h2>
    
    <?php
    $presidents = "George Washington;John Adams;Thomas Jefferson;James Madison;James Monroe";
    
    $thisPresident = strtok($presidents, ";");
    while ($thisPresident != NULL) {
        echo "$thisPresident<br>";
        $thisPresident = strtok(";");
    }
    ?>
    
</body>

</html>
