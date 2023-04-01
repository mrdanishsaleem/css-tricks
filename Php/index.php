<!-- Challenge # 1 PHP: Syntax and Tags -->
<?php

echo "This is PHP";

?>

<!-- Challenge # 2 PHP: Comment Your Code -->

<?php

// echo "HelloWorld to PHP";

?>

<!-- Challenge # 3 PHP: Declaring Variables -->

<?php

// Example
$txt = 'Hello world!';
$x = 5;
$y = 10.5;

// Don't write above this line

$interns = 'Pakistan';

?>

<!-- Challenge # 4 PHP: Case Sensitivity of Variables -->

<?php

// Example
$properCamelCase = "just some random string";

//Your code here

$myName = "Danish Saleem";
?>

<!-- Challenge # 5 PHP: Output Statements -->

<?php
//Your code here

$x = 20;
$z = 30;

echo $z - $x;

?>

<!-- Challenge # 6 PHP: strings -->

<?php

//declaring a string variable
$name = "John Doe";
echo $name;

// your code here
$string_1 = "This is a string in double quotes";
?>

<!-- Challenge # 7 PHP: Initializing PHP Variables with the Assignment Operator -->

<?php

// Example
$ourVar = 19;

// Only change code below this line
$varDigit = 9;

?>

<!-- Challenge # 8 PHP: Storing Values with the Assignment Operator -->

<?php

// Change your code here

$a = 0;
$b = 9;
$b = $a;

?>

<!-- Challenge # 9 PHP: Integers -->

<?php

//Your code here
$var_integer = 10;

?>

<!-- Challenge # 10 PHP: Floating Numbers -->

<?php

// Your code here:
$var_float = 10.22;
?>

<!-- Challenge # 11 PHP: Division -->

<?php

// Example
$myVar = 12 / 2; // assigned 6

// do not write above this line
$result = 100 / 10;

?>

<!-- Challenge # 12 PHP: Multiplication -->

<?php

// Example
$myVar = 13 * 13; // assigned 169

// do not write above this line
$result = 5 * 6;

?>

<!-- Challenge # 13 PHP: Subtraction -->

<?php

// Example
$myVar = 12 - 6; // assigned 6

// do not write above this line
$difference = 20 - 10;

?>

<!-- Challenge # 14 PHP: Increment a Number -->

<?php

$myVar = 100;

// Only change code below this line
$myVar = $myVar++;

?>

<!-- Challenge # 15 PHP: Decrement a Number -->

<?php

$myVar = 10;

// Only change code below this line
$myVar = $myVar--;

?>

<!-- Challenge # 16 PHP: If Statement -->

<?php

//Sample code
$day = "Saturday";
if ($day == "Saturday") {
    echo "It's a Weekend";
}

?>

<!-- Challenge # 17 PHP: Switch Statement -->

<?php

// Sample code

$d = date("D");

switch ($d) {
    case "Mon":
        echo "Today is Monday";
        break;
    case "Tue":
        echo "Today is Tuesday";
        break;
    case "Wed":
        echo "Today is Wednesday";
        break;
    case "Thu":
        echo "Today is Thursday";
        break;
    case "Fri":
        echo "Today is Friday";
        break;
    case "Sat":
        echo "Today is Saturday";
        break;
    case "Sun":
        echo "Today is Holiday!";
        break;
    default:
        echo "Wonder which day is this ?";
}
?>

<!-- Challenge # 18 PHP: While Loop -->

<?php

//sample code
$i = 0;
$num = 50;

while ($i < 20) {
    $num--;
    $i++;
}
echo ("Loop stopped at i = $i and num = $num");

?>

<!-- Challenge # 19 PHP: For Loop -->

<?php
$v_init = 1;
$v_stop  = 21;
for ($i = $v_init; $i < $v_stop; $i++) {
    echo $i;
}
?>

<!-- Challenge # 20 PHP: Functions -->

<?php

// Defining a PHP Function
function writeMessage()
{
    echo "You are really a nice person, Have a nice time!";
}

// Calling a PHP Function
writeMessage();

// Your code here

function reusableFunction()
{
    echo "Hello World!";
}

