<?php

echo "<h2>Task 1</h2>";
  $length = 10;
  $width = 5;
    $area = $length * $width;
   $peri = 2*($length + $width);

echo "Length = $length <br>";
 echo "Width = $width <br>";
  echo "Area = $area <br>";
echo "Perimeter = $peri <hr>";

echo "<h2>Task 2</h2>";

  $amount = 1000;
   $vat = $amount*0.15;
  $total = $amount + $vat;

echo "Amount = $amount<br>";
 echo "VAT (15%) = $vat<br>";
  echo "Total with VAT = $total<hr>";

echo "<h2>Task 3</h2>";
  $number = 23;

  if ($number%2 == 0){
    echo "$number is Even";
          }
   else {
    echo "$number is Odd";
   } echo "<hr>";

echo "<h2>Task 4</h2>";
  $a = 15;
  $b = 24;
  $c = 37;

 if ($a>$b && $a>$c) {
    echo "Largest number is $a";
      }
  elseif ($b>$a && $b>$c) {
    echo "Largest number is $b";
     }
   else{
    echo "Largest number is $c";
   } echo "<hr>";

echo "<h2>Task 5</h2>";
 for ($i = 10; $i <= 100; $i++) {
    if ($i%2!= 0) {
        echo $i . " ";
     }
 } echo "<hr>";

echo "<h2>Task 6</h2>";
   $arr = array(10, 20, 30, 40, 50);
   $search = 30;
   $found = false;

  foreach ($arr as $value) {
    if ($value == $search){
         $found = true;
        break;
    }
           }

 if ($found) {
    echo "Element Found!";
   }
  else {
    echo "Element Not Found!";
   } echo "<hr>";


echo "<h2>Task 7</h2>";
 for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
 } echo "<hr>";

  for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) 
        {
        echo $j . " ";
    }
     echo "<br>";
  } echo "<hr>";

$ch = 'A';
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $ch . " ";
        $ch++;
    } echo "<br>";
   }
?>
