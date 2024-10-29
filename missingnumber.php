<?php
function findMissingNumber($input) {
    $n=count($input);
    $expectedsum=$n*($n+1)/2;
    $actualsum=array_sum($input);
    return $expectedsum-$actualsum;
}
$input = [3, 0, 1];
$output = findMissingNumber($input);
echo "The missing number is: " . $output; // Output: The missing number is: 2