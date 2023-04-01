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

<!-- Challenge # 39 PHP: Use foreach to loop through an array -->

<?php

$colors = array("red", "green", "blue", "yellow");

// Write your code below this line
foreach ($colors as $value) {
    echo $value;
}
?>

<!-- Challenge # 40 PHP: Create and execute a function -->

<?php

// Write your code below this line
function myFunction()
{
    echo "Interns Pakistan";
}
myFunction();
?>

<!-- Challenge # 41 PHP: Create a function that outputs and returns simultaneously -->

<?php

// Write your code below this line

// Create a function named myFunction that has two parameters: $para1 and $para2
function myFunction($para1, $para2)
{
    // Inside the function output the $para1 and then return the $para2
    // Use echo statement for displaying the output.
    echo $para1;
    return $para2;
}

// Call (execute) a function using this code:
myFunction("Hello", "World");

?>

<!-- Challenge # 42 PHP: Create a function that outputs no of items in an array -->

<?php

$colors = array("red", "green", "blue", "yellow");

// Write your code below this line

// Create a function named myFunction that takes parameter: $array
function myFunction($array)
{
    // Output using echo statement the number of items in an array
    echo "The number of items in the array is " . count($array) . "\n";
}

// Call (execute) a function and pass the $colors array as parameter value
myFunction($colors);

?>

<!-- Challenge # 43 PHP: Create a function that output an item of an array -->

<?php

$colors = array("red", "green", "blue", "yellow");

// Write your code below this line

// Define a function named myFunction that takes one parameter: $array
function myFunction($array)
{
    // Return the second item in the $array
    return $array[1];
}

// Call the function and pass the $colors array as an argument
echo myFunction($colors); // This should print "green"

?>

<!-- Challenge # 44 PHP: Create a swap function -->

<?php

$v1  = 3;
$v2  = 4;

// Write your code below this line

// Create a function named swapFunction
function swapFunction($val1, $val2)
{
    // Use $temp to hold the value of $val1
    $temp = $val1;
    // Swap the values of $val1 and $val2
    $val1 = $val2;
    $val2 = $temp;
    // Output the $val1 and $val2 using echo statement
    echo $val1 . "\n";
    echo $val2 . "\n";
}

// Call the function and pass the $v1 and $v2 as parameters
swapFunction($v1, $v2);

?>

<!-- Challenge # 45 PHP: Complete the code that checks odd number -->

<?php

$v1  = 3;

function testOddNumber($value)
{

    //Get the remainder of our number divided by 2.
    $remainder = $value % 2;

    //If the remainder is not equal to 0, then it means
    //that the number is odd.
    if ($remainder != 0) {
        echo $value . ' is odd!';
    }
}

testOddNumber($v1);

?>

<!-- Challenge # 46 PHP: Create a function that converts string to lowercase -->

<?php
// Define a function named stringtoLowerCase that takes a parameter $string
function stringtoLowerCase($string)
{
    // Convert the parameter to lower case using the strtolower function
    $string = strtolower($string);
    // Output the parameter after conversion using echo statement
    echo $string;
    // Return the parameter value
    return $string;
}

// Define a variable $str with some value
$str = "Hello World!";

// Call the function by passing the $str in parameter
stringtoLowerCase($str);
?>

<!-- Challenge # 47 PHP: Modify the code to output as per condition required -->

<?php

// Modify the code here
for ($x = 1; $x <= 10; $x++) {
    if ($x < 10) {
        echo "$x-"; // add a hyphen after each number except the last one
    } else {
        echo "$x"; // no hyphen after the last number
    }
}

?>

<!-- Challenge # 48 PHP: Use php code within HTML elements -->

Here is the code that I generated based on your instructions:

<?php $var = 'PHP Tutorial'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title><?php echo $var; ?> | Interns Pakistan!</title>
</head>

<body>
    <h3><?php echo $var; ?></h3>
    <p>PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. It is a cross-platform, HTML embedded server-side scripting language and is especially suited for web development.</p>
    <p><a href="#"><?php echo $var; ?></a></p>
</body>

</html>

<!-- Challenge # 49 PHP: Create a function that loops as per parameter settings -->

<?php

$start_var  = 1;
$end_val  = 10;

//Write your code below this line

//Create a function named myFunction that takes parameters: $start and $end
function myFunction($start, $end)
{
    $i = $start;
    while ($i < $end) {

        echo "$i\n";

        $i++;
    }
}

myFunction($start_var, $end_val);

?>

<!-- Challenge # 50 PHP: Create a function that converts string to uppercase -->

<?php

$str  = "Interns Pakistan";

// Write your code below this line

function stringtoUpperCase($string)
{
    echo strtoupper($string);
}

stringtoUpperCase($str);

?>