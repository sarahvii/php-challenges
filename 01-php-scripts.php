// variables string and math
<?php 

$width = 10;
$height = 5;
$area = $width * $height;

$string1 = 'The rectangle has a width of ';
$string2 = ' meters, a height of ';
$string3 = ' meters, and an area of ';
$string4 = ' square meters.';

$concatenated = $string1 . $width . $string2 . $height . $string3 . $area . $string4;

echo $concatenated . "\n";

?>

// strings, numbers and maths
<?php 
// integer
$num1 = 10;
$num2 = 5;

// string
$stringaddition = 'Addition of ';
$stringsubtraction = 'Subtraction of ';
$stringmultiplication = 'Multiplication of ';
$stringdivision = 'Division of ';
$stringconcatenation = 'Concatenation of ';
$stringand = ' and ';
$stringis = ' is: ';

// mathematical operations
$addition = $num1 + $num2;
$subtraction = $num1 - $num2;
$multiplication = $num1 * $num2;
$division = $num1 / $num2;
$concatenation = $num1 . $num2;

// output
$outputaddition = $stringaddition . $num1 . $stringand . $num2 . $stringis . $addition;
$outputsubtraction = $stringsubtraction . $num1 . $stringand . $num2 . $stringis . $subtraction;
$outputmultiplication = $stringmultiplication . $num1 . $stringand . $num2 . $stringis . $multiplication;
$outputdivision = $stringdivision . $num1 . $stringand . $num2 . $stringis . $division;
$outputconcatenation = $stringconcatenation . $num1 . $stringand . $num2 . $stringis . $concatenation;


// print
echo $outputaddition . "\n";
echo $outputsubtraction . "\n";
echo $outputmultiplication . "\n";
echo $outputdivision . "\n";
echo $outputconcatenation . "\n";

?>

// age calculator
<?php 

$age = 25;
$days = $age * 365;
$hours = $days * 24;
$minutes = $hours * 60;

echo "Welcome to the Age Calculator!" . "\n";
echo "Your age: " . $age . "\n";
echo "You have been alive for: " . $days . " days" . "\n";
echo $hours . " hours" . "\n";
echo $minutes . " minutes" . "\n";

?>

// days of the week
<?php 

$days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");

echo "Days of the Week" . "\n";
foreach( $days as $day) {
    echo " \u{2022} $day \n";
}
?>

// associative array
<?php 

$months = array("Jul-Aug", "Jan-Feb");
$hightemps = array("Jul-Aug" => 19, "Jan-Feb" => 11);
$lowtemps = array("Jul-Aug" => 11, "Jan-Feb" => 1);


echo "Average Temperature in Edinburgh" . "\n";
echo "Month" . "\t\t" . "High" . "\t" . "Low" . "\n";

foreach ($months as $month) {
    echo $month . "\t\t" . $hightemps[$month] . "\u{00B0}C" . "\t" . $lowtemps[$month] . "\u{00B0}C" . "\n";
}

?>

// multi-dimensional array
<?php 

$results = array(
    "Physics" => array (
        "Aarron" => "74%",
        "Jamie" => "64%",
        "Harry" => "55%"
    ),
    "English" => array (
        "Aarron" => "69%",
        "Jamie" => "79%",
        "Harry" => "52%"
    ),
    "Maths" => array (
        "Aarron" => "70%",
        "Jamie" => "69%",
        "Harry" => "57%"
    )
    );

echo "Student Results" . "\n";
echo "Result for Physics for Aarron: " . $results['Physics']['Aarron'] . "\n";
echo "Result for English for Jamie: " . $results['English']['Jamie'] . "\n";
echo "Result for Maths for Harry: " . $results['Maths']['Harry'] . "\n";


?>
