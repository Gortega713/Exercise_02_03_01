<!DOCTYPE html>
<html lang="en">

<head>
   <!--   
   
   Author: Gabriel Ortega
   Date: 9.24.18
   
   Filename: ValidateCreditCard.php
   
   -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Validate Credit Card </title>
    <script src="modernizr.custom.65897.js"></script>
</head>

<body>

    <h2>Validate Credit Card</h2>
    
    <?php
    // Global Array
    $creditCard = array("", 
                       "0910-1234-5678-6543", 
                       "0000-9123-4567-0123");
    
    // Iterate through the array and for each new element, set that value to the new variable "cardNumber". 
    foreach ($creditCard as $indexNumber => $cardNumber) {
        // If variable has no value, run if clause
        if (empty($cardNumber)) {
            echo "<p>Credit Card Number $indexNumber is invalid because it contains an empty string.</p>";
        } else {
            // turn new variable from foreach loop into $creditCardNumber
            // Remove each dash and space within each phone number from the array
            $creditCardNumber = $cardNumber;
            $creditCardNumber = str_replace("-", "", $creditCardNumber);
            $creditCardNumber = str_replace(" ", "", $creditCardNumber);
            echo "<p>Credit Card Number $indexNumber $creditCardNumber removed dashes and spaces.";
            // Display messages
            if (!is_numeric($creditCardNumber)) {
                echo "<p>Credit Card Number $indexNumber $creditCardNumber is invalid because it contains a non-numeric character.</p>";
            } else {
                echo "<p>Credit Card Number $indexNumber $creditCardNumber is a valid Credit Card Number.</p>";
            }
        }
    }
    ?>

</body>

</html>
