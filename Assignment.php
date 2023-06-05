<?php

// Converting Fahrenheit to Kelvin & finding the temperature
$Fahrenheit = 32.5;
$Kelvin = ($Fahrenheit - 32) * 5/9 + 273.15;
$LabTemperature = "The lab room temperature in Kelvin is $Kelvin\n";
echo $LabTemperature;

echo "<br/>";

if ($Kelvin < 100)
{
    echo "The lab room is freezing and it is not safe.\n";
}
else if ($Kelvin >= 100 && $Kelvin <= 500)
{
    echo "The lab room is in a cool temperature.\n";
}
else if ($Kelvin >= 500 && $Kelvin <= 1000)
{
    echo "The lab room is in a normal temperature.\n";
}
else if ($Kelvin >= 1000 && $Kelvin <= 1500)
{
    echo "The lab room is in a warm temperature.\n";
}
else if ($Kelvin >= 1500 && $Kelvin <= 2000)
{
    echo "The lab room is in a really hot temperature.\n";
}
else 
{
    echo "The lab room is in a scorching temperature and it is not safe.\n";
}



?>