// Calling reusable Function
reusableFunction();
?>

<!-- Challenge # 21 PHP: Functions with Parameters -->

<?php

// your code here

// create a function called subFunction
function subFunction($para1, $para2)
{
    // subtract $para1 from $para2 and save it in $difference variable
    $difference = $para2 - $para1;
    // write output statement that prints the result from the $difference variable
    echo "The result is $difference";
}

// test the function with some values
subFunction(5, 10);

?>

<!-- Challenge # 22 PHP: Display output of Sum of two variables -->

<?php

// Write your code below this line

$x = 10;
$y = 20;

echo $x + $y;

?>

<!-- Challenge # 23 PHP: Length of String -->

<?php

// Write your code below this line
echo strlen("Hello World!"); // prints 12

?>

<!-- Challenge # 24 PHP: Reverse the string -->

<?php

// Write your code below this line

echo strrev("Hello World!"); // Prints "!dlroW olleH"

?>

<!-- Challenge # 25 PHP: Replacement text -->

<?php

// Write your code below this line
$x = "Hello World!"; // declare the variable x and assign string "Hello World!"
$x = str_replace("World", "Dolly", $x); // replace the word "World" with the word "Dolly"
echo $x; // output the variable x
?>

<!-- Challenge # 26 PHP: Display output of Multiplication of two variables -->

<?php

// Write your code below this line
echo 10 * 5;
?>

<!-- Challenge # 27 PHP: Display output of Division of two variables -->

<?php

// Write your code below this line
echo 10 / 2;
?>

<!-- Challenge # 28 PHP: Modify comparison operator -->

<?php

// Write your code below this line

$a = 10;
$b = 20;
var_dump($a != $b);

?>

<!-- Challenge # 29 PHP: Modify comparison operator -->

<?php

// Write your code below this line

$a = 10;
$b = 10;
var_dump($a == $b);

?>

<!-- Challenge # 30 PHP: Output when condition is met -->

<?php

$a = 20;
$b = 10;

// Write your code below this line

if ($a > $b) {
    echo "Hello World";
}

?>

<!-- Challenge # 31 PHP: Output when condition is not met -->

<?php

$a = 20;
$b = 10;

// Write your code below this line
if ($a != $b) {
    echo "Hello World";
}

?>

<!-- Challenge # 32 PHP: Output based on the conditions -->

<?php

$a = 20;
$b = 20;

// Write your code below this line
if ($a == $b) {
    echo "1";
} else if ($a > $b) {
    echo "2";
} else {
    echo "3";
}
?>

<!-- Challenge # 33 PHP: Output based on the conditions -->

<?php

$a = 20;
$b = 20;

// Write your code below this line
if ($a == $b) {
    echo "Yes";
} else {
    echo "No";
}
?>

<!-- Challenge # 34 PHP: Use switch statement for colors identification -->

<?php

$color  = "red";

// Modify the code below this line
switch ($color) {
    case "red":
        echo "Hello";
        break;
    case "green":
        echo "Welcome";
        break;
    default:
        echo "No Color Found";
}
?>

<!-- Challenge # 35 PHP: Modify switch statement -->

<?php

$color  = "red";

// Modify the code below this line
switch ($color) {
    case "red":
        break;
    case "green":
        break;
    default:
        echo "Neither";
}
?>

<!-- Challenge # 36 PHP: Use for loop with display output -->

<?php

// Write your code below this line
for ($i = 0; $i < 6; $i++) {
    echo $i . "\n";
}

?>

<!-- Challenge # 37 PHP: Use do while with display output -->

<?php

// Write your code below this line

// Declare a variable $i and assign value 0
$i = 0;

// Using the variable $i loop through as long as $i is less than 6 using do while
do {
    // Within the loop output $i
    // Use echo statement to output $i
    echo $i . "\n";

    // The increment operator should be used after the echo statement
    $i++;
} while ($i < 6); // Loop condition

?>

<!-- Challenge # 38 PHP: Use for loop to display output -->

<?php

// Write your code below this line

for ($i = 10; $i > 1; $i--) {
    echo $i . "\n";
}

?>