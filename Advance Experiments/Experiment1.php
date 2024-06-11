<?php
#(1)	WAP to print the pattern of your name at centre of screen using single echo statement.

// echo "<h1 align='center'> krutik thakar </h1>";

#(2)	WAP to print the pattern of your name at centre of screen using multiple echo statements

/*
 echo "<h1 align='center'>";
 echo "krutik thakar";
 echo "</h1>";

 */

#(3)	WAP which initializes 2 numbers and prints its addition, subtraction, multiplication, division and modules values. 

/*
$a = 10;
$b = 5;

echo "Sum : ".$a + $b;
echo "Sub : ".$a - $b;
echo "Mul : ".$a * $b;
echo "Div : ".$a / $b;
echo "Mod : ".$a % $b;
*/

#(4)	WAP to calculate area and circumference of a circle. 
/*
$rad = 10;
$pi = 3.14;
echo "Area of Circle is :".$pi*$rad*$rad."<br>";
echo "circulference of Circle is :". 2*$pi*$rad;
*/

#(5)	WAP to calculate area and perimeter of a triangle. 
/*
$base = 10; // Base length
$height = 8; // Height (altitude)
$c = 7; // Length of side c


// Calculate the area of the triangle
$area = 0.5 * $base * $height;

// Calculate the perimeter (sum of all sides)
$perimeter = $base + $height + $c;

// Display the results
echo "Triangle Area: " . $area . " square units";
echo "Triangle Perimeter: " . $perimeter . " units";
*/

#(6)	WAP to calculate area and perimeter of a rectangle. 
/*
$length = 12; // Length of the rectangle
$width = 8; // Width of the rectangle

// Calculate the area of the rectangle
$area = $length * $width;

// Calculate the perimeter (total length of all sides)
$perimeter = 2 * ($length + $width);

// Display the results
echo "Rectangle Area: " . $area . " square units" ;
echo "Rectangle Perimeter: " . $perimeter . " units";
*/

#(7)	WAP which converts the temperature from Fahrenheit to Celsius. (Hint: C=(F-32)/1.8) 
/*
$F = 122;
$C =($F-22)/1.8;
echo "Fehrenhit to Celsius is :".number_format($C,2)."C";
*/

#(8)	WAP to calculate the simple interest and compound interest. 
/*
$p = 500; //Principal amount
$r = 5; // Annual interest rate (5% expressed as a decimal)
$t = 2; //Time duration in years

$c = 12; // Number of times interest is compounded per year

$simInt = ($p * $r * $t)/100;
$comInt = $p *(pow(1+($r/$c),$c*$t))-$p;

echo "Simple Intrest : ".$simInt;
echo "Compaound Intrest : ".number_format($comInt,2);
*/
#(9)	WAP to initializes the following values and calculates its gross salary. 
/*
Quantity, Price, Commission rate, Bonus rate, Base salary. 
(Hint: Commission= Quantity * Price * Commission rate 
Bonus=Commission * Bonus rate 
Gross salary=Commission + Bonus + Base salary) 

$qan = 1000; //Quantity
$p = 200; //Price
$crate = 0.02; //Commission rate
$brate = 0.04; //Bonus rate
$baseSal=12000; //Base salary
$com = ($qan *$p*$crate);
$bonus =$com * $brate;
$Gsal = $com + $bonus + $baseSal;

echo "Gross Salary = ". $Gsal; */

#(10)	If the price of an item is in decimal form e.g. 12.50 then separate rupees and paisa from the given value. i.e. output of your program will be 12 rupees and 50 paisa. 
/*
$n = 12.50;
$rupees = (int)$n;
$paisa = ($n - $rupees) * 100;

echo "rupees:".$rupees." Paisa:".$paisa;

*/
#(11)	WAP to swap the values of 2 variables without using any extra variable. i.e. if user enters a=10 and b=20 then output of your program will be a=20 and b=10. 
/*
$a = 10;
$b = 20;
echo "Before Swapping: ".$a . $b;
$a = $a+$b;
$b = $a-$b;
$a = $a-$b;

echo "After Swapping: ".$a . $b;

*/
#(12)	WAP to swap the values of 3 variables without using any extra variable. i.e. if user enters a=10, b=20 and c=30 then output of your program will be a=20, b=30 and c=10. 
/*
$a =10;
$b =20;
$c =30;
echo "Before Swapping: ".$a . $b. $c;
#first swap a and c
$a = $a+$c;
$c = $a-$c;
$a = $a-$c;

#swap a and b
$a = $a+$b;
$b = $a-$b;
$a = $a-$b;

echo "After Swapping: ".$a . $b. $c;
*/
/*
#(13)	WAP to convert the paisa into rupees and paisa. 
$r = 14.50;
$p = 1250;

//paisa to rupees
$paisa = $r * 100;
$rupee = $p / 100;
*/

#(14)	WAP to convert the seconds into hours, minutes and seconds. 
/*
$sec = 53320;

$hr = $sec /3600;
$hr = (int)$hr;

$sec = $sec -($hr * 3600);

$min = $sec / 60;
$min = (int)$min;
$sec= $sec -($min*60);

echo "Time in Hours $hr minutes $min Seconds $sec";
*/

#(15)	WAP to convert the days into years, months and days. 

$days = 470;

$year = (int)($days/365);
$rdays = $days %365;
$mon = (int)($rdays/30);
$d = ($rdays%30);

echo $year." year ".$mon." month ".$d." days " ;


