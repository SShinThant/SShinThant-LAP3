<?php

define("GREETING", "Welcome! This is my Assignment!", true);
echo greeting;
echo '<br/>';

echo '<br/>';


$a = 8; 
var_dump($a);
echo '<br/>';
$b = 7.5;
var_dump($b);
echo '<br/>';
$c = "Welcome";
var_dump($c);
echo '<br/>';
$d = true;
var_dump($d); 

echo '<br/>';

echo '<br/>';

// Generate a random number between 1 and 5000
$randomNum = rand(1, 5000);
echo "Random number between 1 and 5000: $randomNum\n";
echo '<br/>';

echo '<br/>';

// Calculate the square root of a given number
$number = 150;
$squareRoot = sqrt($number);
echo "The square root of $number is $squareRoot\n";
echo '<br/>';

echo '<br/>';

// Convert Foot from Celsius to Centimeter
$foot = 15;
$centimeter = $foot * 30.48;
echo "$foot degrees Foot is equal to $centimeter degrees Centimeter\n";
echo '<br/>';

echo '<br/>';

// Calculation of the given numbers
$number = 30;
$number1 = 57;
$number2 = 24;
$number3 = 90;
$calculation = ($number + $number1) * $number2 / $number3 ;
echo "The calculation of the given numbers is $calculation\n";
echo '<br/>';

echo '<br/>';



// Finding Qualified Height to enter the race
const qualified_height = 5.4;
const participants = [
    "John" => 5.8,
    "May" => 5.4,
    "Tori" => 5.1,
    "Joseph" => 6,
    "Mary" => 4.9,
    "Johnny" => 5.3,
    "Koto" => 5.7
];

$totalParticipants = count(participants);
$sumHeights = array_sum(participants);
$average_height = $sumHeights / $totalParticipants;

if ($average_height >= qualified_height) {
    echo "Congratulation on getting qualified to enter this race. Your height is $average_height.\n";
} else {
    echo "We are Sorry to inform you that you are not qualified to enter this race. Try again next year. Your current height right now is $averageGrade.\n";
}


echo "<br/>The Participants who are allowed to enter and who are not allowed:\n <br/>";
foreach (participants as $participants => $height) {
    if ($height >= qualified_height) {
        echo "$participants: Fit to Enter the race\n";
    } elseif ($height >= 5.8 && $height <= 6) {
        echo "$participants: Extremely Fit to Enter the race\n";
    } else {
        echo "$participants: Unqualified to enter the race\n";
    }
    echo "<br/>";
}

$ExtremelyFit = max(participants);
$Fit = min(participants);

echo "\n";
echo "The average height of Extremely Fit Participants are $ExtremelyFit\n and ";
echo "The average height of Fit Paritcipants are $Fit\n";


?>