<?php
  
  $n1 = $_POST["txtn1"];
  $n2 = $_POST["txtn2"];

  $sum = $n1 + $n2;
  $sub = $n1 - $n2;
  $mul = $n1 * $n2;
  $div = $n1 / $n2;

  echo "$sum <br/>";  
  echo "$sub <br/>";
  echo "$mul <br/>";
  echo "$div <br/>";

?>