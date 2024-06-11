<?php
// Function to reverse a string
/*
function reverseString($str) {
    $length = strlen($str);
    $reversed = '';
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }
    return $reversed;
}

// Example usage
$string = "Hello, world!";
echo "Original string: $string\n";
echo "Reversed string: " . reverseString($string) . "\n";

*/
#(2)	WAP to find out the frequency (occurrence) of each character in a given string. 

// Function to find the frequency of each character in a string
/*
function characterFrequency($str) {
    $frequency = array();
    $length = strlen($str);

    // Count the frequency of each character
    for ($i = 0; $i < $length; $i++) {
        $char = $str[$i];
        if (isset($frequency[$char])) {
            $frequency[$char]++;
        } else {
            $frequency[$char] = 1;
        }
    }

    return $frequency;
}

// Example usage
$string = "hello world";
echo "String: $string\n";
$frequencies = characterFrequency($string);
echo "Character frequencies:\n";
foreach ($frequencies as $char => $count) {
    echo "'$char' : $count\n";
}

*/

#(3)	WAP to find out the given string is palindrome or not? 
/*
// Given string
$string = "madam";

// Convert string to lowercase for case-insensitive comparison
$string = strtolower($string);

// Initialize variables for pointers
$start = 0;
$end = strlen($string) - 1;
$isPalindrome = true;

// Check for palindrome
while ($start < $end) {
    // If characters at current pointers are not equal, set isPalindrome to false
    if ($string[$start] != $string[$end]) {
        $isPalindrome = false;
        break;
    }
    // Move pointers
    $start++;
    $end--;
}

// Output the result
if ($isPalindrome) {
    echo "The given string '$string' is a palindrome.\n";
} else {
    echo "The given string '$string' is not a palindrome.\n";
}
*/

/*

// Given array
$array = [5, 2, 8, 1, 6, 3, 7, 4];

// Sort array in ascending order
sort($array);
echo "Ascending order: " . implode(', ', $array) . "\n";

// Sort array in descending order
rsort($array);
echo "Descending order: " . implode(', ', $array) . "\n";


*/

/*
// Define two arrays
$array1 = [5, 2, 8, 1, 6];
$array2 = [4, 9, 3, 7];

// Sort the arrays
sort($array1);
sort($array2);


// Initialize variables and pointers for merging
$result = [];
$i = 0;
$j = 0;

// Merge the sorted arrays into a third array while maintaining the sorted order
while ($i < count($array1) && $j < count($array2)) {
    if ($array1[$i] < $array2[$j]) {
        $result[] = $array1[$i];
        $i++;
    } else {
        $result[] = $array2[$j];
        $j++;
    }
}

// Append remaining elements from array1, if any
while ($i < count($array1)) {
    $result[] = $array1[$i];
    $i++;
}

// Append remaining elements from array2, if any
while ($j < count($array2)) {
    $result[] = $array2[$j];
    $j++;
}

// Output the merged and sorted array
echo "Merged and sorted array: " . implode(', ', $result) . "\n";

*/

/*
// Given array
$array = [-3, 0, 5, -2, 0, 7, 0, -1];

// Initialize variables to store the count of positive, negative, and zero elements
$positiveCount = 0;
$negativeCount = 0;
$zeroCount = 0;

// Iterate through the array to count positive, negative, and zero elements
foreach ($array as $element) {
    if ($element > 0) {
        $positiveCount++;
    } elseif ($element < 0) {
        $negativeCount++;
    } else {
        $zeroCount++;
    }
}

// Output the count of positive, negative, and zero elements
echo "Number of positive elements: $positiveCount\n";
echo "Number of negative elements: $negativeCount\n";
echo "Number of zero elements: $zeroCount\n";

*/



// Given array with duplicate elements
$array = [1, 2, 2, 3, 4, 4, 5, 6, 6, 7, 8, 8, 9];

// Remove duplicate elements from the array
$length = count($array);
for ($i = 0; $i < $length; $i++) {
    for ($j = $i + 1; $j < $length; $j++) {
        if ($array[$i] == $array[$j]) {
            // Shift elements to the left to overwrite duplicate element
            for ($k = $j; $k < $length - 1; $k++) {
                $array[$k] = $array[$k + 1];
            }
            // Decrement length of the array
            $length--;
            // Decrement j to recheck the current position after shifting
            $j--;
        }
    }
}

// Resize the array to remove trailing elements
$array = array_slice($array, 0, $length);
print_r($array);
// Output the array without duplicate elements
echo "Array after removing duplicates: " . implode(', ', $array) . "\n";

