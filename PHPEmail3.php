<!DOCTYPE html>
<html lang="en">

<head>
    <!--   
   
   Author: Gabriel Ortega
   Date: 9.21.18
   
   Filename: PHPEmail3.php
   
   -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> PHP Email 3</title>
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
        if (preg_match("/^[\w-]+(\.[\w-])*@[\w-]+(\.[\w-]+)*(\.A-Za-z){2,}$/i", $address) == 1) {
            return true;
        } else {
            return false;
        }
    }
    
    function sortAddresses($addresses) {
        $sortedAddresses = array();
        $iLimit = count($addresses) - 1;
        $jLimit = count($addresses);
        for ($i = 0; $i < $iLimit; $i++) {
            $currentAddress = $addresses[$i];
            for ($j = $i + 1; $j < $jLimit; $j++) {
                if (strcasecmp($currentAddress, $addresses[$j]) > 0) {
                    $tempValue = $addresses[$j];
                    $addresses[$j] = $currentAddress;
                    $currentAddress = $tempValue;
                }
            }
            $sortedAddresses[] = $currentAddress;
        }
        return($sortedAddresses);
    }
    
    $sortedAddresses = sortAddresses($emailAddresses);
    $sortedAddressList = implode(", ", $sortedAddresses);
    echo "<p>Sorted Adresses: $sortedAddressList</p>\n";
    
    foreach ($sortedAddresses as $thisAddress) {
        if (validateAddress($thisAddress) === false) {
            echo "<p>The e-mail address <em>$thisAddress</em> does not appear to be valid.</p>";
        }
    }
    ?>

</body>

</html>
