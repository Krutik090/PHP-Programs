<?php
#(1)	WAP to check whether the given year is leap year or not? (Using if) 
/*
$year = 2024; 
$flag=false;
if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
   $flag= true;
} else {
   $flag= false;
}

if($flag==true){
   echo $year ."is leap year";
}else{
   echo $year. "is not leap year";
}
*/
#(6)	WAP to find out the solutions of quadratic equations. (Using if else ladder) 
/*

$a = 1;
$b = -3;
$c = 2;

$discriminant = $b * $b - 4 * $a * $c;

if ($discriminant > 0) {
    $root1 = (-$b + sqrt($discriminant)) / (2 * $a);
    $root2 = (-$b - sqrt($discriminant)) / (2 * $a);
    echo "The roots of the quadratic equation are: $root1 and $root2";
} elseif ($discriminant == 0) {
    $root = -$b / (2 * $a);
    echo "The quadratic equation has a single root: $root";
} else {
    echo "The quadratic equation has imaginary roots";
}

*/

/*
$percentage = 75; // Change this to test different percentages

switch ($percentage) {
    case ($percentage >= 70 && $percentage <= 100):
        echo "Distinction";
        break;
    case ($percentage >= 60 && $percentage < 70):
        echo "First Class";
        break;
    case ($percentage >= 50 && $percentage < 60):
        echo "Second Class";
        break;
    case ($percentage >= 40 && $percentage < 50):
        echo "Pass";
        break;
    case ($percentage >= 0 && $percentage < 40):
        echo "Fail";
        break;
    default:
        echo "Invalid Percentage";
}
*/






/*
WAP to print the following series and its sum for n terms. ( Here n is user defined value) 
 
(1)	1 + 4 – 9 + 16 – 25 + 36 – 49 ….  */

/*
$n = 10; // Change this to set the number of terms

$sum = 0;
$sign = 1; // Sign alternates between 1 and -1 for addition and subtraction
$current_term = 1; // Start with the first term

echo "Series: ";
for ($i = 1; $i <= $n; $i++) {
    $sum += $sign * $current_term; // Add or subtract the current term from the sum
    echo $sign == 1 ? "+$current_term" : "-$current_term";

    // Calculate the next term (square of the current term plus 1)
    $current_term = pow($i + 1, 2);

    // Toggle the sign for the next iteration
    $sign *= -1;
}

echo "\nSum of the series for $n terms: $sum";
*/



#$(2)	1! + 2! + 3! + 4! + 5! …. 
/*
$n = 5; // Change this to the desired number of terms

$sum = 0;
$factorial = 1;
echo "Series: ";
for ($i = 1; $i <= $n; $i++) {
    $factorial *= $i;
    $sum += $factorial;
    echo "$i!";
    if ($i < $n) {
        echo " + ";
    }
}
echo "\nSum of the series for $n terms: $sum";

*/
#(3)	1 – 1/4 + 1/9 – 1/16 + 1/25 …. 
/*
$n = 5; // Change this to set the number of terms

$sum = 0;
$sign = 1;

echo "Series: ";
for ($i = 1; $i <= $n; $i++) {
    $term = $sign * (1 / ($i * $i));
    echo "1/".$i*$i;
    if ($i < $n) {
        echo " + ";
    }
    $sum += $term;
    $sign *= -1;
}

echo "\nSum of the series for $n terms: $sum";
*/
#(4)	2, 6, 21, 88, 445 …. 
/*
$n = 5; // Change this to the desired number of terms

$sum = 0;
$current_term = 2;

echo "Series: ";
for ($i = 0; $i < $n; $i++) {
    echo "$current_term";

    // Calculate the next term in the series
    $current_term = $current_term * 4 + 2;

    // Add the current term to the sum
    $sum += $current_term;

    if ($i < $n - 1) {
        echo ", ";
    }
}

echo "\nSum of first $n terms: $sum";
*/

#(5)	3, 7, 27, 47, 83 …. 
/*
// User-defined value for n (number of terms)
$n = 5;

// Initialize the first term
$term = 3;

// Initialize the sum
$sum = 0;

// Generate the series and calculate the sum
for ($i = 1; $i <= $n; $i++) {
    echo $term;
    $sum += $term;
    if ($i < $n) {
        echo ", ";
    }
    $term += ($i % 2 == 0) ? 20 : 4;
}

// Display the total sum
echo PHP_EOL . "Sum of the first $n terms: $sum" . PHP_EOL;
?>

*/
#(6)	x + x2 + x3 + x4 + x5 …. ( Here x is user defined value ) 
/*
$x = 2; // Change these values to test different series
$n = 5;

$sum = 0;
echo "Series: ";
for ($i = 1; $i <= $n; $i++) {
    $term = pow($x, $i);
    $sum += $term;
    echo $term;
    if ($i < $n) {
        echo " + ";
    }
}

echo "\nSum of the series: $sum";
*/
#(7)	x + x2/2! + x3/3! + x4/4! + x5/5! …. ( Here x is user defined value ) 
/*
$n = 5; // Change this to the number of terms you want
$x = 2; // Change this to the value of x

$sum = 0;
$factorial = 1;

echo "Series: ";
for ($i = 1; $i <= $n; $i++) {
    $factorial *= $i;
    $term = pow($x, $i) / $factorial;
    $sum += $term;
    
    echo "$x^$i/$i!";
    if ($i < $n) {
        echo " + ";
    }
}

echo "\nSum: $sum";
*/
#(8) 1 – x + x2/2! – x3/3! + x4/4! – x5/5! …. ( Here x is user defined value ) 
/*
$n = 5; // Change this to test with different values of n
$x = 2; // Change this to test with different values of x

$sum = 0;
$sign = 1;
$factorial = 1;

echo "Series: ";
for ($i = 0; $i < $n; $i++) {
    $term = $sign * pow($x, $i) / $factorial;
    echo $term;
    
    if ($i < $n - 1) {
        echo " - ";
    }
    
    $sum += $term;
    $sign *= -1;
    $factorial *= ($i + 1);
}

echo "\nSum of series for $n terms: $sum";
*/

#(9)	Fibonacci series: 1 1 2 3 5 8 13 …. 
/*
$n = 7; // Change this to define the number of terms in the series

$first_term = 1;
$second_term = 1;

echo "Fibonacci series: ";
echo "$first_term $second_term ";

$sum = $first_term + $second_term;

for ($i = 3; $i <= $n; $i++) {
    $next_term = $first_term + $second_term;
    echo "$next_term ";
    $sum += $next_term;
    $first_term = $second_term;
    $second_term = $next_term;
}

echo "\nSum of the first $n terms: $sum";
*/

#(10)	Lucca series: 0 1 1 2 3 5 8 …. 
$n = 10; // Change this to set the number of terms in the series

$a = 0;
$b = 1;

echo "Lucca series for $n terms: ";

$sum = 0;

if ($n >= 1) {
    echo "$a ";
    $sum += $a;
}

if ($n >= 2) {
    echo "$b ";
    $sum += $b;
}

for ($i = 3; $i <= $n; $i++) {
    $c = $a + $b;
    echo "$c ";
    $sum += $c;
    $a = $b;
    $b = $c;
}

echo "\nSum of the Lucca series for $n terms: $sum";
