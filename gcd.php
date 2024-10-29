<?php
function gcd($a,$b){
    while($b!=0){
        $temp=$b;
        $b=$a%$b;
        $a=$temp;
    }
    return $a;
}

$number1 = 48;
$number2 = 18;
echo gcd($number1, $number2); // Output: 6