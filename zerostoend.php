<?php
function moveZerosToEnd($arr) {
    $count = 0; // Count of non-zero elements

    // Traverse the array and move non-zero elements to the front
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] != 0) {
            $arr[$count++] = $arr[$i]; // Move non-zero elements forward
        }
    }

    // Fill remaining positions with zeros
    while ($count < count($arr)) {
        $arr[$count++] = 0;
    }

    return $arr;
}

// Example usage
$inputArray = [0, 1, 0, 3, 12];
$outputArray = moveZerosToEnd($inputArray);
print_r($outputArray); // Output: [1, 3, 12, 0, 0]
?>