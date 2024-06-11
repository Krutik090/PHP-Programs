<html>

    <HEAD>
        <title>FIRST PAGE </title>
    </HEAD>
    <BODY>
        <form action="experiment3.php" method="post">
            Enter first number : <input type="text" name="txtn1"/>
            
            <input type="submit" name="submitbtn" value="submit"/>
        </form>

        
    </BODY>    
</html>

<?php
/*
#<!-- (1)	WAP to print the sum of digits of given number. For ex. No=12345 => sum=15  --
    if(isset($_POST["submitbtn"]) && isset($_POST["txtn1"]))
    {
        $no = (int)$_POST["txtn1"];
        //$no = 12345;
        $sum = 0;
        while($no >0)
        {
            $r = $no%10;
            $sum = $sum + $r;
            $no = (int)$no/10;
        }
        echo $sum;
    }

  
?>
*/
 # (2)	WAP to find out the total number of odd digits and even digits within the given no and also find out sum of them.  
 /*
if(isset($_POST["submitbtn"]) && isset($_POST["txtn1"]))
{
    $n = (int)$_POST["txtn1"];
    $e_count = 0;
    $o_count = 0;
    $e_sum = 0;
    $o_sum = 0;
    while($n>1)
    {
        $k = $n % 10;
        $n = (int)$n / 10;
        if($k == 0)
            {
                continue;
            }
        else if($k % 2 == 0)
        {
            
            $e_sum = $e_sum + $k;
            $e_count++;
        } 
        else
        {
            $o_count++;
            $o_sum = $o_sum + $k;
        }
        
    }
    echo "odd num = $o_count and sum is $o_sum<br>";
    echo "even num = $e_count and sum is $e_sum<br>";
}



if(isset($_POST["submitbtn"]) && isset($_POST["txtn1"]))
{
    $no = $_POST['txtn1'];
    $rev =0;
    while($no>1){
        $r = $no%10;
        $rev = $rev *10+$r;
        $no = (int)$no/10;
    }

    echo $rev;
}

#(4)	WAP to find out the sum of first and last digit of a given no. For ex. No=55899 => sum=14 
if(isset($_POST["submitbtn"]) && isset($_POST["txtn1"]))
    {
        $no = (int)$_POST["txtn1"];
    
        
        $temp =  $no;
        $sum = 0;
        $arr = array();
        while($no >=1)
        {
            $r = $no%10;
            array_push($arr , $r);
            $no = (int)$no/10;
            
        }
        $first = $arr[0];
        $last = $arr[count($arr)-1];
       $sum = $first + $last ;
       echo "sum of $first and $last is $sum";
    }
    */
#(5) WAP to find out the smallest and largest digits in the given no. For ex. No=85924 => s=2, l=9 
/*
if(isset($_POST["submitbtn"]) && isset($_POST["txtn1"]))
    {
        $no = (int)$_POST["txtn1"];
        
        
        $temp =  $no;
        $arr = array();
        while($no >=1)
        {
            $r = $no%10;
            array_push($arr , $r);
            $no = (int)$no/10;
            
        }
       echo "The minimum is".min($arr)."<br>";
       echo "The maximum is".max($arr)."<br>";
    }
*/

#(6)	WAP to check whether the number is prime or not? 
/*
if(isset($_POST['submitbtn']))
{
    if(isset($_POST['txtn1']))
    {
        $n = $_POST['txtn1'];
        $isprime = 1;
        for($i = 2; $i <(int)($n/2);$i++)
        {
            if($n % $i == 0)
            {
                echo "$n  is not a prime number ";
                $isprime = 0;
                break;
            }
        }
        if($isprime == 1)
        {
            echo "$n is prime number";
        }
    }
}
*/
#(7)	WAP to check whether the number is palindrome or not? 
/*
if(isset($_POST["submitbtn"]) && isset($_POST["txtn1"]))
{
    $no = (int)$_POST["txtn1"];
    
    
    $temp =  $no;
    $rev = 0;
    while($no >=1)
    {
        $r = $no%10;
        $rev = ($rev*10)+ $r;
        $no = (int)$no/10;
        
    }
   
    if($rev == $temp){
        echo "$temp is palindrom";
    }
    else{
        echo "$temp not palindrom";
    }
}
*/
#(8)	WAP to check whether the number is armstrong or not? 
/*
if(isset($_POST["submitbtn"]) && isset($_POST["txtn1"]))
    {
        $no = (int)$_POST["txtn1"];
        //$no = 153; is armstrong
        
        $temp =  $no;
        $arms = 0;
        while($no >0)
        {
            $r = $no%10;
            $arms = $arms +($r*$r*$r);
            $no = (int)$no/10;
        }
        if($arms == $temp){
            echo "$temp is armstrong";
        }
        else{
            echo "$temp not  armstrong";
        }
    }
*/
#(9)	WAP to check whether the number is binary or not? 
/*
if(isset($_POST["submitbtn"]) && isset($_POST["txtn1"]))
{
    $no = (int)$_POST["txtn1"];
        
    $temp =  $no;
    $flag = true;
    
    while($no >=1)
    {
        $r = $no%10;
        if($r == 1 || $r == 0){
            $flag = true;
        }else{
            $flag = false;
        }
        $no = (int)$no/10;  
    }

   if($flag)
   {echo "<br>$temp is binary";}
   else
   {echo"<br>$temp is not binary";}

}
*/
#(10)	WAP to check whether the number is octal or not? 

/*
if(isset($_POST["submitbtn"]) && isset($_POST["txtn1"]))
{
    $no = (int)$_POST["txtn1"];
        
    $temp =  $no;
    $flag = true;
    
    while($no >=1)
    {
        $r = $no%10;
        if($r <0 || $r >7){
            $flag = false;
        }else{
            $flag = true;
        }
        $no = (int)$no/10;  
    }

   if($flag)
   {echo "<br>$temp is octal";}
   else
   {echo"<br>$temp is not octal";}

}
*/
echo decbin(12);