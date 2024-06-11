<?php
/*
$age = array("Peter"=>"35","Ben"=>"37","joe"=>"43");
    print_r(array_change_key_case($age,CASE_UPPER)); echo "<br>";
    print_r(array_change_key_case($age,CASE_LOWER));


// Array Chunk

$cars =array("Volvo","BMW","Toyota","Honda","Mercedes","Opel"); echo "<br>";
print_r(array_chunk($cars,2)); 


// array colomn prints the perticular colomn of the array 

$a = array(
    array('id'=>3547,'firstname'=>'krutik','lastname'=>'thakar'),
    array('id'=>1245,'firstname'=>'bhavik','lastname'=>'parmar'),
    array('id'=>2345,'firstname'=>'devyanshi','lastname'=>'joshi')
);

print_r(array_column($a,'lastname'));



// Array combine    
//takes first as key and second as value 

$fname = array("Peter","Ben","Joe");
$age = array(35,37,45);

print_r(array_combine($fname,$age));



//array count 

$a = array(35,37,45,1,2,3,4,1,3,1,3,34,3,1,1,34,3,2,1,2,3,4,5,3,2,5,3,253,25,34,534,53,5,345,34,54,5);
print_r(array_count_values($a));



$a1= array('a'=>'red','b'=>'green','c'=>'blue','d'=>'yellow');
$a2= array('e'=>'red','f'=>'black','g'=>'purple');
$a3= array('a'=>'red','b'=>'black','h'=>'yellow');

print_r(array_diff($a1,$a2,$a3));



$a1 = array(1=>21,2=>24);

$a1 = array_fill(0,1,99);

print_r($a1);


//Array_Filter

function test_odd($var)
{
    return ($var & 1);  // checks the binary number of a1 with 1 
}
$a1 = array(1,3,2,3,4);
print_r(array_filter($a1,"test_odd"));

$a1= array('a'=>'red','b'=>'green','c'=>'blue','d'=>'yellow');
$result =array_flip($a1);
print_r($result);

*/
