<?php

echo "<h1> Welcome to My PHP Page </h1>";


echo "hello world <br>";

$userName = "Mohamed";

echo "Hello, " . $userName . "! ";



// Display an image
$path = "img/";
$skyImage = "saudai1.jpg";

echo "<br><img src='" . $path . $skyImage . "' alt='Sky Image' style='width:300px;height:auto;'><br>";


// String variable
$s = "The sky is beautiful today.";
echo " <br>  $s <br>";

var_dump($s);
echo "<br>";

print_r($s);
echo "<br>";

// Integer variable
$age = 25;  
echo "Age: $age <br>";
var_dump($age);
echo "<br>";
print_r($age);
echo "<br>";

// Float variable
 $fruits = array("Apple", "Banana", "Orange");
 echo "Fruits: $fruits[0], $fruits[1], $fruits[2] <br>";

 if (in_array("Banana", $fruits)) {
    echo "Banana is in the fruits array. <br>";
} else {
    echo "Banana is not in the fruits array. <br>";     
}

// Associative array
$bebsita = array(
    "name" => "Bebsi",
    "type" => "Soda",
    "flavor" => "Cola"
);
echo "Bebsi Details: Name : " . $bebsita["name"] .
 ", Type : " . $bebsita["type"] .
 ", Flavor : " . $bebsita["flavor"] . "<br>";

if (in_array("Soda", $bebsita)) {
    echo "this is not healty. <br>";
} else {
    echo "this is healthy. <br>";     
}   

// Function to greet user

function greet($fristName, $lastName) {
    return "Hello, " . $fristName . $lastName .  "! Welcome to our website.<br>";
}
echo greet("Mohamed ", "Khalifa");


//switch statement
$day = date("D");
switch ($day) {
    case "Mon":
        echo "Today is Monday. <br>";
        break;
    case "Tue":
        echo "Today is Tuesday. <br>";
        break;
    case "Wed":
        echo "Today is Wednesday. <br>";
        break;
    case "Thu":
        echo "Today is Thursday. <br>";
        break;
    case "Fri":
        echo "Today is Friday. <br>";
        break;
    case "Sat":
        echo "Today is Saturday. <br>";
        break;
    case "Sun":
        echo "Today is Sunday. <br>";
        break;
    default:
        echo "Unknown day. <br>";
        break;
}


// Loop through numbers 1 to 5
for ($i = 1; $i <= 5; $i++) {
    echo "Number: " . $i . "<br>";

}


//for each loop through an array
$colors = array("Red", "Green", "Blue");
foreach ($colors as $color) {
    echo "Color: " . $color . "<br>";
}   





// Display current date and time
echo date(" <br> Y-m-d H:i:s");


// include another PHP file

include 'footer.php';


// require another PHP file

require 'footer.php';


//session example
session_start();
$_SESSION["username"] = "Mohamed_Khalifa";
echo "Session username is " . $_SESSION["username"] . "<br>";



//math
echo(min(0, 150, 30, 20, -8, -200)) . "<br>";
echo(max(0, 150, 30, 20, -8, -200)) . "<br>";





?>


